<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\front\BlogController;
use App\Models\Blog;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.main');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRules = [
            'image' => 'required|image|mimes:jpeg,webp,png,jpg,gif,svg|max:2048',
            "status" => 'required',
            "title" => 'required',
            "description" => 'required',
            "is_public" => 'required',
        ];

        $request->validate($validationRules);

//        dd($request->all());

        $blog = new Blog();
        $blog->image = $request->file('image')->store('blog_images', 'public');
        $blog->status = $request->input('status');
        $blog->title = $request->input('title');
        $blog->is_public = $request->input('is_public');
        $blog->description = $request->input('description');
        $blog->save();

        if ($blog->is_public == 0){
            $token = new Token();
            $token->value=Str::random(15);
            $token->blog_id=$blog->id;
            $token->start_date = \Carbon\Carbon::now();
            $token->expired_date = \Carbon\Carbon::now()->addHour(4);
            $token->save();
        }
        return redirect()->route('admin.blog.index')->with('success', 'Blog member created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $blogs = Blog::get();
//        dd($blogs);
        return view('admin.pages.blog.index', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
//        dd($blog);
        return view('admin.pages.blog.edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validationRules = [
            "status" => 'required',
            "title" => 'required',
            "description" => 'required',
            "blog_id" => 'required',
            "is_public" => 'required',
        ];

        $request->validate($validationRules);
        $blog = Blog::find($request->input('blog_id'));
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);

            }
            $blog->image = $request->file('image')->store('blog_images', 'public');
        }
        $blog->status = $request->input('status');
        $blog->is_public=$request->input('is_public');

        if ($blog->is_public == 0){
            $token = new Token();
            $token->value=Str::random(15);
            $token->blog_id=$blog->id;
            $token->start_date = \Carbon\Carbon::now();
            $token->expired_date = \Carbon\Carbon::now()->addHour(4);
            $token->save();
        }
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');

        $blog->save();
        return redirect()->route('admin.blog.index')->with('success', 'Blog member updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if (Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);

        }
//        dd($blog);
        if ($blog->token) {
            $blog->token->delete();
        }
        $blog->delete();
        return redirect()->back();
    }
}
