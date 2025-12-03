<?php

namespace App\Http\Controllers;
use App\Models\Authmessage;
use App\Models\Contact;
use App\Models\Management;
use App\Models\Page;
use App\Models\PhotoGallery;
use App\Models\Service;
use App\Models\VideoGallery;
use App\Models\Wing;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //

    public function index(){
        $wings = Wing::where('home','=',1)->where('status','=',1)->take(6)->get();
        $auth_message = Authmessage::first();
        $about = Page::where('pagename','=','About')->first();
        $welcome = Page::where('pagename','=','Welcome')->first();
        return view('user.index',compact('wings','auth_message','about','welcome'));
    }

    public function styHellow(Request $request){
        $request->validate([
            'name' => 'bail|required|string',
            'phone' => ['bail','required', 'regex:/^(?:\+?88)?01[0-9]{9}$/'],
            'email' => 'bail|required|email',
            'company' => 'bail|required',
            'subject' => 'bail|required|string',
            'message' => 'bail|required|string'
        ]);
        $data = $request->only(['name','phone','email','company','subject','message']);
        Contact::create($data);
        return redirect()->route('sayhellow')->with('success',"Successfully Store Your Message");
    }

    public function about(){
        $about = Page::where('pagename','=','About')->first();
        return view('user.about',compact('about'));
    }


    public function ourservice($type){
        $wing = Wing::where('nav_name','=',$type)->first();
        $services = Service::where('wing_id','=',$wing->id)->select('id','name','slug','thum')->get();
        return view('user.services',['services' => $services,'wing' => $wing]);
    }
    public function serviceDetail($slug){
        $service  = Service::where('slug','=',$slug)->first();
        return view('user.service-detail',['service' => $service]);
    }

    public function ourwings(){
        $wings = Wing::latest()->get();
        return view('user.wing',compact('wings'));
    }

    public function photoGallery() {
        $photo_gallery = PhotoGallery::latest()->get();
        return view('user.photoGallery',compact('photo_gallery'));
    }

    public function videoGallery(){
        $video_gallery = VideoGallery::latest()->get();
        return view('user.videoGallery',compact('video_gallery'));
    }

    public function teams(){
        $teams = Management::all();
        return view('user.team',compact('teams'));
    }

    public function contactpage() {
        return view('user.contact');
    }

    public function saveMessage(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string',
            'message' => 'required'
        ]);
        try{
            $data = $request->only(['name','email','subject','message']);
            Contact::create($data);

            return redirect()->back()->with("success","Your Message Successfully Stored");
        }catch(Exception $e){
            Log::info('There is a Problem File name is : '.__FILE__." Line name is :".__LINE__." Error is : ".$e->getMessage());
            return redirect()->back()->with("warning","There is Problem Try Again Later");
        }
    
    }


    public function returantBook(){
        return view('user.restourantBook');
    }




   


}
