<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->truncate();

        $param = [
            'user_id' => '1',
            'category' => '食器用洗剤',
            'name' => 'キュキュット',
            'stock' => '0',
            'dayperstock' => '30',
            'dateopen' => '2019-06-22',
            'datelastopen' => '2019-05-01',
            'alertstock' => '1'
        ];
        DB::table('items')->insert($param);

        $param = [
            'user_id' => '2',
            'category' => 'お風呂用洗剤',
            'name' => 'バスマジックリン',
            'stock' => '1',
            'dayperstock' => '50',
            'dateopen' => '2019-06-23',
            'datelastopen' => '2019-05-20',
            'alertstock' => '1'
        ];
        DB::table('items')->insert($param);
    }
}
