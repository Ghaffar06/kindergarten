<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (count(Permission::all()) === 0) {
            $all_roles = [
                'admin',
                'teacher',
                'guest',
                'student',
            ];
            $all_logged = [
                'admin',
                'teacher',
                'student',
            ];
            $all_users = [
                'teacher',
                'guest',
                'student',
            ];
            $admin_teacher = [
                'admin',
                'teacher',
            ];


            $all_permission = [
                'view category list' => $all_roles,
                'view word list' => $all_logged,
                'view article list' => $all_logged,
                'view article details' => $all_logged,
                'view entertainment video list' => $all_logged,
                'view entertainment video' => $all_logged,
                'view letter photos' => $admin_teacher ,
                'view letter list' => $all_logged,
                'view report list' => ['admin'] ,
                'view report details' => ['admin'],
                'view word details' => $all_logged,
                'create article' => ['teacher'],
                'create category' => ['teacher'],
                'create letter photo' => ['teacher'],
                'create word' => ['teacher'],
                'create report' => $all_users,
                'submit answers\'s article' => ['student'],
                'handle report' => ['admin'],
                'activate user' => ['admin'],
                'deactivate user' => ['admin'],
                'update word details' => ['teacher'],
                'take words test' => ['student'],
            ];
            foreach ($all_permission as $permission_title => $roles) {
                $permission = (new Permission(['title' => $permission_title]));
                $permission -> save() ;
                foreach ($roles as $_ => $role) {
                    $rolePermission = new RolePermission([
                        'permission_id' => $permission->id,
                        'role_id' =>Role::where('title', '=' , $role)->first()['id']
                    ]);
                    $rolePermission->save() ;
                }
            }
        }
    }
}
