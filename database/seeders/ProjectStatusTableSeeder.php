<?php

namespace Database\Seeders;

use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProjectStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_statuses')->insert([
            'project_status_name' => 'Project Start',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('project_statuses')->insert([
            'project_status_name' => 'Project Ongoing - Backend Part',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        DB::table('project_statuses')->insert([
            'project_status_name' => 'Project Ongoing - Frontend Part',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        DB::table('project_statuses')->insert([
            'project_status_name' => 'On Testing Mode',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        DB::table('project_statuses')->insert([
            'project_status_name' => 'Almost Complete',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        DB::table('project_statuses')->insert([
            'project_status_name' => 'Complete',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        DB::table('project_statuses')->insert([
            'project_status_name' => 'Deployed',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        DB::table('project_statuses')->insert([
            'project_status_name' => 'Let\'s Start',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

    }
}
