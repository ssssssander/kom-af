<?php

namespace App\Console\Commands;

use App\Helpers\CrawlInfo;
use App\Article;
use Carbon\Carbon;
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
        $url = 'https://www.gate15.be/nl/nieuws';
        $json_url = 'https://www.gate15.be/srv/content/d/content-type/10/start/0/limit/50/excluded_tags/trots';
        $json = file_get_contents($json_url);
        $articles = json_decode($json);
        $now = Carbon::now();
        $dateStringsEnglish = ['seconds', 'second', 'minutes', 'minute', 'hours', 'hour', 'days', 'day', 'weeks', 'week',
            'months', 'month', 'years', 'year'];
        $dateStringsDutch = ['seconden', 'seconde', 'minuten', 'minuut', 'uren', 'uur', 'dagen' ,'dag', 'weken', 'week',
            'maanden', 'maand', 'jaren', 'jaar'];

        $bar = $this->output->createProgressBar(count($articles->data));
        $scrapedArticleIds = Article::select('id')->where('user_id', null)->get();

        if(!$scrapedArticleIds->isEmpty()) {
            Article::where('user_id', null)->delete();
        }

        for($i = 0; $i < count($articles->data); $i++) {

            $createdAt = new Carbon($articles->data[$i]->latestVersion->createdAt);

            $title = $articles->data[$i]->latestVersion->title;
            $content = strip_tags($articles->data[$i]->latestVersion->snippets[1]->body->text);
            $timeAgo = str_replace($dateStringsEnglish, $dateStringsDutch, $now->diffForHumans($createdAt, true));
            $imageUrl = $articles->data[$i]->latestVersion->snippets[0]->body->file[0]->src;
            $articleUrl = 'https://www.gate15.be/nl/nieuws/' . $articles->data[$i]->slug;

            $scrapedArticle = new Article;
            $scrapedArticle->title = $title;
            $scrapedArticle->content = $content;
            $scrapedArticle->time_ago = $timeAgo;
            $scrapedArticle->image_url = $imageUrl;
            $scrapedArticle->article_url = $articleUrl;

            $scrapedArticle->save();

            $bar->advance();
        }

        $bar->finish();
    }
}
