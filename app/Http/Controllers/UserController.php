<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    public function edit() {
        return view('pages.user.update', ['user' => User::find(1)]);
      }

      public function update(Request $request) {
        $user = User::find(1);
        $user->update([
          'name' => $request->input('name'),
          'date_of_birth' => $request->input('date_of_birth'),
          'about_me' => $request->input('about_me'),
          'email' => $request->input('email'),
          'password' => Hash::make($request->input('password'))
        ]);
        return redirect()->route('home');
      }

      public function updateProfileIcon(Request $request) {
        $request->validate([ 'file' => 'required|mimes:png' ]);

        $file = $request->file('file');
        $file->storePubliclyAs('public', 'profile.png');
        return redirect()->route('edit_user');
    }
}
