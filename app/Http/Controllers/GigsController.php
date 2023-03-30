<?php

namespace App\Http\Controllers;

use App\Models\Gigs;
use Illuminate\Http\Request;

class GigsController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $user_id = auth()->user()->id;

        $attributes = request()->validate([
            'role' => 'required|max:225',
            'company' => 'required',
            'country' => 'required',
            'state' => 'required',
            'address' => 'required',
            'tags' => 'required',
            'minimum_salary' => 'required',
            'maximum_salary' => 'required'

        ]);

        $attributes['user_id'] = $user_id;

        Gigs::create($attributes);

        session()->flash('success', 'A new gig has been added.');

        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        $gig = Gigs::find($id);

        $this->authorize('delete', $gig);
        
        $gig->delete();

        return redirect('/dashboard');
    }

    public function edit(Request $request, $id)
    {
        $gig = Gigs::findOrFail($id);

        return view('edit', compact('gig'));
    }


    public function update(Request $request, $id)
    {

        $gig = Gigs::find($id);

        $this->authorize('update', $gig);

        $validated = $request->validate([
            'role' => 'required|max:225',
            'company' => 'required',
            'country' => 'required',
            'state' => 'required',
            'address' => 'required',
            'tags' => 'required',
            'minimum_salary' => 'required',
            'maximum_salary' => 'required'
        ]);
    
        $gig->update($validated);
    
        session()->flash('success', 'The gig has been updated.');
    
        return redirect('/dashboard');
    }
}
