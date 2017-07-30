<?php

date_default_timezone_set( 'America/New_York' );
define( 'IS_DEV', true );

require 'vendor/autoload.php';

$app = new \Slim\Slim(
  array(
    'templates.path' => 'views',
    'view' => new \Slim\Views\Twig(),
  )
);

$app->get( '/', function() use ( $app )
{
  $title = "Home";
  $body_class = "home fade";
  $app->render( 'home.twig', array(
    'title' => $title,
    'body_class' => $body_class,
    'is_dev' => IS_DEV,
  ));
});

$app->get( '/home', function() use ( $app )
{
  $title = "Home";
  $body_class = "home fade";
  $app->render( 'home.twig', array(
    'title' => $title,
    'body_class' => $body_class,
    'is_dev' => IS_DEV,
  ));
});

$app->get( '/business-solutions', function() use ( $app )
{
  $title = "Business Solutions";
  $body_class = "business-solutions fade";
  $app->render( 'business-solutions.twig', array(
    'title' => $title,
    'body_class' => $body_class,
    'is_dev' => IS_DEV,
  ));
});

$app->get( '/healthcare', function() use ( $app )
{
  $title = "Healthcare";
  $body_class = "healthcare fade";
  $app->render( 'healthcare.twig', array(
    'title' => $title,
    'body_class' => $body_class,
    'is_dev' => IS_DEV,
  ));
});

$app->get( '/near-field-communication-nfc', function() use ( $app )
{
  $title = "Near Field Communication (NFC)";
  $body_class = "near-field-communication-nfc fade";
  $app->render( 'near-field-communication-nfc.twig', array(
    'title' => $title,
    'body_class' => $body_class,
    'is_dev' => IS_DEV,
  ));
});

$app->run();
