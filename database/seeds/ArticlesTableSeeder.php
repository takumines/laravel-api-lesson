<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'タイトル1',
                'body'  => '内容1'
            ],
            [
                'title2' => 'タイトル2',
                'body2' =>  '内容2'
            ],
            [
                'title3' => 'タイトル3',
                'body3'  => '内容3'
            ],
        ]);
    }
}
