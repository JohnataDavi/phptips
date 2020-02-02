<?php


namespace Source\Support;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    protected $optmizer;

    public function __construct(string $schema = "article")
    {
        // Setar os parametros como constantes no Config.php
        $this->optmizer = new Optimizer();
        $this->optmizer->openGraph(
            SITE,
            "pt_BR",
            $schema
        )->publisher(
            "partyliveapp",
            "johnata.davi"
        )->twitterCard(
            "@Johnata_Davi",
            "@Johnata_Davi",
            ""
        )->facebook(
            "593307304784277"
        );
    }

    public function render(string $title, string $description, string $url, string $image, bool $follow = true): string
    {
        return $this->optmizer->optimize($title, $description, $url, $image, $follow)->render();
        // $follow = true -> Essa página vai ser indexada pelo google, não fazer isso para o admin
        //var_dump($seo->debug());
    }
}