<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Course\Course;
use Illuminate\Support\Str;
use App\Helpers\CurrencyHelper;
use App\Models\UserCourse\UserCourse;
use DB;

class CourseController extends Controller
{
    public function index() {
        $meta_title = "Courses";
        $courses = Course::orderBy('id', 'DESC')->paginate(5);
        $currency = CurrencyHelper::getCurrencyString();
        return view('admin.courses.index', compact('meta_title', 'courses', 'currency'));
    }

    public function create() {
        $meta_title = "Create New Courses";
        return view('admin.courses.create', compact('meta_title'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'course_title' => ['required', 'string', 'max:1000', 'unique:courses,title'],
            'short_description' => ['nullable', 'string', 'max:10000'],
            'cover_image' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:1999'],
            'course_price' => ['required', 'numeric', 'min:1'],
        ]);

        if( $validator->fails() )
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $course = new Course;
        $course->title = $request->course_title;
        $course->slug = Str::slug($request->course_title);
        $course->description = $request->short_description;
        $course->price = $request->course_price;
        $course->save();

        if( $request->hasFile('cover_image')  )
        {
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            $fileNameToStore = $originalFileName . '_' . $course->id . '.' . $extension;
            $destinationPath = public_path() . "/uploads/images";
            $uploadIsSuccessful = $file->move($destinationPath, $fileNameToStore);
            if($uploadIsSuccessful) { $course->image = $fileNameToStore; }
            $course->save();
        }

        return redirect()->route('admin.courses')->with('successMsg', 'The Course has been successfully created!');
    }

    public function edit($courseId)
    {
        $course = DB::table('courses')->find($courseId);
        if(is_null($course))
        {
            abort(403, 'The course has not been found!');
        }
        $meta_title = "Edit a Course";
        return view('admin.courses.edit', compact('meta_title', 'course'));
    }

    public function update(Request $request, $courseId)
    {
        $course = Course::findOrFail($courseId);

        $validator = Validator::make($request->all(), [
            'course_title' => ['required', 'string', 'max:1000', 'unique:courses,title,' . $courseId],
            'short_description' => ['nullable', 'string', 'max:10000'],
            'cover_image' => ['nullable', 'image', 'mimes:jpeg,jpg,png,webp', 'max:1999'],
            'course_price' => ['required', 'numeric', 'min:1'],
        ]);

        if( $validator->fails() )
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $course->title = $request->course_title;
        $course->slug = Str::slug($request->course_title);
        $course->description = $request->short_description;
        $course->price = $request->course_price;

        if( $request->hasFile('cover_image')  )
        {
            $file = $request->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            $fileNameToStore = $originalFileName . '_' . $course->id . '.' . $extension;
            $destinationPath = public_path() . "/uploads/images";

            $fileExists = file_exists($destinationPath . '/' . $course->image);
            $isFile = is_file($destinationPath . '/' . $course->image);
            if ( $fileExists && $isFile )
            {
                $fileDeleted = unlink($destinationPath . '/' .$course->image);
            }

            $uploadIsSuccessful = $file->move($destinationPath, $fileNameToStore);
            if($uploadIsSuccessful) { $course->image = $fileNameToStore; }
        }

        $course->save();

        return redirect()->route('admin.courses')->with('successMsg', 'The Course has been successfully updated!');
    }

    public function destroy(Request $request, $courseId)
    {
        $course = Course::find($courseId);
        if(is_null($course))
        {
            return redirect()->route('admin.courses')->with('failureMsg', 'The Course with the following id could NOT be deleted: ' . $courseId);
        }

        $userCourses = UserCourse::where('course_id', $course->id)->get();
        foreach($userCourses as $item)
        {
            $item->delete();
        }

        $course->delete();

        return redirect()->route('admin.courses')->with('successMsg', 'The Course with the following id has been successfully deleted: ' . $courseId);
    }
}
