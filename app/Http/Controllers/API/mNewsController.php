<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User as Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class mNewsController extends Controller
{
    public function getAllArticleList()
    {
        $articles = DB::table('articles')->whereNotIn('article_id',[4])->orderBy('article_added_on', 'desc')->get();
        if (count($articles) != 0) {
            for($x = 0; $x < count($articles); $x++ ){
                $date = date_format(\date_create($articles[$x]->article_added_on), 'd-m-Y');
                $category = DB::table('category')->where('category_id',$articles[$x]->article_category)->get();
                $articles[$x]->category_name = $category[0]->category_name;
                $articles[$x]->article_time = $date;
            }
            return response()->json(['success' => $articles], 200);
        } else {
            return response()->json(['error' => 'No Articles found'], 401);
        }
    }

    public function getHeadArticle()
    {
        $articles = DB::table('articles')->orderBy('article_added_on', 'desc')->take(1)->get();
        if (count($articles) != 0) {
            for($x = 0; $x < count($articles); $x++ ){
                $date = date_format(\date_create($articles[$x]->article_added_on), 'd-m-Y');
                $category = DB::table('category')->where('category_id',$articles[$x]->article_category)->get();
                $articles[$x]->category_name = $category[0]->category_name;
                $articles[$x]->article_time = $date;
            }
            return response()->json(['success' => $articles], 200);
        } else {
            return response()->json(['error' => 'No Articles found'], 401);
        }
    }

    public function getIdArticle(Request $request)
    {
        $articles = DB::table('articles')->where('article_id',$request->article_id)->get();
        if (count($articles) != 0) {
            return response()->json(['success' => $articles], 200);
        } else {
            return response()->json(['error' => 'No Articles found'], 401);
        }
    }

    public function getCategories()
    {
        $category = DB::table('category')->get();
        if (count($category) != 0) {
            return response()->json(['success' => $category], 200);
        } else {
            return response()->json(['error' => 'No Articles found'], 401);
        }
    }

    public function getSportsArticle()
    {
        $articles = DB::table('articles')->where('article_category',4)->orderBy('article_added_on', 'desc')->get();
        if (count($articles) != 0) {
            for($x = 0; $x < count($articles); $x++ ){
                $date = date_format(\date_create($articles[$x]->article_added_on), 'd-m-Y');
                $category = DB::table('category')->where('category_id',$articles[$x]->article_category)->get();
                $articles[$x]->category_name = $category[0]->category_name;
                $articles[$x]->article_time = $date;
            }
            return response()->json(['success' => $articles], 200);
        } else {
            return response()->json(['error' => 'No Articles found'], 401);
        }
    }


}
