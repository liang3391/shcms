<?php

namespace App\Http\Controllers;

use App\Article;
use App\ArticleReadingAnalysis;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index(Request $request){

        // 删除空格 和后面的内容
        // UPDATE articles SET title=LEFT( title, INSTR(title, ' ') - 1) WHERE title LIKE '% %'

        // 删除·作者·和后面的内容
        // UPDATE articles SET title=LEFT( title, INSTR(title, '作者') - 1) WHERE title LIKE '%作者%'

        // 删除后面的括号
        // UPDATE articles SET title=LEFT(title, char_length(title)-1) WHERE title LIKE '%（' AND id=482
//        $ArticleReadingAnalysis = ArticleReadingAnalysis::orderBy('reading_at') -> limit(20) -> get();
//
//        $articles = [];
//        foreach ($ArticleReadingAnalysis as $analysi)
//        {
//            $articles[] = $analysi -> article;
//        }
        $articles = Article::getByRandom(200);
        return view('index', ['articles' => $articles]);
    }
}
