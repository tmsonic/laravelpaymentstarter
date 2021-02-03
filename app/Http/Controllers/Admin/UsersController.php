<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserCourse\UserCourse;

class UsersController extends Controller
{
    public function index()
    {
        $meta_title = "Users Management";
        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.users', compact('meta_title', 'users'));
    }

    public function destroy(Request $request, $userId)
    {
        $user = User::find($userId);
        if(is_null($user))
        {
            return redirect()->route('admin.users')->with('failureMsg', 'The User with the following id could NOT be deleted: ' . $userId);
        }

        $userCourses = UserCourse::where('user_id', $user->id)->get();
        foreach($userCourses as $item)
        {
            $item->delete();
        }

        $user->delete();

        return redirect()->route('admin.users')->with('successMsg', 'The User with the following id has been successfully deleted: ' . $userId);
    }
}
