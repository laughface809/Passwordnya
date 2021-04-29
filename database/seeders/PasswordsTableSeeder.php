<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasswordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('passwords')->insert([
            [
                'string' => 'mantab2',
                'created_at' => Carbon::now()->format('Y-m-d M:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d M:i:s')
            ]
        ]);
    }
}
