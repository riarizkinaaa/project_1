<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('auth.login');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ],
        [
            'email'=>'email anda belum terdaftar',
            'password'=>'password anda salah'
        ]
    );

        // $user=User::whereEmail($request->email)->first();
        // if($user){
        //     if(Hash::check($request->password, $user->password)){
        //         Auth::login($user);
        //         // dd($user);
    
        //         return redirect('pimpinan.dash')->with('success','anda berhasil login');
        //     }
        // throw ValidationException::withMessages([
        //     'email'=>'email tidak terdaftar',
        //     'password'=>'password anda salah'
        // ]);
        // }

        // $user=User::whereEmail($request->email)->first();
        // if(Auth::$user()->role == 'pimpinan'){
        //     return view('pimpinan.dash',compact('ambil'));

        // }elseif(Auth::user()->role == 'pendata'){
        //     return view('pendata.pendata');

        // }elseif(Auth::user()->role == 'varivikator'){
        //     return view('verifikator');
        // }else{
        //     return view('userAdmin');
        // }

            // dd($ambil);
        $user=User::where('email', '=', $request->email)->first();
        // dd($user);

        if($user){
            // dd($user);
            // echo $user->role;
            if ($request->password == $user->password) {
                if($user->role=='pimpinan'){
                    return view('pimpinan.dash',compact('user'));
                }elseif ($user->role == 'pendata') {
                    return view('pendata.pendata',compact('user'));
                } elseif ($user->role == 'verifikator') {
                    return view('verifikator',compact('user'));
                } elseif($user->role == 'superAdmin') {
                    return view('superadmin.superadmin',compact('user'));
                }else{
                    return redirect('/login');
                }
            }
        }else{
            throw ValidationException::withMessages([
                'email'=>'email tidak terdaftar',
                'password'=>'password anda salah','<br>'
            ]);
        }

        // if(Auth::attempt([
        //     'email'=>$request->email,
        //     'password'=>$request->password
        // ]))
        // {
        //     return redirect('/pendeta')->with('success','selamat datang di pendata');
        // }
        // throw ValidationException::withMessages([
        //     'email'=>'email belum terdaftar',
        //     'password'=>'password anda salah'
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
