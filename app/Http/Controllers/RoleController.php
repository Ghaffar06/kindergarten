<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\User ;
class RoleController extends Controller
{
    //
    public static function registerUser(User $user)
    {
        if($user->role == 'student')
        {
            $child = new Child() ;
            $child->id = $user->id ;
            $child->score = 0 ; 
            $child->level = 0 ;
            $user->child()->save($child); 
        }
        if($user->role == 'teacher')
        {
            $teacher = new Teacher() ;
            $teacher->id = $user->id ;
            $teacher->admin_confirmed = 'N' ;
            $user->child()->save($child); 
        }
    }
}
