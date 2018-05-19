<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Electronics',
            ],
            [
                'title' => 'Other',
            ],
            [
                'title' => 'Home',
            ],
            [
                'title' => 'Garden',
            ],
            [
                'title' => 'Chemicals',
            ],
        ];
        foreach ($data as $value) {
            Category::create($value);
        }
    }
}
