<?php

namespace App\Http\Controllers;

use App\Project;
use App\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller {

  public function index() {
    return view('pages.socialmedia.table', ['socialmedias' => SocialMedia::all()]);
  }

  public function create() {
    return view('pages.socialmedia.create');
  }

  public function store(Request $request) {
      $socialmedia = SocialMedia::create([
      'name' => $request->input('name'),
      'link' => $request->input('link'),
    ]);
    return $this->index();
  }

  public function edit(SocialMedia $socialmedia) {
    return view('pages.socialmedia.update', ['socialmedia' => $socialmedia]);
  }

  public function update(Request $request, SocialMedia $socialmedia) {
      $socialmedia->update([
        'name' => $request->input('name'),
        'link' => $request->input('link'),
    ]);
    return $this->index();
  }

  public function destroy(SocialMedia $socialmedia) {
      $socialmedia->delete();
    return redirect()->route('all_socialmedia');
  }

}
