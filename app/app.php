<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Address.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use($app) {
        return $app['twig']->render('home.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->get("/create_contact", function() use($app) {
        return $app['twig']->render('create_contact.html.twig', array('contact' => $contact));
    });

    $app->get("/delete_contacts", function() use($app) {
        return $app['twig']->render('delete_contacts.html.twig');
    });

    return $app;
?>
