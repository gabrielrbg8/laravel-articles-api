<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;

/**
 * @group  Article
 *
 * APIs for managing articles
 */
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @transformerCollection \App\Transformers\ArticleTransformer
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(ArticleIndexRequest $request)
    {
        $articles = Article::filter($request->all())->get();
        return $this->showData($articles);
    }


    /**
     * Store a newly created resource in storage.
     *
     * 
     * @transformer \App\Transformers\ArticleTransformer
     * @param  ArticleSaveRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleSaveRequest $request)
    {
        $article = new Article();
        $article->fill($request->except(['launches', 'events']));
        $article->save();

        if (!empty($request->get('launches'))) {
            $article->attachLaunches($article['launches']);
        }

        if (!empty($request->get('events'))) {
            $article->attachEvents($article['events']);
        }

        return $this->showOne($article);
    }

    /**
     * Display the specified resource.
     *
     * 
     * @transformer \App\Transformers\ArticleTransformer
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return $this->showOne($article);
    }


    /**
     * Update the specified resource in storage.
     *
     * 
     * @transformer \App\Transformers\ArticleTransformer
     * @param  ArticleUpdateRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdateRequest $request, Article $article)
    {
        $article->fill($request->except(['launches', 'events']));
        $article->save();

        if (!empty($request->get('launches'))) {
            $article->attachLaunches($article['launches']);
        }

        if (!empty($request->get('events'))) {
            $article->attachEvents($article['events']);
        }

        return $this->showOne($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @response {
     *  "message" : "success"
     * }
     * 
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return response()->json(['message' => 'success']);
    }
}
