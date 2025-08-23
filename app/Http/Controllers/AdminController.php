<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $ip_now = DB::table('ip_network')->where('id', 1)->first();
        // dd($ip_now);
        return view('admin.update',compact('ip_now'));
    }
    public function update(Request $request)
    {
        DB::table('ip_network')->where('id', 1)->update(['ip' => $request->ip]);
        return redirect('/admin-config')->with('success', 'Network Room Berhasil DiUpdate');
    }
}