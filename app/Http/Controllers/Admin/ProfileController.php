<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $profile = User::find($id);

        return view('pages.profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        try {
            $profile = User::find($id);
            $data = $request->except('avatar');

            if ($request->hasFile('avatar')) {
                if ($profile->avatar && file_exists(storage_path('app/public/'.$profile->avatar))) {
                    Storage::delete('public/'.$profile->avatar);
                }

                $avatar_path = $request->file('avatar')->store('user/img', 'public');
                $data['avatar'] = $avatar_path;
            }

            $profile = $profile->fill($data);
            $profile->save();

            return redirect()->route('admin.dashboard')->with('success', 'Success updated profile !');

        } catch (\Exception $error) {
            return $error->getMessage();
        }

    }
}
