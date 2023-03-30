<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Companys;
use App\Models\Gigs;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        //------ For User Model---------//
        User::factory(5)->create();

        $user  = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        //------- For Company Model-----//
        Companys::factory(5)->create();

        $company = Companys::factory()->create([
            'name' => 'TM340',
            'gig_id' => 1,
            'user_id' => 1
        ]);

        //------- For Role Model-----//
        Roles::factory(5)->create();

        $role = Roles::factory()->create([
            'name' => 'Product Designer',
            'gig_id' => 1
        ]);

        //------- For Gigs Model-----//
        Gigs::factory(5)->create();

        Gigs::factory()->create([
            'role' => $role->name,
            'company' =>$company->name,
            'user_id' => $user->id,
            'country' => 'Nigeria',
            'state' => 'Lagos',
            'address' => 'obalende',
            'tags' => 'Full Time',
            'minimum_salary' =>6000,
            'maximum_salary' =>7000,
        ]);
    }
}
