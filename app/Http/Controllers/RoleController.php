<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Child;
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
            $user->child()->save($teacher);
        }
        if ($user->role == 'admin') {
            $admin = new Admin();
            $admin->id = $user->id;
            $user->child()->save($admin);
        }
    }
}
