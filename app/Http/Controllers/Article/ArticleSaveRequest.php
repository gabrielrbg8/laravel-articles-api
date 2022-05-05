<?php

namespace App\Http\Controllers\Article;


/** 
 * @bodyParam original_id integer required The original id (from the Space Flight News) of the article
 * @bodyParam title string required The title of the article
 * @bodyParam url string required The url of the article
 * @bodyParam image_url string required The image_url of the article
 * @bodyParam news_site string required The news_site of the article
 * @bodyParam summary string required The summary of the article
 */

use Illuminate\Foundation\Http\FormRequest;

class ArticleSaveRequest extends FormRequest
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
            'original_id' => 'required|integer|unique:articles,original_id',
            'title' => 'required|string',
            'url' =>  'required|string',
            'image_url' => 'required|string',
            'news_site' => 'required|string',
            'summary' => 'required|string',
        ];
    }
}
