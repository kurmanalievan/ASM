<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sessions')->truncate();
        Session::factory(15)->create();
    }
}
