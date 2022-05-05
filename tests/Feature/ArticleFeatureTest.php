<?php

namespace Tests\Feature;

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;
use Faker\Generator as Faker;

class ArticleFeatureTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var User $user
     */
    public $user;


    /**
     * Test setup
     * 
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
        $this->userToken = JWTAuth::fromUser($this->user);
    }

    /**
     * Test get list and specific article
     * 
     * @return void
     */
    public function testGetArticles()
    {
        $articles = factory(Article::class, 10)->create();

        $response =  $this->withHeaders(['Authorization' => "Bearer " . $this->userToken])->get('api/articles')->decodeResponseJson()['data'];
        $this->assertEquals(10, count($response));

        $this->withHeaders(['Authorization' => "Bearer " . $this->userToken])->get('api/articles/' . $articles[0]->id)
            ->assertStatus(200)
            ->assertJsonFragment(['title' => $articles[0]->title]);

        /**
         * Test pagination
         */
        $this->withHeaders(['Authorization' => "Bearer " . $this->userToken])->get('api/articles?page=1&per_page=2')
            ->assertStatus(200)
            ->assertJsonStructure(['meta' => ['pagination' => ['total', 'count', 'per_page', 'current_page', 'total_pages']]]);
    }

    /**
     *  Test store new article
     * 
     * @return void
     */
    public function testStoreArticle()
    {
        $data = [
            'original_id' => 123456,
            'title' => 'Test Article',
            'url' =>  'https://google.com',
            'image_url' => 'https://google.com',
            'news_site' => 'Test Company',
            'summary' => 'Lorem impsum dolor sit',
        ];
        $this->withHeaders(['Authorization' => "Bearer " . $this->userToken])->post('api/articles', $data)
            ->assertStatus(200)
            ->assertJsonFragment(['title' => $data['title']]);
    }

    /**
     * Test update an article
     * 
     * @return void
     */
    public function testUpdateArticle()
    {
        $article = factory(Article::class)->create();
        $data = [
            'title' => 'Updated Title'
        ];
        $this->withHeaders(['Authorization' => "Bearer " . $this->userToken])->put('api/articles/' . $article->id, $data)
            ->assertStatus(200)
            ->assertJsonFragment(['title' => $data['title']]);
    }

    /**
     * Test delete an article
     * 
     * @return void
     */
    public function testDeleteArticle()
    {
        $article = factory(Article::class)->create();
        $this->withHeaders(['Authorization' => "Bearer " . $this->userToken])->delete('api/articles/' . $article->id)
            ->assertStatus(200)
            ->assertJsonFragment(['message' => 'success']);
    }

    /**
     * Test Filters
     * 
     * @return void
     */
    public function testArticlesFilters()
    {
        $articleToFilter = factory(Article::class)->create();

        $this->withHeaders(['Authorization' => "Bearer " . $this->userToken])->get('api/articles?title=' . $articleToFilter->title)
            ->assertStatus(200)
            ->assertJsonFragment(['title' => $articleToFilter->title]);
    }

    /**
     * Test Filters
     * 
     * @return void
     */
    public function testArticlesException()
    {
        factory(Article::class, 2);
        $this->actingAs($this->user)->get('api/articles/' . 3)
            ->assertStatus(404)
            ->assertJsonFragment(['error' => "Article not found."]);
    }
}
