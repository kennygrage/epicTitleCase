<?php
    require_once __DIR__."/../vender/autoload.php";
    require_once __DIR__."/../src/TitleCaseGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig')
    });

    $app->get("/view_title_case", function() use($app) {
        $my_TitleCaseGenerator = new TitleCaseGeneartor;
        $title_cased_phrase = $my_TitleCaseGenerator->makeTitleCase($_GET['phrase']);
        return $app['twig']->render('title_cased.html.twig', array('result' => $title_cased_phrase));
    });

    return $app;

?>
