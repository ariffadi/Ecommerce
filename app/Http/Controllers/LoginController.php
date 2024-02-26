<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Echo_;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Silahkan Isi Email',
            'password.required' => 'Silahkan Isi Password'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {

            if (Auth::user()->role == 'user') {
                return redirect('home');
            } elseif (Auth::user()->role == 'admin') {
                return redirect('login')->withErrors('Username dan Password yang anda masukkan salah');;
            }
            return redirect('home')->with('Selamat Datang');
        } else {
            return redirect('login')->withErrors('Username dan Password yang anda masukkan salah');
        }
    }

    public function logout()
    {
        // Cek apakah pengguna sudah login
        if (auth()->check()) {
            // Pengguna sudah login

            // Cek role pengguna
            if (auth()->user()->role == 'user') {
                // Jika role adalah 'user', arahkan ke halaman home dengan pesan berhasil logout
                auth()->logout();
                return redirect('home')->with('success', 'Anda berhasil logout');
            }
        } else {
            // Pengguna belum login, arahkan ke halaman login dengan pesan kesalahan
            return redirect('login')->withErrors('Anda belum login');
        }
    }

    public function register()
    {
        return view('login.register');
    }


    public function create(Request $request)
    {


        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'Hp' => 'required|min:5',
                'password' => 'required|min:5',
            ],
            [
                'name.required' => 'Nama wajib di isi',
                'email.required' => 'Email wajib di isi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password wajib di isi',
                'password.min' => 'Minimal 5 karakter',
            ]
        );
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'Hp' => $request->Hp,
            'password' => Hash::make($request->password),
        ];




        User::create($data);

        $infologin = [
            'name' => $request->name,
            'email' => $request->email,
            'Hp' => $request->Hp,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('home')->with('Success', 'Berhasil Login');
        } else {
            return 'gagal';
        }
    }
}
