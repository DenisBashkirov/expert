<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
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
                'name'=>'Почерковедческая экспертиза',
                'icon'=>'pen',
                'category_id'=> 1,
                'popular' => 1
            ],
            [
                'name'=>'Техническая экспертиза документов',
                'icon'=>'files',
                'category_id'=> 1,
                'popular' => 1
            ],
            [
                'name'=>'Экспертиза давности документов',
                'icon'=>'paper',
                'category_id'=> 1,
                'popular' => 1
            ],

            [
                'name'=>'Автотехническая экспертиза',
                'icon'=>'wheel',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Землеустроительная экспертиза',
                'icon'=>'house',
                'category_id'=> 1,
                'popular' => 1
            ],
            [
                'name'=>'Строительно-техническая экспертиза',
                'icon'=>'helmet',
                'category_id'=> 1,
                'popular' => 1
            ],

            [
                'name'=>'Экологическая экспертиза',
                'icon'=>'plant',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Финансово-экономическая экспертиза',
                'icon'=>'calculator',
                'category_id'=> 1,
                'popular' => 1
            ],
            [
                'name'=>'Бухгалтерская экспертиза',
                'icon'=>'accounts-fig',
                'category_id'=> 1,
                'popular' => 0
            ],

            [
                'name'=>'Агротехническая экспертиза',
                'icon'=>'buldozer',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Биологическая экспертиза',
                'icon'=>'microscope',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Товароведческая экспертиза',
                'icon'=>'cart',
                'category_id'=> 1,
                'popular' => 0
            ],

            [
                'name'=>'Трасологическая экспертиза',
                'icon'=>'traffic-cone',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Баллистическая экспертиза',
                'icon'=>'bullet',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Пожаротехническая экспертиза',
                'icon'=>'extinguisher',
                'category_id'=> 1,
                'popular' => 0
            ],

            [
                'name'=>'Экспертиза холодного оружия',
                'icon'=>'knife',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Фоноскопическая экспертиза',
                'icon'=>'headphones',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Компьютерно-техническая экспертиза',
                'icon'=>'laptop',
                'category_id'=> 1,
                'popular' => 0
            ],

            [
                'name'=>'Видеотехническая экспертиза',
                'icon'=>'video-camera',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Фототехническая экспертиза',
                'icon'=>'photo-camera',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Портретная экспертиза',
                'icon'=>'bust',
                'category_id'=> 1,
                'popular' => 0
            ],

            [
                'name'=>'Лингвистическая экспертиза',
                'icon'=>'vocabulary',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Автороведческая экспертиза',
                'icon'=>'pack-of-books',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Судебная психологическая экспертиза',
                'icon'=>'mind-puzzle',
                'category_id'=> 1,
                'popular' => 0
            ],

            [
                'name'=>'Судебная психиатрическая экспертиза',
                'icon'=>'head-puzzle',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Судебно-медицинская экспертиза',
                'icon'=>'medkit',
                'category_id'=> 1,
                'popular' => 0
            ],
            [
                'name'=>'Судебная генетическая экспертиза',
                'icon'=>'dna',
                'category_id'=> 1,
                'popular' => 0
            ],

            [
                'name'=>'Оценка ущерба',
                'icon'=>'moneybox',
                'category_id'=> 2,
                'popular' => 0
            ],
            [
                'name'=>'Оценка имущества',
                'icon'=>'keys',
                'category_id'=> 2,
                'popular' => 0
            ],
            [
                'name'=>'Оценка арендной ставки',
                'icon'=>'home',
                'category_id'=> 2,
                'popular' => 0
            ],

            [
                'name'=>'Рецензирование судебных экспертиз',
                'icon'=>'document',
                'category_id'=> 3,
                'popular' => 0
            ],
        ];

        foreach ($data as $k=>$v) {
            $data[$k]['slug'] = Str::slug($data[$k]['name']);
        }

        DB::table('services')->insert($data);
    }
}
