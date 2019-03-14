<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;

class PostsController extends Controller
{
    public function index(){ //camel case naming convention
        // dd('ay7aga'); to debugg
        // $posts = Post::all();
        // dd('ay7aga');
        return view('posts.index',[
            'posts' => Post::all()
        ]);
    }

    public function create(){
        // $users = User::all();
        return view('posts.create',[
            'users' => User::all()
        ]);
    }

    public function store(StorePostRequest $request){ //$request $object feeh nafs el kalam elli fel request
        // $request = request(); //request function btgeb el data
        // dd($request->all()); di kda btgeb el data
        // $data = request()->all();
        // Post::create([
        //     'title' => $data['title'], //title da el name elli fel HTML fel input tag
        //     'description' => $data['description'] //description da el name elli fel HTML fel textarea tag
        // ]);

        // Post::create(request()->all()); //bylem fel request kol elli gy mn el input w yeb3to

        // $request->validate([
        //     'title' => 'required|min:3',
        //     'description' => 'required'
        // ],[
        //     'title.required' => 'ay 7aga',
        //     'title.min' => 'minimum chars'
        // ]);
        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    public function update(UpdatePostRequest $request, Post $post){
        // $request = request();
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function edit(Post $post){ // el Post class da shayle el model object of $post eli taht
        // $post = Post::where('id',$post)->get()->first();
        // select * from posts where id=1 limit 1; for both up and down
        // $post = Post::where('id',$post)->first();
        
        // $post = Post::findOrFail($post);
       // dd($post->id);
        return view('posts.edit',[
            'post' => $post,
            'users' => User::all()
        ]);

        // return view('posts.edit',[
        //     'post' => Post::findOrFail($post)
        // ]);
    }

    public function show(Post $post){
        return view('posts.show',[
            'post' => $post
        ]);
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }
}
