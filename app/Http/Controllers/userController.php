<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
Use \Carbon\Carbon;

class userController extends Controller
{
    public function sched(){
        $heros = DB::select('select * from hero');
        $anns = DB::select('SELECT * FROM announcement WHERE event_day>= DATE(NOW());');
        $date = Carbon::now();
        
        $scheds = DB::select('select * from sched');
        $images = DB::select('select * from images where name="sched"');
        return view('etr/index',['heros'=>$heros,'scheds'=>$scheds, 'images'=>$images,'announcements'=>$anns,'date'=>$date]);
    }
    public function about(){
        $abouts = DB::select('select * from about');
        $pastors = DB::select('select * from pastors');
        $imgs = DB::select('select * from images where name="about"');
        return view('etr/about',['abouts'=>$abouts,'pastors'=>$pastors, 'images'=>$imgs]);
    }

    public function ministries(){
        $captions = DB::select('select * from ministrycaption');
        $ministries =DB::select('select * from ministries');
        return view('etr/ministries',['captions'=>$captions, 'ministries'=>$ministries]);
    }
}
