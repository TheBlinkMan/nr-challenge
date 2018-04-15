<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $crawler = Goutte::request('GET', 'http://www2.camara.leg.br/transparencia/licitacoes-e-contratos/editais/pregaoeletronico');

    $biddings = $crawler->filter('.cor')->each(function ($node) {

        $number = $node->filterXPath('//tbody[2]/tr[1]/td[1]')->text();

        $object = $node->filterXPath('//tbody[2]/tr[1]/td[2]')->text();

        $opening_date = $node->filterXPath('//tbody[2]/tr[1]/td[3]')->text();

        $last_update = $node->filterXPath('//tbody[2]/tr[1]/td[4]')->text();

        $auction_notice = $node->filterXPath('//tbody[2]/tr[2]/td[2]/p[1]/a')->attr('href');
        $proposal_model = $node->filterXPath('//tbody[2]/tr[2]/td[2]/p[2]/a')->attr('href');

        $bidding = array(
            "number" => $number,
            "object" => $object,
            "opening_date" => $opening_date,
            "last_update" => $last_update,
            "auction_notice" => $auction_notice,
            "proposal_model" => $proposal_model,
        );

        return $bidding;
    });

    return view('welcome', [
        'institution' => 'Câmara dos Deputados',
        'biddings' => $biddings,
    ]);
});
