<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller {

  public function index() {
    return view('pages.location.table', ['locations' => Location::all()]);
  }

  public function show(Location $location) {
    return view('pages.location.view', ['location' => $location]);
  }

  public function create() {
    return view('pages.location.create');
  }

  public function store(Request $request) {
    $location = Location::create([
      'name' => $request->input('name'),
      'address' => $request->input('address'),
      'description' => $request->input('description'),
    ]);
    return redirect()->route('view_location', ['location' => $location]);
  }

  public function edit(Location $location) {
    return view('pages.location.update', ['location' => $location]);
  }

  public function update(Request $request, Location $location) {
    $location->update([
      'name' => $request->input('name'),
      'address' => $request->input('address'),
      'description' => $request->input('description'),
    ]);
    return redirect()->route('view_location', ['location' => $location]);
  }

  public function destroy(Location $location) {
    $location->delete();
    return redirect()->route('all_locations');
  }

}
