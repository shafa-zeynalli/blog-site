<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Token;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Psy\Util\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()->whereIsPublic(1)->whereStatus(1)->get();

        return view('front.main', compact('blogs'));
        return view('layout.front');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $blogId)
    {
//        dd($blogId);
        $blog = Blog::whereIsPublic(1)->findOrFail($blogId);
//dd($blog);

        if($blog->token){
//            dd('hgfg');
            if($blog->is_public == 0){
                abort(404);
            }

        }
//        $blog = Blog::whereStatus(1)->where('token'==true)->andWhere('is_public',1)->findOrFail($blog);

        return view('front.singlePage', compact( 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showToken($token)
    {
        $token = Token::where('value',$token)->whereStatus(1)->firstOrFail();
//        dd(3);
         if ($token->expired_date < Carbon::now() ){
             $token->update(['status'=>0]);
             $blogItem = Blog::whereId($token->blog_id)->firstOrFail();
             $blogItem->update(['status'=>0]);
         }
        $blogItem=$token->getBlog;
//       return self::show($blog->id);

        $blog = Blog::whereIsPublic(0)->whereHas('token',function($query){
            $query->where('status',1);
        })->findOrFail($blogItem->id);
//dd($blog);

        if($blog->token){
//            dd('hgfg');
            if($blog->status == 0){
                abort(404);
            }

        }
        return view('front.singlePage', compact( 'blog'));


    }
}
// is public 0 olanda adisen giris ede bilmez linkdeen giris ede biler. status her iki hal ucun de 1 olmalidi
