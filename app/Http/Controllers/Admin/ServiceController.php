<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\Servicemessage;
use App\Models\Wing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    //
    public function index(int $id=null){
        $editItem = null;
        if($id){
            $editItem = Service::findOrFail($id);
        }
        $wings = Wing::where('status','=','1')->latest()->get();
        $datas = Service::with('wing')->latest()->get();
        return view('admin.service',compact('editItem','datas','wings'));
    }


    public function store(Request $request, ?int $id = null)
    {
        $validationRules = [
            'name' => 'required',
            'slug' => 'required',
            'thum' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg',
            'slider1' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg',
            'slider2' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg',
            'slider3' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg',
            'slider4' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg',
        ];

        $request->validate($validationRules);
        $data = $request->only(['name','slug','description','wing_id']);
     
        
        if ($id) {
            $currentEditUser = Service::findOrFail($id);
            try {
                if ($request->hasFile('thum')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->thum != null) {
                        Storage::delete($currentEditUser->thum);
                    }
                    $path = $request->file('thum')->store('service_thum');
                    $data['thum'] = $path;
                }

                if ($request->hasFile('slider1')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->slider1 != null) {
                        Storage::delete($currentEditUser->slider1);
                    }
                    $path = $request->file('slider1')->store('service_slider');
                    $data['slider1'] = $path;
                }

                if ($request->hasFile('slider2')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->slider2 != null) {
                        Storage::delete($currentEditUser->slider2);
                    }
                    $path = $request->file('slider2')->store('service_slider');
                    $data['slider2'] = $path;
                }

                if ($request->hasFile('slider3')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->slider3 != null) {
                        Storage::delete($currentEditUser->slider3);
                    }
                    $path = $request->file('slider3')->store('service_slider');
                    $data['slider3'] = $path;
                }

                if ($request->hasFile('slider4')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->slider4 != null) {
                        Storage::delete($currentEditUser->slider4);
                    }
                    $path = $request->file('slider4')->store('service_slider');
                    $data['slider4'] = $path;
                }



                Service::where('id', $id)->update($data);
                return redirect()->route('admin.service', ['page' => request()->query('page'), 'search' => request()->query('search')])->with('success', 'Successfully Service Updated!');
            } catch (\Exception $e) {
                Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
                return redirect()->route('error');
            }
        }

        try {
            if ($request->hasFile('thum')) {
                $path = $request->file('thum')->store('service_thum');
                $data['thum'] = $path;
            }

            if ($request->hasFile('slider1')) {
                $path = $request->file('slider1')->store('service_slider');
                $data['slider1'] = $path;
            }
            if ($request->hasFile('slider2')) {
                $path = $request->file('slider2')->store('service_slider');
                $data['slider2'] = $path;
            }
            if ($request->hasFile('slider3')) {
                $path = $request->file('slider3')->store('service_slider');
                $data['slider3'] = $path;
            }
            if ($request->hasFile('slider4')) {
                $path = $request->file('slider4')->store('service_slider');
                $data['slider4'] = $path;
            }
            $data['created_by'] = $request->ip();
            //creating product
            $product = Service::create($data);

            return redirect()->back()->with('success', 'Successfully Service Created!');
        } catch (\Exception $e) {
            Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }

        
    }

    public function destroy(int $id)
    {
        try {

            $deleteBook = Service::findOrFail($id);
            // Delete main product picture
            if ($deleteBook->thum && Storage::exists($deleteBook->thum)) {
                Storage::delete($deleteBook->thum);
            }
            if ($deleteBook->slider1 && Storage::exists($deleteBook->slider1)) {
                Storage::delete($deleteBook->slider1);
            }
            if ($deleteBook->slider2 && Storage::exists($deleteBook->slider2)) {
                Storage::delete($deleteBook->slider2);
            }
            if ($deleteBook->slider3 && Storage::exists($deleteBook->slider3)) {
                Storage::delete($deleteBook->slider3);
            }
            if ($deleteBook->slider4 && Storage::exists($deleteBook->slider4)) {
                Storage::delete($deleteBook->slider4);
            }
            $deleteBook->delete();
            return redirect()->route('admin.service')->with('success', 'Successfully Service Deleted!');
        } catch (\Exception $e) {
            Log::error("this message is from: " . __CLASS__ . " Line: " . __LINE__ . " message: " . $e->getMessage());
            return redirect()->route('error');
        }
    }

    public function homeActive(Request $request,$id){
        $status = $request->input('home');
        $edit = Service::findOrFail($id);
        if($status == 'inactive'){
            $edit->home = 0;
            $edit->save();
        }else{
             $edit->home = 1;
            $edit->save();
        }
        return redirect()->route('admin.service')->with('success',"Successfully Updated!");
    }

    public function status(Request $request,$id){
        $status = $request->input('status');
        $edit = Service::findOrFail($id);
        if($status == 'inactive'){
            $edit->status = 0;
            $edit->save();
        }else{
             $edit->status = 1;
            $edit->save();
        }
        return redirect()->route('admin.service')->with('success',"Successfully Updated!");
    }

    


}
