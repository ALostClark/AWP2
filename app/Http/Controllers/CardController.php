<?php

namespace App\Http\Controllers;

use App\Card;
use App\Course;
use App\Employment;
use App\Project;
use Illuminate\Http\Request;

class CardController extends Controller {

    public function index() {
        return view('pages.card.table', ['cards' => Card::orderBy("order")->get()]);
    }

    public function fromEmployment(Employment $employment) {
        $card = Card::create([
            'title' => $employment->title,
            'body' => $employment->description,
            'footer' => "Employed from " . $employment->start_date . " to " . $employment->end_date,
            'link' => route('view_employment', ['employment' => $employment])
        ]);
        return redirect()->route("all_employments");
    }

    public function fromProject(Project $project) {
        $card = Card::create([
            'title' => $project->title,
            'body' => $project->description,
            'footer' => "Date: " . $project->date,
            'link' => route('view_project', ['project' => $project])
        ]);
        return redirect()->route("all_projects");
    }

    public function fromCourse(Course $course) {
        $card = Card::create([
            'title' => $course->courseID . " - " . $course->title,
            'body' => ' Result ' . $course->result . "<br />" . $course->description,
            'footer' => "Course taken from " . $course->start_date . " to " . $course->end_date,
            'link' => route('view_course', ['course' => $course])
        ]);
        return redirect()->route("all_courses");
    }

    public function increment(Card $card) {
        $order = $card->order + 1;
        $card->update(['order' => $order]);
        return redirect()->route("all_cards");
    }

    public function decrement(Card $card) {
        $order = $card->order - 1;
        $card->update(['order' => $order]);
        return redirect()->route("all_cards");
    }

    public function delete(Card $card) {
        $card->delete();
        return redirect()->route("all_cards");
    }
}
