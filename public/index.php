<?php

declare(strict_types=1);

include_once(__DIR__ . "/../vendor/autoload.php");

$app = \JPI\App::get();

$domain =  $app::DOMAINS[$app->getEnvironment()];  "jahidulpabelislam.com";
$defaultUsername = "jahidulpabelislam";

$links = [
    "site" => "https://$domain",
    "portfolio" => "https://$domain/portfolio",
    "links" => "https://links.$domain",
    "socials" => "https://socials.$domain",
    "linkedin" => "https://www.linkedin.com/in/$defaultUsername/",
    "github" => "https://github.com/$defaultUsername/",
    "instagram" => "https://instagram.com/$defaultUsername/",
    "npm" => "https://www.npmjs.com/~$defaultUsername",
    "packagist" => "https://packagist.org/users/$defaultUsername/packages/",
];

$request = trim($_SERVER["REQUEST_URI"], "/");

if (array_key_exists($request, $links)) {
    header("Location: " . $links[$request]);
    return;
}

http_response_code(404);
include("error/404.php");
