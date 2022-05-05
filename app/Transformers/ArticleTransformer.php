<?php

namespace App\Transformers;

use App\Models\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Article $article)
    {
        return [
            "id" => (int) $article->id,
            'original_id' => (int) $article->original_id,
            'title' => (string)$article->title,
            'url' => (string) $article->url,
            'image_url' => (string) $article->image_url,
            'news_site' => (string) $article->news_site,
            'featured' => (int) $article->featured,
            'summary' => (string) $article->summary,
            'launches' => $article->launches,
            'events' => $article->events,
        ];
    }
}
