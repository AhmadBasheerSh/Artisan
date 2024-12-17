<?php

namespace App\Http\Controllers;

use App\Models\Love;
use Illuminate\Http\Request;

class PostActionsController extends Controller
{
    public function addLove(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
        ]);

        Love::create([
            'user_id' => auth()->id(),
            'post_id' => $request->post_id,
        ]);

        return redirect()->back();
    }

    public function deleteLove(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
        ]);

        Love::where('post_id', $request->post_id)->where('user_id', auth()->id())->delete();

        return redirect()->back();
    }
}
