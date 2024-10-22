<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Poliklinik;
use App\Models\Riwayat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class UserController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $data = $user->save();
        if($data){
            return redirect()->route('user.login');
        } else {
            return redirect()->back()->with('error', 'Gagal daftar');
        }
    }

    public function dologin(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = $request->only('name', 'email', 'password');
        if(Auth::guard('web')->attempt($credentials)){
            return redirect()->route('user.home');
        } else {
            return redirect()->back()->with('error', 'Gagal masuk');
        }
    }

    public function edit(Request $request){
        $id = Auth::id();
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.akun');
    }

    public function umum(){
        $id = Auth::id();
        Riwayat::create([
            'user_id' => $id,
            'poli_id' => 1,
            'aktif' => 0,
        ]);
        return redirect()->route('user.notifikasi');
    }
    public function gigi(){
        $id = Auth::id();
        Riwayat::create([
            'user_id' => $id,
            'poli_id' => 2,
            'aktif' => 0,
        ]);
        return redirect()->route('user.notifikasi');
    }
    public function kulit(){
        $id = Auth::id();
        Riwayat::create([
            'user_id' => $id,
            'poli_id' => 3,
            'aktif' => 0,
        ]);
        return redirect()->route('user.notifikasi');
    }
    public function mata(){
        $id = Auth::id();
        Riwayat::create([
            'user_id' => $id,
            'poli_id' => 4,
            'aktif' => 0,
        ]);
        return redirect()->route('user.notifikasi');
    }
    public function obgyn(){
        $id = Auth::id();
        Riwayat::create([
            'user_id' => $id,
            'poli_id' => 5,
            'aktif' => 0,
        ]);
        return redirect()->route('user.notifikasi');
    }

    public function aktifitas(){
        $id = Auth::id();
        $riwayats = Riwayat::where('user_id', $id)->orderBy('created_at', 'desc')->get();
        return view('dashboard.user.aktifitas', compact('riwayats'));
    }

    public function notifikasi(){
        $id = Auth::id();
        $notifikasi = Riwayat::where('aktif', 1)->first();
        $riwayats = Riwayat::where('user_id', $id)->first();
        $your_antre = Riwayat::where('user_id', $id)->where('aktif', 0)->first();
        $waktu = -1;
        // dd($riwayats->id);
        if (!is_null(optional($riwayats)->id) and !is_null(optional($notifikasi)->id) and !is_null(optional($your_antre)->id)){
            $waktu = ($your_antre->id - $notifikasi->id)*10;
        } 
        if ($waktu < 0  or is_null(optional($riwayats)->id) or is_null(optional($notifikasi)->id)){
            $waktu = 0;
        }
        return view('dashboard.user.notifikasi', compact('notifikasi', 'waktu', 'your_antre'));
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->route('user.login');
    }
}
