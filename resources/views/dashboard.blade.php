<x-app-layout>
    <div class="flex justify-between items-center px-20 py-10 bg-white">
        <div class="flex items-center">
            <h1 class="font-bold text-2xl">Gigs</h1>
        </div>
        <div class="flex items-center">
            <a href="/gigs/new-gig"><button class="bg-blue-900 text-white py-2 px-4 rounded font-bold">New gig  +</button></a>
        </div>
    </div>

    <ul class="flex justify-between items-center px-20 bg-white border-b">
        <li>
            <a href="#" class="flex items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-b-2 border-transparent border-yellow-500 pr-6">
                <span class="ml-2 text-sm tracking-wide truncate font-bold">All gigs</span>
                <span class="px-2 py-0.5 ml-2 text-xs font-medium tracking-wide text-white bg-yellow-500 rounded-full">3404</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-b-2 border-transparent hover:border-yellow-500 pr-6">
                <span class="ml-2 text-sm tracking-wide truncate font-bold">My gigs</span>
                <span class="px-2 py-0.5 ml-2 text-xs font-medium tracking-wide text-yellow-500 bg-yellow-100 rounded-full">1200</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-b-2 border-transparent hover:border-yellow-500 pr-6">
                <span class="ml-2 text-sm tracking-wide truncate font-bold">Rejected gigs</span>
                <span class="px-2 py-0.5 ml-2 text-xs font-medium tracking-wide text-yellow-500 bg-yellow-100 rounded-full">100</span>
            </a>
        </li>
    </ul>

    <div class="flex justify-between items-center px-20 mt-10 bg-white">
        <div class="flex items-center">
            <button class="ml-2 py-2 px-10 rounded outline-none border bg-transparent font">Freelance</button>
        </div>
        <div class="flex items-center">
            <button class="ml-2 py-2 px-10 rounded outline-none border bg-transparent font">Keywords</button>
        </div>
        <div class="flex items-center">
            <button class="ml-2 py-2 px-10 rounded outline-none border bg-transparent font">Location</button>
        </div>
        <div class="flex items-center">
            <button class="ml-2 py-2 px-10 rounded outline-none border bg-transparent font">Remote friendly</button>
        </div>
        <div class="flex items-center">
            <button class="ml-2 py-2 px-10 rounded outline-none border bg-transparent font">Design</button>
        </div>
        <div class="flex items-center">
            <button class="ml-2 py-2 px-10 rounded outline-none border bg-transparent font">Contract</button>
        </div>

    </div>

    <div class="mt-5 mx-20">
        <table class="w-full text-left">
            <tr >
                <th></th>
                <th class="w-1/6 py-8 ">Role</th>
                <th class="w-1/6">Company</th>
                <th class="w-1/6">Date</th>
                <th class="w-1/6">Salary($)</th>
                <th class="w-1/6">Delete</th>
            </tr>
            @foreach ($gigs as $gig)
            <tr class="border-2 rounded-md">
                <td class="px-5"><input type="checkbox" name="row1"></td>
                <td class="hover:bg-yellow-100 rounded">
                    <a href="/gigs/{{ $gig->id }}/edit">
                        {{ $gig->role }}
                    </a>
                </td>
                <td>{{ $gig->company }}</td>
                <td>{{ $gig->created_at }}</td>
                <td>{{ $gig->minimum_salary . " " . " - " . $gig->maximum_salary }}</td>
                <td>
                    <a href="/delete/{{ $gig->id }}">
                        <button  type="submit" class="bg-yellow-100 hover:bg-yellow-300 text-yellow-500 px-5 py-1 rounded">Delete</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        
        @if (session()->has('success'))
            <div class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </div>


    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
