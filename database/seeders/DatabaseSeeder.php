<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use App\Models\Role;
use Database\Factories\RoleFactory;
use Database\Factories\RoleUserTableFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(1)->create();
         Company::factory(50)->create();
         Employee::factory(200)->create();
         Role::factory(1)->create();
         $this->call(RoleUserTableSeeder::class);
    }
}
