<?php

namespace App\Http\Controllers\Article;


/** 
 * @bodyParam original_id integer optional The original id (from the Space Flight News) of the article
 * @bodyParam title string optional The title of the article
 * @bodyParam url string optional The url of the article
 * @bodyParam image_url string optional The image_url of the article
 * @bodyParam news_site string optional The news_site of the article
 * @bodyParam summary string optional The summary of the article
 */

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'original_id' => 'nullable|integer|unique:articles,original_id',
            'title' => 'nullable|string',
            'url' =>  'nullable|string',
            'image_url' => 'nullable|string',
            'news_site' => 'nullable|string',
            'summary' => 'nullable|string',
        ];
    }
}
