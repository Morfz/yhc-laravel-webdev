<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required|numeric',
        ]);

        Course::create($request->only(['title', 'description', 'duration']));

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required|numeric',
        ]);

        $course->update($request->only(['title', 'description', 'duration']));

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }

    public function show(Course $course)
    {
        $lessons = $course->lessons;
        return view('courses.show', compact('course', 'lessons'));
    }

    public function storeLesson(Request $request, Course $course)
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

        return redirect()->route('courses.show', $course)->with('success', 'Lesson created successfully.');
    }

    public function editLesson(Course $course, Lesson $lesson)
    {
        return view('courses.edit_lesson', compact('course', 'lesson'));
    }

    public function updateLesson(Request $request, Course $course, Lesson $lesson)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'embed_link' => 'required',
        ]);

        $lesson->update($request->only(['title', 'description', 'embed_link']));

        return redirect()->route('courses.show', $course)->with('success', 'Lesson updated successfully.');
    }

    public function destroyLesson(Course $course, Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('courses.show', $course)->with('success', 'Lesson deleted successfully.');
    }
}
