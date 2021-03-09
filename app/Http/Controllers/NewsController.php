<?php

namespace App\Http\Controllers;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function showHome()
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                return view("Pages.homePage");    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function addArticle()
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                return view("Pages.addArticle");    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function editArticle()
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                return view("Pages.editArticle");    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function showUsers()
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                $users = DB::table('users')->get();
                return view("Pages.allusers",['users'=>$users]);    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function showArticles()
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                return view("Pages.allarticleList");    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function showCategory()
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                $category = DB::table('category')->get();
                return view("Pages.addArticleCategory",['categorylist'=>$category]);    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function addCategory(Request $request)
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                $this->validate($request, [
                    'category_name' => 'required',
                ],
                    [
                        'category_name.required' => "Feilds are required!!!",
                    ]
                );
                $data = array('category_name' => $request->category_name);
                try{
                    $insertData = DB::table('category')->insert($data);
                    if($insertData > 0){
                        $category = DB::table('category')->get();
                        return view("Pages.addArticleCategory",['categorylist'=>$category,"Success"=>"Record Added Successfully"]); 
                    } 
                }
                catch(Exception $e){
                    return view("Pages.addArticleCategory",['categorylist'=>$category,"Success"=>""]); 
                }
            }
        }
        return redirect()->route("LOGIN");
    }

}
