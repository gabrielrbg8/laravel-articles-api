<?php

namespace App\ModelFilters;

use App\Constants\Constants;
use EloquentFilter\ModelFilter;
use Illuminate\Support\Facades\Auth;

class ArticleFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];


    public function setup()
    {
        // $user = Auth::user();

        // if (!$user) return null;
    }

    public function title($value)
    {
        return $this->where('title', 'LIKE', "%$value%");
    }
}
