<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\str;

use App\account_info;

class account_infoTableSeeder extends Seeder{
    public function run()
    {
        DB::table('account_info')->truncate();

        for($i=0; $i < 10; $i++){
            account_info::create([
                'account'=> str::random(8),
                'name'=>str::random(5),
                'sex'=>"F",
                'birth'=>"1994-08-31",
                'mail'=>str::random(6)."@mail.com",
                'description'=>str::random(15)
            ]);
        }
    }
}    