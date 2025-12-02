<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Wing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class WingsController extends Controller
{
    //
     public function index(Request $request, ?int $id = null){
        $editgallery = null;
        if ($id != null) {
            $editgallery = Wing::find($id);
        }
        $allgallery = Wing::latest()->get();
        return view('admin.wings', compact('allgallery', 'editgallery'));
    }


    public function store(Request $request, ?int $id = null)
    {
        $request->validate([
            'img' => "nullable|image|mimes:jpeg,jpg,png,gif,webp,svg",
            'title' => "nullable|string",
            'nav_name' => 'required'
        ]);
        $data = $request->only('title','nav_name');
        if ($id != null) {
            try{
            //user edit section is hare
                $currentEditUser = Wing::findOrFail($id);
                if ($request->hasFile('img')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->img != null) {
                        Storage::delete($currentEditUser->img);
                    }
                    $path = $request->file('img')->store('wings');
                    $data['img'] = $path;
                }
                Wing::where('id', '=', $id)->update($data);            
                return redirect()->route('admin.wings',['id'=>$id])->with('success','Successfully Wings Updated!');
            }catch(Exception $e){
                Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
                return redirect()->route('error');
            }
        }

        try{
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('wings');
                $data['img'] = $path;
            }
            Wing::create($data);
            return back()->with("success", "Successfully Wings Created!");
        }catch(Exception $e){
            Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
            return redirect()->route('error');
        }

    }

    public function destory(int $id)
    {
        try{
        $data = Wing::findOrFail($id);
        if ($data ) {
            if($data->img){
                Storage::delete($data->img);
            }
            $data->delete();
        }
        return redirect()->route('admin.wings')->with('success', 'Successfully Wings Deleted!');
        }catch(Exception $e){
            Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
            return redirect()->route('error');
        }
    }

    public function homeActive(Request $request,$id){
        $status = $request->input('home');
        $edit = Wing::findOrFail($id);
        if($status == 'inactive'){
            $edit->home = 0;
            $edit->save();
        }else{
             $edit->home = 1;
            $edit->save();
        }
        return redirect()->route('admin.wings')->with('success',"Successfully Updated!");
    }

    public function status(Request $request,$id){
        $status = $request->input('status');
        $edit = Wing::findOrFail($id);
        if($status == 'inactive'){
            $edit->status = 0;
            $edit->save();
        }else{
             $edit->status = 1;
            $edit->save();
        }
        return redirect()->route('admin.wings')->with('success',"Successfully Updated!");
    }



}
