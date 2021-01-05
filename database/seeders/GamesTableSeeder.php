<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->delete();
        $games_seeds=[
            [
                'game_name'=>'パワプロ',
                'price'=>'2980',
                'genre'=>'スポーツ',
                'user_id'=>'1',
                'cart_id'=>'1'
            ],
            [
                'game_name'=>'三國無双',
                'price'=>'7980',
                'genre'=>'アクション',
                'user_id'=>'1',
                'cart_id'=>'1'
            ],
        ];
        foreach($games_seeds as $game) {
            DB::table('games')->insert($game);
        }
    }
}
