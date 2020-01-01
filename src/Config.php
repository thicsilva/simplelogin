<?php

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "Auth em MVC com PHP",
    "description" => "Sistema ",
    "domain" => "localauth.com",
    "locale" => "pt-BR",
    "root" => "http://localhost:8000"
]);

/**
 * SITE MINIFY
 */

if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . "/Minify.php";
}

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "sistema-login",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */

define("SOCIAL", [
    "facebook_page" => "thicsilva",
    "facebook_author" => "thicsilva",
    "facebook_appId" => "",
    "twitter_creator" => "@thicsilva",
    "twitter_site" => "@thicsilva"
]);


/**
 * MAIL CONNECT
 */

define("MAIL", []);


/**
 * SOCIAL LOGIN FACEBOOK
 */

define("FACEBOOK_LOGIN", []);


/**
 * SOCIAL LOGIN GOOGLE
 */

define("GOOGLE_LOGIN", []);
