<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\article;
use App\category;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function welcome()
    { 
        $article = article::all();
        return view('admin/admin', [
            'article' => $article,
        ]);
    }

    public function userdata(){
        $user = User::all();
        $article = article::all();
       

        return view('admin.userdata', [
            'article' => $article,
            'user' => $user
        ]);
    }

    public function removeuser($id){
        article::where(['user_id'=>$id])->delete();
        User::where(['id'=>$id])->delete();
     
        return redirect('/userdata');
    }

}
