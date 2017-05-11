<?php

namespace App\Console\Commands;

use App\Helpers\CrawlInfo;
use App\Article;
use Illuminate\Console\Command;

class ScrapeArticles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrapes articles from GATE15 and inserts them in the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = 'https://www.gate15.be/srv/content/d/content-type/10/start/0/limit/100/excluded_tags/trots';
        $json = file_get_contents($url);
        $articles = json_decode($json);

        $bar = $this->output->createProgressBar(count($articles->data));
        // $scrapedArticleIds = Article::select('id')->where('user_id', null)->get();

        // if($scrapedArticleIds->isEmpty()) {
            for($i = 0; $i < count($articles->data); $i++) {
                $scrapedArticle = new Article;
                $scrapedArticle->title = $articles->data[$i]->latestVersion->title;
                $scrapedArticle->content = strip_tags($articles->data[$i]->latestVersion->snippets[1]->body->text);
                $scrapedArticle->time_ago = $articles->data[$i]->latestVersion->createdAt;
                $scrapedArticle->image_url = $articles->data[$i]->latestVersion->snippets[0]->body->file[0]->src;
                $scrapedArticle->article_url = 'https://www.gate15.be/nl/nieuws/' . $articles->data[$i]->slug;
                $scrapedArticle->save();
                Article::find($scrapedArticle->id)->delete();

                $bar->advance();
            }
        // }
        // else {
        //     for($i = 0; $i < $scrapedArticleIds->count(); $i++) {
        //         Article::find($scrapedArticleIds[$i]->id)
        //             ->update(
        //                 [
        //                     'title' => $scrapedTitles[$i],
        //                     'content' => $scrapedContent[$i],
        //                     'time_ago' => $scrapedTimeAgoes[$i],
        //                     'image_url' => $scrapedImageUrls[$i],
        //                     'article_url' => $scrapedArticleUrls[$i],
        //                 ]
        //             );

        //         $bar->advance();
        //     }
        // }

        $bar->finish();
    }
}
