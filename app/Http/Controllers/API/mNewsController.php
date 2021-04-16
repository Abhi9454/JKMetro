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
        $temp = DB::table('articles')->whereNotIn('article_category',[4])->orderBy('article_added_on', 'desc')->take(1)->get();
        $data[] = $temp[0]->article_id;
        $articles = DB::table('articles')->whereNotIn('article_id',$data)->whereNotIn('article_category',[4])->orderBy('article_added_on', 'desc')->get();
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
        $articles = DB::table('articles')->whereNotIn('article_category',[4])->orderBy('article_added_on', 'desc')->take(1)->get();
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

    public function getJammu(){
        $articles = DB::table('articles')->where('article_category',1)->orderBy('article_added_on', 'desc')->get();
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

    public function getSrinagar(){
        $articles = DB::table('articles')->where('article_category',2)->orderBy('article_added_on', 'desc')->get();
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

    public function getBaramulla(){
        $articles = DB::table('articles')->where('article_category',3)->orderBy('article_added_on', 'desc')->get();
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

    public function getSports(){
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

    public function getUdhampur(){
        $articles = DB::table('articles')->where('article_category',5)->orderBy('article_added_on', 'desc')->get();
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

    public function getPahalgham(){
        $articles = DB::table('articles')->where('article_category', 6)->orderBy('article_added_on', 'desc')->get();
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

    public function getCategoryArticle(Request $request){
        $articles = DB::table('articles')->where('article_category',$request->category_id)->orderBy('article_added_on', 'desc')->get();
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

