<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Notifications\FillTheArticlesTableErrorNotification;
use App\Services\ArticleHttpService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class FillTheArticlesTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command make an request to Space Flight News API to [GET]/articles and fill the local articles table with retrieved data.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ArticleHttpService $articleService)
    {
        $this->articleService = $articleService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('Starting the fill for Articles table');
        DB::beginTransaction();
        try {
            $articles = json_decode($this->articleService->get(), true);

            foreach ($articles as $article) {
                if (!Article::where('original_id', $article['id'])->first()) {
                    $newArticle = new Article();
                    $newArticle->original_id = $article['id'];
                    $newArticle->title = $article['title'];
                    $newArticle->url = $article['url'];
                    $newArticle->image_url = $article['imageUrl'];
                    $newArticle->news_site = $article['newsSite'];
                    $newArticle->featured = $article['featured'];
                    $newArticle->summary = $article['summary'];
                    $newArticle->save();

                    if (!empty($article['launches'])) {
                        $newArticle->attachLaunches($article['launches']);
                    }

                    if (!empty($article['events'])) {
                        $newArticle->attachEvents($article['events']);
                    }
                }
            }
            DB::commit();
            $this->line('<fg=black;bg=green>All right. End fill for Articles table.');
            return 0;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            $this->line('<fg=white;bg=red>Error on the fill for Articles table, nothing changed in database.');
        }
    }
}
