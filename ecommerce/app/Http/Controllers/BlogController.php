<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use GrahamCampbell\Markdown\Facades\Markdown;

class BlogController extends Controller
{

    public function index()
    {
        $blog = BlogPost::latest()->paginate(10);

        return view('admin.blogs.blog-manage', compact('blog'));
    }

    public function create()
    {
        return view('admin.blogs.blog-add');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required'
        ]);

        BlogPost::create([
            'title' => $request->title,
            'slug' => str()->slug($request->slug),
            'description' => Markdown::convert($request->description)->getContent(),
        ]);

        return redirect()->route('blogs.index')->with('message', 'Post Created Successfully');
    }
}
