<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->filter(\request(['search','user']))->paginate(2)
        ]);
    }
    public function show(Post $post){
        return view('posts.show',[
            'post' => $post
        ]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
           'title' => 'required',
           'email' => 'required|email',
           'website' => 'required',
           'company_name' => 'required',
           'vacancy' => 'required',
           'publish_date' => 'required',
           'job_type' => 'required',
           'cgpa_requirement' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'program' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        //authenticate with user
        $formFields['user_id'] = auth()->id();

        Post::create($formFields);

        return redirect('/')->with('message','Post successfully created');
    }

    public function edit(Post $post){
        return view('posts.edit',[
            'post' => $post
        ]);
    }

    public function update(Request $request,Post $post){
        //make sure logged in user is owner
        if($post->user_id != auth()->id()){
            abort('403','Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'company_name' => 'required',
            'vacancy' => 'required',
            'publish_date' => 'required',
            'job_type' => 'required',
            'cgpa_requirement' => 'required',
            'salary' => 'required',
            'experience' => 'required',
            'location' => 'required',
            'program' => 'required',
            'description' => 'required',
        ]);
        $post->update($formFields);

        return back()->with('message','Post successfully updated');
    }

    public function destroy(Post $post){
        //make sure logged in user is owner
        if($post->user_id != auth()->id()){
            abort('403','Unauthorized Action!');
        }
        $post->delete();
        return redirect('/')->with('message','Post deleted successfully');
    }

    public function manage(){
        return view('posts.manage',[
            'posts' => auth()->user()->posts()->get()
        ]);
    }
}
