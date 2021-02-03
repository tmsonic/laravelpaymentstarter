<?php

namespace App\Http\Controllers;

use App\Helpers\CurrencyHelper;
use Auth;
use DB;
use App\Models\Course\Course;

class FrontendCourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'ASC',)->paginate(5);
        return view('courses', compact('courses'));
    }

    public function show($courseId)
    {
        $authUser = Auth::user();
        $course = DB::table('courses')->where('id', $courseId)->first();
        if(is_null($course))
        {
            abort(403, 'The course has not been found!');
        }

        $userBoughtCourse = false;
        if(!is_null($authUser))
        {
            $userCourse = DB::table('user_courses')->where('user_id', $authUser->id)->where('course_id', $course->id)->first();
            if(!is_null($userCourse))
            {
                $userBoughtCourse = true;
            }
        }

        $currency = CurrencyHelper::getCurrencyString();

        return view('course', compact('course', 'userBoughtCourse', 'currency'));
    }
}
