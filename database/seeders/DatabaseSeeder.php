<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\Tenant\Team::factory(20)->create();
         \App\Models\Tenant\User::factory(100)->create();
         \App\Models\Tenant\UserEducation::factory(700)->create();
         \App\Models\Tenant\UserWork::factory(400)->create();
         \App\Models\Tenant\UserDependent::factory(400)->create();
         \App\Models\Tenant\UserLeaveBalance::factory(400)->create();
         \App\Models\Tenant\Course::factory(100)->create();
         \App\Models\Tenant\Base::factory(100)->create();
         \App\Models\Tenant\Board::factory(100)->create();
         \App\Models\Tenant\Survey::factory(100)->create();
    }
}
