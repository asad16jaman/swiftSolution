<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index(int $id = null)
    {
        $editPage = null;
        if ($id) {
            $editPage = Page::findOrFail($id);
        }
        $pages = Page::latest()->get();
        return view("admin.page", compact(['pages', 'editPage']));
    }

    public function store(Request $request, int $id = null)
    {

        $request->validate([
            'pagename' => 'required',
            'title' => 'required',
            'description' => ['required', 'regex:/^(?!<p><br><\/p>$).*/'],
            'picture' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp,svg'
        ]);

        $data = $request->only(['title', 'pagename', 'description', 'button']);
        //  $about = About::first();
        if ($id) {

            $page = Page::findOrFail($id);

            try {
                if ($request->hasFile('picture')) {
                    //delete if user already have profile picture...
                    if ($page->picture != null) {
                        Storage::delete($page->picture);
                    }
                    $path = $request->file('picture')->store('pages');
                    $data['picture'] = $path;
                }
                Page::where('id', '=', $page->id)->update($data);
                // 
                return redirect()->route('admin.about')->with("success", "Successfully Edited Page!");
            } catch (Exception $e) {
                Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
                return redirect()->route('error');
            }
        }

        try {
            if ($request->hasFile('picture')) {
                $path = $request->file('picture')->store('pages');
                $data['picture'] = $path;
            }
            Page::create($data);
            return back()->with("success", "Successfully Created Page!");
        } catch (Exception $e) {
            Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }

    }

    public function status(Request $request , int $id){
        $page = Page::findOrFail($id);

       if($page){
        $page->status = $request->input('status');
        $page->save();
       }
       return redirect()->route('admin.about')->with('success','Successfully Updated Status!');
    }

    public function destroy(int $id)
    {
        try {
            $data = Page::findOrFail($id);
            if ($data->picture && Storage::exists($data->picture)) {
                Storage::delete($data->picture);
            }
            $data->delete();
            return back()->with("success", "Successfully Deleted Page!");
        } catch (Exception $e) {
            Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }
    }


}
