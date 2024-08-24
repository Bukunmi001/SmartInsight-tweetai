<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Autobot;
use Illuminate\Http\Request;

class AutobotController extends Controller
{
    public function index()
    {
        return Autobot::all();
    }

    public function count()
    {
        $count = Autobot::count();
        return response()->json(['count' => $count]);
    }

    // public function posts($id)
    // {
    //     $autobot = Autobot::findOrFail($id);
    //     return $autobot->posts;
    // }
    public function posts($id)
    {
        $autobot = Autobot::findOrFail($id);
        return response()->json($autobot->posts);
    }


    public function comments($postId)
    {
        $post = Post::findOrFail($postId);
        return $post->comments;
    }
}
