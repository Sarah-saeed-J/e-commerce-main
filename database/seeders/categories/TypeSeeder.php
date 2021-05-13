<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        $now = Carbon::now();
        $types=[
            [
                'name' => 'أجهزة الكترونية',
                'img' => '11',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'ألبسة',
                'img' => '11',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'اكسسوارات',
                'img' => '11',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];
    }
}
