<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\User;
use App\Models\Poliklinik;
use App\Models\Riwayat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class AdminController extends Controller
{
    public function dologin(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('name', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with('error', 'Gagal masuk');
        }
    }

    public function riwayat(){
        $users = User::all();
        $riwayats = Riwayat::orderBy('created_at', 'asc')->get();
        $polikliniks = Poliklinik::all();
        foreach ($users as $user) {
            foreach ($riwayats as $riwayat) {
                if ($user->id == $riwayat->user_id){
                    $riwayat->name = $user->name;
                }
            }
        }
        foreach ($polikliniks as $poliklinik) {
            foreach ($riwayats as $riwayat) {
                if ($poliklinik->id == $riwayat->poli_id){
                    $riwayat->namapoli = $poliklinik->namapoli;
                }
            }
        }
        return view('dashboard.admin.riwayat', compact('riwayats'));
    }
    public function listUser(){
        $users = User::all();
        return view('dashboard.admin.listUser', compact('users'));
    }

    public function editStatus(Request $request, $id){
        if($request->status == 'belum-berlangsung'){
            $status = 0;
        } elseif($request->status == 'berlangsung'){
            $status = 1;
        } else {
            $status = 2;
        }
        Riwayat::where('id', $id)->update([
            'aktif' => $status,
        ]);
        return redirect()->route('admin.riwayat');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
