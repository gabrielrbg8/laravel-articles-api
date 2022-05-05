<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelTransform;
use EloquentFilter\Filterable;

class Article extends Model
{
    use ModelTransform, Filterable;

    public $transformer = \App\Transformers\ArticleTransformer::class;

    protected $fillable = [
        "id",
        'title',
        'url',
        'image_url',
        'news_site',
        'featured',
        'summary',
        'launches',
        'events',
        'original_id',
    ];

    /**
     * The validation error messages.
     *
     * @var array
     */
    public static $validationMessages = [
        'error.save' => 'Erro on saving Article.',
        'error.not_found' => 'Article not found.',
    ];

    /**
     * Attach launchs to the model
     */
    public function attachLaunches($launches)
    {
        if (!is_array($launches)) {
            return;
        }
        $launchesArray = [];

        foreach ($launches as $k => $launch) {

            $launchesArray[] = $launch;
        }

        $this->launches = json_encode($launchesArray);
        $this->save();
    }

    /**
     * Attach events to the model
     */
    public function attachEvents($events)
    {
        if (!is_array($events)) {
            return;
        }
        $eventsArray = [];

        foreach ($events as $k => $events) {

            $eventsArray[] = $events;
        }

        $this->events = json_encode($eventsArray);
        $this->save();
    }
}
