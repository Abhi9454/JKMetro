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

    public function showAddArticle()
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                $category = DB::table('category')->get();
                return view("Pages.addArticle",["categorylist"=>$category,'Success'=>""]);    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function addArticle(Request $request)
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                $this->validate($request, [
                    'article_category_id' => 'required | min:1',
                    'articleString' => 'required',
                    'article_image' => 'required|max:10000',
                    'article_heading' => 'required | min: 3',
                ]);

                $image = $request->file('article_image');
                $name = time();
                $filePath = 'uploads/' . $name . '.' . $image->getClientOriginalExtension();
                $request->article_image->move(public_path('uploads/'), $filePath);

                $input = $request->all();
                $input['article_image'] = 'https://www.jkmetronews.xyz' . $filePath;
                try {
                    $data = array('article_category' => $request->article_category_id, 'article_text' => $request->articleString, 'article_heading' => $request->article_heading,
                        'article_image' => $input['article_image'],'article_views' => 3,'article_user_id'=>session()->get('user_id', 'default'));
                    $insertData = DB::table('articles')->insert($data);
                    if ($insertData) {
                        $category = DB::table('category')->get();
                        return view("Pages.addArticle",["categorylist"=>$category,'Success'=>"Data Added Successfully"]); 
                    }
                } catch (Exception $e) {
                    $errorCode = $e->errorInfo[1];
                    if ($errorCode == '1062') {
                        return redirect()->back()->withErrors([
                            'error' => 'Duplicate Entry.',
                        ]);
                    }
                }    
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
                $articles = DB::table('articles')->get();
                return view("Pages.allarticleList",['articlelist'=>$articles]);    
            }
        }
        return redirect()->route("LOGIN");
    }

    public function deleteArticle(Request $request)
    {
        if(Auth::guard('web')){
            if (strcmp(session()->get('value', 'default'), "admin") == 0) {
                DB::table('articles')->where('article_id',$request->id)->delete();
                $articles = DB::table('articles')->get();  
                return redirect()->route("HOME.SHOWARTICLES");   
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
