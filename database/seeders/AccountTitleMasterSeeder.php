<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Account\AccountTitleMaster;
use Illuminate\Support\Facades\DB;

class AccountTitleMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // 資産
            ['category' => 1, 'name' => '現金'],
            ['category' => 1, 'name' => '預金'],
            ['category' => 1, 'name' => '当座預金'],
            ['category' => 1, 'name' => '定期預金'],
            ['category' => 1, 'name' => '受取手形'],
            ['category' => 1, 'name' => '売掛金'],
            ['category' => 1, 'name' => '有価証券'],
            ['category' => 1, 'name' => '棚卸資産'],
            ['category' => 1, 'name' => '前払金'],
            ['category' => 1, 'name' => '貸付金'],
            ['category' => 1, 'name' => '建物'],
            ['category' => 1, 'name' => '建物付属設備'],
            ['category' => 1, 'name' => '機械装置'],
            ['category' => 1, 'name' => '車両運搬具'],
            ['category' => 1, 'name' => '土地'],
            ['category' => 1, 'name' => 'ソフトウェア'],

            // 負債
            ['category' => 2, 'name' => '支払手形'],
            ['category' => 2, 'name' => '買掛金'],
            ['category' => 2, 'name' => '借入金'],
            ['category' => 2, 'name' => '未払金'],
            ['category' => 2, 'name' => '前受金'],
            ['category' => 2, 'name' => '預り金'],
            ['category' => 2, 'name' => '貸倒引当金'],

            // 純資産
            ['category' => 3, 'name' => '資本金'],
            ['category' => 3, 'name' => '利益剰余金'],

            // 費用
            ['category' => 4, 'name' => '仕入'],
            ['category' => 4, 'name' => '租税公課'],
            ['category' => 4, 'name' => '荷造運賃'],
            ['category' => 4, 'name' => '水道光熱費'],
            ['category' => 4, 'name' => '旅費交通費'],
            ['category' => 4, 'name' => '通信費'],
            ['category' => 4, 'name' => '広告宣伝費'],
            ['category' => 4, 'name' => '接待交際費'],
            ['category' => 4, 'name' => '損害保険料'],
            ['category' => 4, 'name' => '修繕費'],
            ['category' => 4, 'name' => '消耗品費'],
            ['category' => 4, 'name' => '減価償却費'],
            ['category' => 4, 'name' => '福利厚生費'],
            ['category' => 4, 'name' => '給料賃金'],
            ['category' => 4, 'name' => '外注工賃'],
            ['category' => 4, 'name' => '利子割引料'],
            ['category' => 4, 'name' => '地代家賃'],
            ['category' => 4, 'name' => '貸倒金'],
            ['category' => 4, 'name' => '支払手数料'],
            ['category' => 4, 'name' => '雑費'],

            // 収益
            ['category' => 5, 'name' => '売上'],
            ['category' => 5, 'name' => '受取利息'],
            ['category' => 5, 'name' => '受取手数料'],
            ['category' => 5, 'name' => '雑収入'],
        ];

        AccountTitleMaster::truncate();
        DB::transaction(function () use ($data) {
            AccountTitleMaster::insert($data);
        });
    }
}
