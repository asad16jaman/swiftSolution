<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Authmessage;
use App\Models\Contact;
use App\Models\Page;
use App\Models\PhotoGallery;
use App\Models\Service;
use App\Models\Slider;
use App\Models\VideoGallery;
use App\Models\WelcomeNode;
use App\Models\Wing;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //

    public function index(){
        $wings = Wing::where('home','=',1)->where('status','=',1)->latest()->take(6)->get();
        $auth_message = Authmessage::first();
        $about = Page::where('pagename','=','About')->first();
        $welcome = Page::where('pagename','=','Welcome')->first();
        return view('user.index',compact('wings','auth_message','about','welcome'));
    }

    public function about(){
        $about = Page::where('pagename','=','About')->first();
        return view('user.about',compact('about'));
    }


    public function ourservice($type){
        
        return view('user.services',['service_type' => $type]);
    }
    public function serviceDetail($uid){
        // return response()->json($services);
        return view('user.service-detail',['uid' => $uid]);
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

        return view('user.team');
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
