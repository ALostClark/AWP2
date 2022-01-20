<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller {

  public function index() {
    return view('pages.course.table', ['courses' => Course::all()]);
  }

  public function show(Course $course) {
    return view('pages.course.view', ['course' => $course]);
  }

  public function create() {
    return view('pages.course.create');
  }

  public function store(Request $request) {
    $course = Course::create([
        'courseID' => $request->input('courseID'),
        'study_period' => $request->input('study_period'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'result' => $request->input('result'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
    ]);
    return redirect()->route('view_course', ['course' => $course]);
  }

  public function edit(Course $course) {
    return view('pages.course.update', ['course' => $course]);
  }

  public function update(Request $request, Course $course) {
    $course->update([
        'courseID' => $request->input('courseID'),
        'study_period' => $request->input('study_period'),
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'result' => $request->input('result'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
    ]);
      return redirect()->route('view_course', ['course' => $course]);
  }

  public function destroy(Course $course) {
    $course->delete();
    return redirect()->route('all_courses');
  }

}
