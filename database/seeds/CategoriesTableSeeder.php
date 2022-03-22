<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Categorie;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $Grade = ['children', 'Young', 'Elderly', 'Supervisor'];


        foreach ($Grade as $S) {
            Categorie::create(['name' => $S]);
        }
    }
}
