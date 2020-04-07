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
            'users-list',
            'users-create',
            'users-edit',
            'users-delete',
            'farmers-list',
            'farmers-create',
            'farmers-edit',
            'farmers-delete',
            'produce-list',
            'produce-create',
            'produce-edit',
            'produce-delete',
            'produce-manage',
            'crop-manage',
            'crops-list',
            'crops-create',
            'crops-edit',
            'crops-delete',
            'varieties-list',
            'varieties-create',
            'varieties-edit',
            'varieties-delete',
            'reports-list',
            'reports-create',
            'reports-edit',
            'reports-delete',
            'blogs-list',
            'blogs-create',
            'blogs-edit',
            'blogs-delete',
            'Administer roles & permissions'
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
