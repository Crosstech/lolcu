<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('champions')->insert([
            'name' => 'Annie',
            'title' => 'Şeytan Çekici',
            'key' => 'Annie',
        ]);
    }
}
