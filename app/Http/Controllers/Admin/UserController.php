<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{


    public function index()
    {

        $response['users'] = User::get();
        return view('admin.user.list.index', $response);
    }

    public function show($id)
    {

        if(Auth::user()->level != 'Administrador' && Auth::user()->id != $id ) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        }else{

            $response['user'] = User::find($id);
            return view('admin.user.details.index', $response);
        }

    }


    public function create()
    {
        //Logger
        return view('admin.user.create.index');

    }


    public function store(Request $request)
    {
        $request->validate([


          //   'name' => 'required|string|max:255',
         //    'level' => 'required|string|max:40',
          //   'email' => 'required|string|email|max:255|unique:users',
           //  'password' => ['required', 'confirmed', Rules\Password::min(11)->mixedCase()->symbols()->numbers()],
          //  'photo' => 'mimes:jpg,png,jpeg,svg',


        ]);

        if ($request->file('photo')) {
            $photo = '/storage/' . $request->file('photo')->store('users/employeers/photos');
        } else {
            $photo = '/dashboard/img/user.png';
        }

        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'photo' =>  $photo,
            'password' => Hash::make($request->password),

        ]);

        event(new Registered($user));


        //Logger


        return redirect()->route('admin.user.index')->with('create', '1');
    }



    public function edit($id)
    {
        if(Auth::user()->level != 'Administrador' && Auth::user()->id != $id ) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        }else{

            $response['user'] = User::find($id);
            return view('admin.user.edit.index', $response);
        }
    }


    public function update(Request $request, $id)
    {

        if(Auth::user()->level != 'Administrador' && Auth::user()->id != $id ) {
            return redirect()->route('admin.home')->with('NoAuth', '1');
        }else{


            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);


            $user = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => Hash::make($request->password),
            ]);


            return redirect()->route('admin.home')->with('edit', '1');
        }
    }


    public function destroy($id)
    {


        $count = User::count();

        if ($count > 1) {

            User::find($id)->delete();
            return redirect()->back()->with('destroy', '1');
        } else {
            return redirect()->back();
        }
    }
}
