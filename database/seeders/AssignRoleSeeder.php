<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //assign super admin
        $superadmin = User::find(1);
        $superadmin->assignRole('super admin');

        //assign hr dan permissions
        $hr = User::find(2);
        $hr->assignRole('hr');
        $hr->givePermissionTo('show karyawan','create karyawan','edit karyawan','delete karyawan','edit gaji','print absensi','show gaji', 'show absensi');

        //assign keuangan dan permissions
        $keuangan = User::find(3);
        $keuangan->assignRole('keuangan');
        $keuangan->givePermissionTo('show gaji','print gaji', 'show karyawan');

        //assign direktur dan permissions
        $direktur = User::find(4);
        $direktur->assignRole('direktur');
        $direktur->givePermissionTo('show karyawan','show gaji');

        //assign karyawan dan permissions
        $karyawan = User::find(5);
        $karyawan->assignRole('karyawan');
        $karyawan->givePermissionTo('show absensi','show gaji');
    }
}
