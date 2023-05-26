<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogpost;

class blogContoller extends Controller
{
    function index(){
        return view('home');
    }

    function create(){
        return view('dashboard.addPosts');
    }

    function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        //upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('postImages'), $imageName);  
        $blogImage = $imageName;

        $blog = new Blogpost;
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->image = $blogImage;

        $blog->save();
        return back()->withSuccess('Blog Created !!');
    }

    function blogPosts(){
        return view('dashboard.blogPosts', [
            // 'products' => Product::latest()->get() //getting products data using models\product and used in view
            'blogposts' => Blogpost::latest()->paginate(5)
        ]);
    }


    function edit($id){
        $blogposts = Blogpost::where('id', $id)->first();
        return view('dashboard.editPosts', ['blogposts'=>$blogposts]);
    }


    function show($id){
        $blogposts = Blogpost::where('id', $id)->first();
        return view('dashboard.showPosts', ['blogposts'=>$blogposts]);
    }


    function update(Request $request, $id){

        $blogposts = Blogpost::where('id', $id)->first();

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        if(isset($request->image)){
            //upload image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('postImages'), $imageName);
            $blogposts->image = $imageName;
        }

        $blogposts->name = $request->name;
        $blogposts->description = $request->description;

        $blogposts->save();
        return back()->withSuccess('Posts Updated !!');
    }


    function destroy($id){
        $blogposts = Blogpost::where('id', $id)->first();
        $blogposts->delete();
        return back()->withSuccess('Product Deleted !!');
    }
}
