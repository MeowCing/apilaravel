<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //categories
      $categories = [
        [
            'nm_categories'=>'Baju',
            'description'=>'baru',
        ],
        [
            'nm_categories'=>'celana',
            'description'=>'baru',
        ],
        [
            'nm_categories'=>'jaket',
            'description'=>'baru',
        ]
      ];
      foreach($categories as $key) {
        Category::create($key);
      }
    }
}
