<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceCategorieSeeder extends Seeder
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
                'name' => 'Экспертизы',
                'h1' => 'Все виды экспертиз'
            ],
            [
                'name' => 'Оценка',
                'h1' => 'Все виды оценок'
                ],
            [
                'name' => 'Рецензирование',
                'h' => ''
            ],
        ];

        foreach ($data as $k => $v) {
            $data[$k]['slug'] = Str::slug($data[$k]['name']);
        }

        DB::table('service_categories')->insert($data);
    }
}
