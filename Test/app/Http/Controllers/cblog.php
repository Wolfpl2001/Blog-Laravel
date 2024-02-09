<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cblog extends Controller
{
    public function blogs(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required'],
            'blog' => ['required'],
        ]);
    
        $title = $formFields['title'];
        $blog = $formFields['blog'];
    
        DB::insert('insert into blogs (title, blog) values (?, ?)', [$title, $blog]);
        
        return redirect('/dashboard')->with('message', 'Blog was successfully created');
    }
    public function remove($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
    
        return redirect('/blog-r')->with('message', 'Removed was successful');
    }
}
