<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Post::with('user')->paginate(3);
        return view('home',compact('posts'));
    }

    public function create()
    {
        $post=new Post();
        //$category = DB::table('category')->pluck("name","id");
        return view('create' ,compact('post'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);
        

        Post::create([
            'excerpt'=> request('excerpt'),
            'slug'=> request('slug'),
            'body' => request('body'),
            'title' => request('title'),
            'user_id' => auth()->id(),
            'category_id'=> request('category_id'),
        ]);
        // Post::create($request->all());
   
        return redirect()->route('home')
                        ->with('success','Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('edit',compact('post','id'));
    }

    public function update(Request $request, $id)
    {
        $Data = Post::find($id);
        $Data->title = request('title');
        $Data->slug = request('slug');
        $Data->excerpt = request('excerpt');
        $Data->body = request('body');
        $Data->save();
                $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'excerpt' => 'required',
                'body' => 'required'
         ]);
        $Data->update($request->all());
  
        return redirect()->route('home')
                        ->with('success','Post updated successfully');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
  
        return redirect()->route('home')
                        ->with('success','Post deleted successfully');
    }

    public function byCategory($id){
        $posts= Post::where('category_id', '=', $id)->paginate(3);
        return view('home',compact('posts'));
    }


    public function handleAdmin()
    {
        return view('handleAdmin');
    }   
}
