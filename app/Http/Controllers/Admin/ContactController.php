<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function index(){
        $message = Contact::latest()->get();
        return view("admin.message",compact("message"));
    }
    
    public function destroy(int $id){
        Contact::findOrFail($id)->delete();
        return redirect()->route("admin.message")->with('success','Successfully deleted Message!');
    }

    public function book(){
         $message = Book::latest()->get();
        return view("admin.book",compact("message"));
    }

    

}
