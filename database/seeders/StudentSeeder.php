<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        student::create([
            "Student Name"=> "Ajay Bharti",
            "Father's Name"=> "Uma Shanker Bharti",
            "DOB" => "20-12-1996",
            "Address" => "211 Girraj dham vistar",
            "City"=> "kota",
            "State"=>"Rajasthan",
            "Pin"=> "23565",
            "Phone No"=>"8233846596",
            "Email"=>"ajaybharti@test.com",
            "Class"=> "3rd class",
            "Marks%"=> "95"

        ]);
    }
}
