<?php

namespace Database\Seeders;
use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $demo=collect(
        [
            [
                'c_name'=>'Komal pachal',
                'c_email'=>'komal@gmail.com',
                'c_phone'=>78988913,
                'c_address'=>'c2-laxmi skycity',
                'c_city'=>'surat'
            ],
            [
                'c_name'=>'Laxmi Rajput',
                'c_email'=>'laxmi@gmail.com',
                'c_phone'=>99825823,
                'c_address'=>'23 Pujan bunglows',
                'c_city'=>'surat'
            ],
            [
                'c_name'=>'Asshvi Patel',
                'c_email'=>'asshvi@gmail.com',
                'c_phone'=>82525823,
                'c_address'=>'123 Hariom society',
                'c_city'=>'Ahmedabad'
            ]
        ]);

        $demo->each(function ($d)
        {
            Customer::create($d);
        });

    }
}
