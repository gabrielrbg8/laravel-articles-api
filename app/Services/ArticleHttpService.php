<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ArticleHttpService
{
    public function get($id = null)
    {
        $response = $id ? Http::get('https://api.spaceflightnewsapi.net/v3/articles/' . $id) : Http::get('https://api.spaceflightnewsapi.net/v3/articles');
        return $response->body();
    }
}
