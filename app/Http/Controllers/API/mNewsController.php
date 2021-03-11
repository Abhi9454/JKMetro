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
        $articles = DB::table('article')->orderBy('article_added_on', 'desc')->get();
        if (count($articles) != 0) {
            for($x = 0; $x < count($articles); $x++ ){
                $date = date_format(\date_create($articles[$x]->article_added_on), 'd-m-Y');
                $category = DB::table('category')->where('article_category',$articles[$x]->article_category)->get();
                $articles[$x]->category_name = $category[0]->category_id;
                $articles[$x]->article_time = $date;
            }
            return response()->json(['success' => $articles], 200);
        } else {
            return response()->json(['error' => 'No Articles found'], 401);
        }
    }
}
