<?php

$defaultUsername = "jahidulpabelislam";

$links = [
    "portfolio" => "https://jahidulpabelislam.com",
    "links" => "https://links.jahidulpabelislam.com",
    "socials" => "https://socials.jahidulpabelislam.com",
    "linkedin" => "https://www.linkedin.com/in/$defaultUsername/",
    "github" => "https://github.com/$defaultUsername/",
    "instagram" => "https://instagram.com/$defaultUsername/",
    "npm" => "https://www.npmjs.com/~$defaultUsername",
    "packagist" => "https://packagist.org/users/$defaultUsername/packages/",
];

$links["site"] = $links["portfolio"];

$request = trim($_SERVER["REQUEST_URI"], "/");

if (array_key_exists($request, $links)) {
    header("Location: " . $links[$request]);
    return;
}

http_response_code(404);
include("error/404.php");
