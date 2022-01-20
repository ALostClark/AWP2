<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Http\Request;

class EmploymentController extends Controller {

  public function index() {
    return view('pages.employment.table', ['employments' => Employment::all()]);
  }

  public function show(Employment $employment) {
    return view('pages.employment.view', ['employment' => $employment]);
  }

  public function create() {
    return view('pages.employment.create');
  }

  public function store(Request $request) {

    $employment = Employment::create([
        'title' => $request->input('title'),
        'location' => $request->input('location'),
        'description' => $request->input('description'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
        'reference' => $request->input('reference'),
        'reason_forL' => $request->input('reason_forL'),

    ]);
    return redirect()->route('view_employment', ['employment' => $employment]);

  }

  public function edit(Employment $employment) {
    return view('pages.employment.update', ['employment' => $employment]);
  }

  public function update(Request $request, Employment $employment) {

    $employment->update([
        'title' => $request->input('title'),
        'location' => $request->input('location'),
        'description' => $request->input('description'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
        'reference' => $request->input('reference'),
        'reason_forL' => $request->input('reason_forL'),
    ]);
    return redirect()->route('view_employment', ['employment' => $employment]);
  }

  public function destroy(Employment $employment) {
    $employment->delete();
    return redirect()->route('all_employments');
  }

}
