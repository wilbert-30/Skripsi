<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     'nama'      => 'darth',
        //     'alamat'    => 'asiaskisk'
        // ];
        $faker = \Faker\Factory::create('id_ID');
        for($i=0; $i<100; $i++){

            $data =[
                'nama'  =>$faker->name,
                'alamat' => $faker->address
            ];
            // Using Query Builder
            $this->db->table('orang')->insert($data);
        }
        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat) VALUES(:nama:, :alamat:)", $data);

    }
}
