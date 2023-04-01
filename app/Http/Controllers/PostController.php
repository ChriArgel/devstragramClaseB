<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    public function __construct(){
       $this->middleware('auth');
    }

    //
    public function index(User $user){
        $posts = Post::where('user_id', $user->id)
        ->paginate(6);
        $files = Post::all();
        return  view('dashboard',compact('files'),[
            'user' => $user,
            'posts' => $posts
        ]);
        
        // return view('dashboard',[
        //     'user' => $user,
        //     'posts' => $posts
        // ]);
    }

    public function create(){
        return view ('post.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'imagen' => 'required'
            
        ]);

        Post::create([
            'titulo' => $request -> titulo,
            'descripcion' => $request -> descripcion,
            'imagen' => $request -> imagen,
            'user_id' => auth() ->user() ->id


        ]);

        return to_route('post.index');
    }

    public function show() {
        $files = Post::all();
        return  view('posts.show',compact('files'));
        // return view('posts.show', ['post' => $post]);   
    }

    
}
