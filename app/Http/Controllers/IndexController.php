<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//dev
use App\Article;

class IndexController extends Controller
{
    protected $message;
    protected $header;


    public function __construct(){
        $this->header='My first Laravel project';
        $this->message="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
         et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
          ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
           nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.";
    }

    public function index(){
        $articles=Article::select('id', 'title', 'desc')->get();

        //dump($articles);

        return view('page')->with(['message'=>$this->message,
                                   'header'=>$this->header,
                                   'articles'=>$articles]);
    }

    public function show($id){
        //dump($id);
        //$article=Article::find($id);
        //выбирает с помощью модели артикл из базы ту запись, id которой указано параметром метода show
        $article=Article::select(['id', 'title', 'text'])->where('id', $id)->first();
        //dump($article);
        return view('article-content')->with(['message'=>$this->message,
            'header'=>$this->header,
            'article'=>$article]);
    }
    public function add(){
        dump($this->header);
        return view('add-content')->with(['message'=>$this->message,
            'header'=>$this->header]);
    }
    public function store(){

    }
}
