<?php

namespace App\Http\Controllers;

use App\Models\Dorilar;
use App\Models\Tashxislar;
use Illuminate\Http\Request;

class HistoryUsersController extends Controller
{
    public function index() 
    {
        
        return view('user.rightSidebarForDoctor', [
            'tashxislar' => Tashxislar::all(),
            'dorilar' => Dorilar::all(),
            'checker' => true
        ]);
    }
    public function store(Request $request) {
        // $dori = request('dori');
        // for($i = 0; $i < count($dori);$i++) {
        //     if($dori === 'askarbinka (saxar)') {
        //         return view('user.rightSidebarForDoctor', [
        //             'tashxislar' => Tashxislar::all(),
        //             'dorilar' => Dorilar::all(),
        //             'message' => 'Bu dori bu inson uchun mumkin emas chunki bu insonni qand kasalligi bor'
        //         ]);
        //     }
        // }

        $tashxis = Tashxislar::create([
            'tashxis' => $request->input('tashxis'),
            'user_id' => 1
        ]);

        $tashxis->dorilar()->attach(request('dori'));

        return view('user.rightSidebarForDoctor', [
            'tashxislar' => Tashxislar::all(),
            'dorilar' => Dorilar::all(),
            'checker' => false
        ]);
    }
}
