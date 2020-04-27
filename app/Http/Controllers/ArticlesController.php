<?php

namespace App\Http\Controllers;
use App\Article;
use App\Tag;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article) {
        return view('articles.show', compact('article'));
    }
    public function index()
    {

            if(request('tag')) {
                $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
                
            } else {
                $articles = Article::latest()->get();
            }
            
            return view('articles.index', compact('articles'));
        
    }
    public function create() {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    public function store(Request $request) {
        
        $validated = request()->validate([
            'title'=> 'required|max:190|min:5',
            'excerpt'=> 'required',
            'body'=> 'required',
            'tags' => 'exists:tags,id'
        ]);
        Article::create($validated);
        $article->tags()->attach(request('tags'));
    
        return redirect(route('articles.index'));
    }

    public function edit(Article $article) {
        
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) {
        $validated = request()->validate([
            'title'=> 'required|max:190|min:5',
            'excerpt'=> 'required',
            'body'=> 'required',
        ]);
       
        $article->update($validated);        
    
        return redirect($article->path());
    }

    public function destroy() {
        
    }


}
