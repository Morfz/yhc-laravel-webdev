<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function coursesIndex()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function coursesCreate()
    {
        return view('admin.courses.create');
    }

    public function coursesStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required|numeric',
        ]);

        Course::create($request->only(['title', 'description', 'duration']));

        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
    }

    public function coursesEdit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function coursesUpdate(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required|numeric',
        ]);

        $course->update($request->only(['title', 'description', 'duration']));

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function coursesDestroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }

    public function coursesShow(Course $course)
    {
        $lessons = $course->lessons;
        return view('admin.courses.show', compact('course', 'lessons'));
    }

    public function coursesCreateLesson(Course $course)
    {
        return view('admin.courses.create_lesson', compact('course'));
    }

    public function coursesStoreLesson(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_link' => 'required',
        ]);

        Lesson::create([
            'course_id' => $course->id,
            'title' => $request->title,
            'description' => $request->description,
            'embed_link' => $request->embed_link,
        ]);

        return redirect()->route('admin.courses.show', $course)->with('success', 'Lesson created successfully.');
    }

    public function coursesEditLesson(Course $course, Lesson $lesson)
    {
        return view('admin.courses.edit_lesson', compact('course', 'lesson'));
    }

    public function coursesUpdateLesson(Request $request, Course $course, Lesson $lesson)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_link' => 'required',
        ]);

        $lesson->update($request->only(['title', 'description', 'embed_link']));

        return redirect()->route('admin.courses.show', $course)->with('success', 'Lesson updated successfully.');
    }

    public function coursesDestroyLesson(Course $course, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('admin.courses.show', $course)->with('success', 'Lesson deleted successfully.');
    }
}