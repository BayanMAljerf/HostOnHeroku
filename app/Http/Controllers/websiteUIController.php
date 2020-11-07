<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;

class websiteUIController extends Controller
{
    public function index()
    {
      return view('index')->with('blog_name',Setting::first()->blog_name)
      ->with('phone',Setting::first()->phone_number)
      ->with('blog_email',Setting::first()->blog_email)
      ->with('address',Setting::first()->address)
      ->with('tags',Tag::all())
      ->with('categories',Category::orderBy('created_at','ASC')->take(4)->get())
      ->with('categories1',Category::orderBy('created_at', 'DESC')->get());
    

    
    }

    public function index1()
    {
      return view('index1')->with('blog_name',Setting::first()->blog_name)
      ->with('phone',Setting::first()->phone_number)
      ->with('blog_email',Setting::first()->blog_email)
      ->with('address',Setting::first()->address)
      ->with('tags',Tag::all())
      ->with('categories',Category::orderBy('created_at','ASC')->skip(6)->take(4)->get())
      ->with('categories1',Category::orderBy('created_at', 'DESC')->get());
    

    
    }
    public function index2()
    {
      return view('index2')->with('blog_name',Setting::first()->blog_name)
      ->with('phone',Setting::first()->phone_number)
      ->with('blog_email',Setting::first()->blog_email)
      ->with('address',Setting::first()->address)
      ->with('tags',Tag::all())
      ->with('categories',Category::orderBy('created_at','ASC')->skip(10)->take(4)->get())
      ->with('categories1',Category::orderBy('created_at', 'DESC')->get());
    

    
    }
    public function index3()
    {
      return view('index3')->with('blog_name',Setting::first()->blog_name)
      ->with('phone',Setting::first()->phone_number)
      ->with('blog_email',Setting::first()->blog_email)
      ->with('address',Setting::first()->address)
      ->with('tags',Tag::all())
      ->with('categories',Category::orderBy('created_at','ASC')->skip(14)->take(4)->get())
      ->with('categories1',Category::orderBy('created_at', 'DESC')->get());
    

    
    }



    public function contact()
    {
      return view('contact')->with('blog_name',Setting::first()->blog_name)
      ->with('phone',Setting::first()->phone_number)
      ->with('blog_email',Setting::first()->blog_email)
      ->with('address',Setting::first()->address)
      ->with('blog_name',Setting::first()->blog_name)
      ->with('tags',Tag::all())
      ->with('categories',Category::orderBy('created_at', 'ASC')->take(4)->get())
      ->with('categories1',Category::orderBy('created_at', 'DESC')->get());
      ;
    
    }
    public function blog($id)
    {     // $category      = Category::find($id);
   
      return view('blog') ->with('category',Category::find($id))
                          ->with('name',Category::find($id)->name)
                          ->with('posts',Category::find($id)->posts->all())
                          ->with('blog_name',Setting::first()->blog_name)
                          ->with('blog_email',Setting::first()->blog_email)
                          ->with('address',Setting::first()->address)
                          ->with('phone',Setting::first()->phone_number)
                          ->with('categories',Category::orderBy('created_at', 'DESC')->take(4)->get())
                          ->with('tags',Tag::all())
                          ->with('posts1',Post::orderBy('created_at', 'DESC')->take(3)->get())
                          ->with('categories1',Category::orderBy('created_at', 'DESC')->get());

    }
    public function singlepost($slug)
{ $post      = Post::where('slug',$slug)->first();
  $next_page = Post::where('id', '>',$post->id)->min('id');
  $prev_page = Post::where('id', '<',$post->id)->max('id');
        return view('single-post')
      ->with('blog_name',Setting::first()->blog_name)
      ->with('blog_email',Setting::first()->blog_email)
      ->with('address',Setting::first()->address)
      ->with('phone',Setting::first()->phone_number)
      ->with('categories',Category::orderBy('created_at','DESC')->take(4)->get())
      ->with('tags',Tag::all())
      ->with('post',$post)
      ->with('posts',Post::orderBy('created_at', 'DESC')->take(4)->get())
      ->with('title',$post->title)
      ->with('categories1',Category::orderBy('created_at', 'DESC')->get())
      ->with('next',Post::find($next_page))
      ->with('prev',Post::find($prev_page));
    
    }
    // public function destination()
    // {
    //   return view('travel_destination')->with('blog_name',Setting::first()->blog_name)
    //   ->with('phone',Setting::first()->phone_number)
    //   ->with('blog_email',Setting::first()->blog_email)
    //   ->with('address',Setting::first()->address)
    //   ->with('blog_name',Setting::first()->blog_name)
    //   ->with('tags',Tag::all())
    //   ->with('categories',Category::orderBy('created_at', 'ASC')->take(4)->get())
    //   ->with('categories1',Category::orderBy('created_at', 'DESC')->get());
    //   ;
    
    // }


    public function map()
    {

      return view('map');
    }
    public function mymap()
    {

      return view('mymap');
    }
    public function mymap1()
    {

      return view('mymap1');
    }
    public function mymap2()
    {

      return view('mymap2');
    }
    public function mymap3()
    {

      return view('mymap3');
    }


    

}
