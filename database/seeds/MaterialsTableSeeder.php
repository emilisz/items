<?php

use Illuminate\Database\Seeder;
use App\Material;
class MaterialsTableSeeder extends Seeder
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
                'material' => 'Medis',
            ],
            [
                'material' => 'Metalas',
            ],
            [
                'material' => 'Plastikas',
            ],
            [
                'material' => 'Faniera',
            ],
            [
                'material' => 'Stiklas',
            ],
        ];
        foreach ($data as $value) {
            Material::create($value);
        }
    }
}
