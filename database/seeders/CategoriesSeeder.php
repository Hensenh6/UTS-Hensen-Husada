<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories') -> insert(
            [
                'category_id' => 'CA001',
                'name' => 'Romance'
            ]);
        DB::table('categories') -> insert(
            [
                'category_id' => 'CA002',
                'name' => 'Klasik'
            ]);
        DB::table('categories') -> insert(
             [
                'category_id' => 'CA003',
                'name' => 'Sastra'
             ]);
    }
}
