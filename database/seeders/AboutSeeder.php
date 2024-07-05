<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'nama_perusahaan' => 'Trikayarasa Jayafood',
            'emails' => 'Dimaskerta84@gmail.com',
            'locations' => 'Tiasih Village RT.02, RW.02, Tulangan, Sidaorjo, Jawa Timur, Indonesia',
            'phone' => '085655111130',
            'image' =>'20211222161322.svg',
            'text' =>'Quick & Easy to Use Tailwind Template',
            'title' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.
',
        ]);
    }
}
