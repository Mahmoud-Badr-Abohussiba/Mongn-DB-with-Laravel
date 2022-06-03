<?php

namespace Database\Seeders;

use App\Models\Son;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sami=User::where('name','sami')->first()->id;
        $waleed=User::where('name','waleed')->first()->id;
        Son::create([
           'user_id'=>$sami,
            'name' => 'mansour',
           'birth_date' => '1980-01-01',
        ]);
        Son::create([
            'user_id'=>$sami,
            'name' => 'waleed',
            'birth_date' => '1982-01-01',
        ]);
        Son::create([
            'user_id'=>$waleed,
            'name' => 'khaled',
            'birth_date' => '1983-01-01',
        ]);
        Son::create([
            'user_id'=>$waleed,
            'name' => 'mustafa',
            'birth_date' => '1984-01-01',
        ]);
    }
}
