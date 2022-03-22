<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [


            'Categories',
            'children',
            'Young',
            'Elderly',
            'AdminPortal',
            'Users',
            'customers',
            'powers',


            'Client',
            'Add_Client',
            'Edite_C',
            'Delete_C',

            'Show',
            'Add_Role',
            'Edite_Role',
            'حذف صلاحية',




            'Add_User',
            'Edite',
            'Delete',




            'Add_A_C',
            'Delete_A_C',
            'Edite_A_C',

            'Add_F_C',
            'Delete_F_C',
            'Edite_F_C',

            'Add_H_C',
            'Delete_H_C',
            'Edite_H_C',


            'Add_W_C',
            'Delete_W_C',
            'Edite_W_C',





            'Add_A_Y',
            'Delete_A_Y',
            'Edite_A_Y',

            'Add_F_Y',
            'Delete_F_Y',
            'Edite_F_Y',

            'Add_H_Y',
            'Delete_H_Y',
            'Edite_H_Y',

            'Add_W_Y',
            'Delete_W_Y',
            'Edite_W_Y',


            'Add_A_E',
            'Delete_A_E',
            'Edite_A_E',

            'Add_F_E',
            'Delete_F_E',
            'Edite_F_E',

            'Add_H_E',
            'Delete_H_E',
            'Edite_H_E',

            'Add_W_E',
            'Delete_W_E',
            'Edite_W_E',
            'Excel_Export_U',
            'Excel_Export_C',










        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
