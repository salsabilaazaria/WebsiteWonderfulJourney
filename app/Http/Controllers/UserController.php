<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\article;
use App\category;
use Auth;

class UserController extends Controller
{
    public function welcome()
    { 
        $article = article::all();
        return view('welcome', [
            'article' => $article,
        ]);
    }
    public function home()
    { 
        $user = Auth::User();
        $article = article::all();
        return view('home', [
            'article' => $article,
            'user' => $user
        ]);
    }

    public function myblog(){
        $user = Auth::User();
        $iduser = $user->id;
        $article=DB::table('articles')->where('user_id',$user->id)->get();

        return view('myblog', [
            'article' => $article,
            'user' => $user
        ]);
    }

 

    public function profile(){
        $user = Auth::User();
        return view('profile', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required'
        
          
        ]);

        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
       
        return redirect('/profile');
    }

    public function detail(int $id){
        $article = article::find($id);
        return view('detail',[
            'article'=>$article,
        ]);

    }

    public function category(int $id){
        $category = category::find($id);
        $article=DB::table('articles')->where('category_id',$id)->get();
        return view('category',[
            'article'=>$article,
            'category'=>$category
        ]);

    }

    public function removeitem($id){
        article::where(['id'=>$id])->delete();
        return redirect('/myblog');
    }

    public function gotostore(){
        $user = Auth::User();
        $category = category::all();
        return view('addblog',[
            'user'=>$user,
            'category'=>$category
        ]);
    }

    public function store(Request $request)
    {
        //UNTUK ADD PRODUCT
        // dd($request);
       
        $this->validate($request, [
            'title'=>'required',
            'category'=>'required',
            'description'=>'required',
            'image' => 'required'
          
        ]);

        $image = $request->file('image')->getClientOriginalName();
    

  
        DB::insert('insert into articles (category_id, user_id, description, title, image) values (?,?,?,?,?)'
        ,[$request->category, $request->id, $request->description, $request->title, $image]);

     
        $image2 = $request->file('image');

        $image_file = $image2->getClientOriginalName();
        $dest = 'images';
        $image2->move($dest,$image_file);
            
        return redirect('/addblog')->with('success', 'Data Added');
    }
  

  
    
}
