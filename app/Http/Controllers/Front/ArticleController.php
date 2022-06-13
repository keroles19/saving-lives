<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function article(){
        $recentArticle = $this->recentArticle(3);
        $allArticle = $this->allArticle();
        return view('front.article',compact(['recentArticle','allArticle']));
    }

    public function getArticleById($id){
        $article = Article::where('id',$id)->where('status',1)->first();
        if(!$article){
            abort(404);
        }
        $recentArticle = $this->recentArticle(8);
        return view('front.article-show',compact(['article','recentArticle']));
    }



    private function recentArticle($number){
        return  Article::where('status','1')->latest()->take($number)->get();

    }

    private function allArticle(){
        return  Article::where('status','1')->paginate(8);
    }

}
