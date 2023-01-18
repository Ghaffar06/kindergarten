<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Child;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;

class RoleController extends Controller
{
    //
    public static function registerUser(User $user)
    {
        if ($user->role == 'student') {
            $child = new Child();
            $child->id = $user->id;
            $child->score = 0;
            $child->level = 0;
            $user->child()->save($child);
        }
        if ($user->role == 'teacher') {
            $teacher = new Teacher();
            $teacher->id = $user->id;
            $teacher->admin_confirmed = 'N';
            $user->teacher()->save($teacher);
        }
        if ($user->role == 'admin') {
            $admin = new Admin();
            $admin->id = $user->id;
            $user->admin()->save($admin);
        }
    }

    public static function get_user_id()
    {
        if (\Auth::user() === null)
            return -1;
        else
            return \Auth::user()->id;
    }

    public static function student()
    {
        $user = \Auth::user();
        if ($user === null)
            return false;
        $role = $user->role()->first();
        return $role->title === 'student';
    }

    public function activate_user(User $user)
    {
        $authorization = RoleController::can('activate user');
        if ($authorization !== null) {
            return $authorization;
        }
        $user->active = 'Y';
        $user->save();
        return back();
    }

    public static function can(string $permission)
    {
        if (self::check_can($permission))
            return null;
        else
            return back()->with('failed', 'unauthorized, you dont have access to this page');
        $user = \Auth::user();
        if ($user !== null) {
            $role = $user->role()->first();
            if ($user->active == 'N')
                return back()->with('failed', 'unauthorized, you dont have access to this page');
        } else
            $role = Role::where('title', '=', 'guest')->first();

        $permission_id = Permission::where('title', '=', $permission)->first()['id'];
        $t = $role->rolePermissions->where('permission_id', '=', $permission_id)->count();
        if ($t === 0) {
            return back()->with('failed', 'unauthorized, you dont have access to this page');
        } else
            return null;
    }

    public static function check_can(string $permission)
    {
        $user = \Auth::user();
        if ($user !== null) {
            $role = $user->role()->first();
            if ($user->active == 'N')
                return false;
        } else
            $role = Role::where('title', '=', 'guest')->first();

        $permission_id = Permission::where('title', '=', $permission)->first()['id'];
        $t = $role->rolePermissions->where('permission_id', '=', $permission_id)->count();
        if ($t === 0) {
            return false;
        } else
            return true;
    }

    public function deactivate_user(User $user)
    {
        $authorization = RoleController::can('deactivate user');
        if ($authorization !== null) {
            return $authorization;
        }
        $user->active = 'N';
        $user->save();
        return back();
    }
}
