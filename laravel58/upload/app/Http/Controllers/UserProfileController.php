<?php

namespace App\Http\Controllers;
use App\User;
use Storage;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function edit()
    {
        return view('user.edit');
    }
    public function update(Request $request)
    {

        if($request->user()->avatar) {
            Storage::delete($request->user()->avatar);
        }

        $avatar = $request->file('avatar')->store('avatars');
        $request->user()->update([
            'avatar' => $avatar
        ]);
        return redirect()->back();
        
    }
}
