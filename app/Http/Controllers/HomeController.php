<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
        $post = Post::where('post_status', '=', 'active')->get();
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                return view('home.homepage', compact('post'));
            } else {
                if ($usertype == 'admin') {
                    return view('admin.adminhome');
                } else {
                    return redirect()->back();
                }
            }
        }
    }
    public function homepage()
    {
        $post = Post::where('post_status', '=', 'active')->get();
        return view('home.homepage', compact('post'));
    }

    public function post_detail($id)
    {
        $post_detail = Post::find($id);
        return view('home.post_detail', compact('post_detail'));
    }
    public function create_post()
    {
        return view('home.create_post');
    }

    public function user_post_create(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $user = Auth()->user();
        $userid = $user->id;
        $username = $user->name;
        $usertype = $user->usertype;


        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = $userid;
        $post->name = $username;
        $post->usertype = $usertype;
        $post->post_status = 'pending';

        $image = $request->image;
        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }
        $post->save();

        return redirect()->back()->with('success_user', 'User Post Create Successful');
    }


    //user own data only show
    public function my_post()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = Post::where('user_id', '=', $userid)->get();
        return view('home.my_post', compact('data'));
    }


    public function my_post_delete($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect()->back()->with('delete_my_post', 'Delete Post is Successful');
    }

    public function my_post_edit($id)
    {
        $mypost_show = Post::find($id);
        return view('home.post_edit', compact('mypost_show'));
    }

    public function my_post_update(Request $request, $id)
    {
        $data = Post::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;
        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('success_update', 'User Post Update is Successful');
    }
}
