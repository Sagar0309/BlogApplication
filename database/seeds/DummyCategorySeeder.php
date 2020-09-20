<?php

use Illuminate\Database\Seeder;

use App\Category;

class DummyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Data = [
            [
               'name'=>'Photography'
            ],
            [
                'name'=>'Fashion Designing'
            ],
        ];
  
        foreach ($Data as $key => $val) {
            Category::create($val);
        }
    }
}
