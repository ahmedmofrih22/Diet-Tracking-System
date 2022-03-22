<?php

use App\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();
        $Specialization = ['Height', 'Weight', 'Fat_Percentage', 'Abdominal_Circumference', 'Supervisor'];


        foreach ($Specialization as $S) {
            Specialization::create(['Name' => $S]);
        }
    }
}
