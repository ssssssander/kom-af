<?php

namespace App\Helpers;

use Goutte\Client;

class CrawlInfo
{
    public static function getCrawlInfo($url) {
        $scrapeText = '_text';
        $scrapeSrc = 'src';
        $scrapeHref = 'href';

        $client = new Client();
        $guzzleClient = new \GuzzleHttp\Client(array(
            'curl' => array(
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false
            ),
        ));
        $client->setClient($guzzleClient);
        $crawler = $client->request('GET', $url);

        $crawlInfo =
        [
            'client' => $client,
            'crawler' => $crawler,
            'text' => $scrapeText,
            'src' => $scrapeSrc,
            'href' => $scrapeHref
        ];

        return $crawlInfo;
    }
}
