<?php

namespace Database\Seeders;

use App\Models\GrandSon;
use App\Models\Son;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrandSonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mansour_sami=Son::where('name','mansour')->first()->id;
        GrandSon::create([
            'son_id'=>$mansour_sami,
            'name' => 'sami',
            'birth_date' => '2000-01-01',
        ]);
        GrandSon::create([
            'son_id'=>$mansour_sami,
            'name' => 'omar',
            'birth_date' => '2001-01-01',
        ]);GrandSon::create([
        'son_id'=>$mansour_sami,
        'name' => 'hussain',
        'birth_date' => '2002-01-01',
    ]);GrandSon::create([
        'son_id'=>$mansour_sami,
        'name' => 'ali',
        'birth_date' => '2003-01-01',
    ]);

        $waleed_sami=Son::where('name','waleed')->first()->id;

        GrandSon::create([
            'son_id'=>$waleed_sami,
            'name' => 'mamdouh',
            'birth_date' => '2000-01-01',
        ]);
        GrandSon::create([
            'son_id'=>$waleed_sami,
            'name' => 'mahmoud',
            'birth_date' => '2001-01-01',
        ]);
        GrandSon::create([
        'son_id'=>$waleed_sami,
        'name' => 'hassan',
        'birth_date' => '2002-01-01',
        ]);

        $khaled_waleed=Son::where('name','khaled')->first()->id;

        GrandSon::create([
            'son_id'=>$khaled_waleed,
            'name' => 'samer',
            'birth_date' => '2002-01-01',
        ]);

        GrandSon::create([
            'son_id'=>$khaled_waleed,
            'name' => 'fady',
            'birth_date' => '2003-01-01',
        ]);

        GrandSon::create([
            'son_id'=>$khaled_waleed,
            'name' => 'farouk',
            'birth_date' => '2004-01-01',
        ]);



        $mustafa_waleed=Son::where('name','mustafa')->first()->id;

        GrandSon::create([
            'son_id'=>$mustafa_waleed,
            'name' => 'ahmed',
            'birth_date' => '2002-01-01',
        ]);

        GrandSon::create([
            'son_id'=>$mustafa_waleed,
            'name' => 'hassan',
            'birth_date' => '2002-01-01',
        ]);

        GrandSon::create([
            'son_id'=>$mustafa_waleed,
            'name' => 'nader',
            'birth_date' => '2002-01-01',
        ]);

    }
}
