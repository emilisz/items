<?php

use Illuminate\Database\Seeder;
use App\Item;
class ItemsTableSeeder extends Seeder
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
                'name' => 'Pakabukas',
                'kiekis' => 20,
                'medziaga' => 'Metalas',
                'kategorija' => 'Home'
            ],
            [
                'name' => 'Kirvis',
                'kiekis' => 10,
                'medziaga' => 'Mediena',
                'kategorija' => 'Garden'
            ],
            [
                'name' => 'Dviratis',
                'kiekis' => 5,
                'medziaga' => 'Metalas',
                'kategorija' => 'Home'
            ],
            [
                'name' => 'Telefonas',
                'kiekis' => 20,
                'medziaga' => 'Plastikas',
                'kategorija' => 'Electronics'
            ],
            [
                'name' => 'Televizorius',
                'kiekis' => 40,
                'medziaga' => 'Plastikas',
                'kategorija' => 'Electronics'
            ],
        ];
        foreach ($data as $value) {
            Item::create($value);
        }
    }
}
