<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticle;
use App\Models\Article;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainPagesController extends Controller
{

    public function index(){
        return view('mainpage');
    }

    public function writearticle(){
        return view('postarticle');
    }
    public function storearticle(CreateArticle $request){
        try {
            Article::create( [
                'title' => $request->title,
                'textart' => $request->textart,
                'name'=>Auth::user()->name,
            ]);
           return redirect()->route('getarticle')->with(['success' => 'تم الحفظ بنجاح']);// Method to get All Article down
        } catch (\Exception $ex){
            return response()->json($ex->getMessage()) ;
        }

    }
    public function getarticle(){

        // There is Scope on Article Models

        $articles = Article::Selection()->get();
        return view('articlepage',compact('articles'));
    }
}
