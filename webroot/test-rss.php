<?php 
/**
 * This is a Anax pagecontroller.
 *
 */

// Get environment & autoloader and the $app-object.
require __DIR__.'/config_with_app.php'; 

// Prepare the page content
$rss = new Anax\Rssfeed\CRssfeed([ 
    	'url' => 'http://feeds.idg.se/ComputerSweden20SenasteNyheter',
    	'heading' => 'An example RSS feed - Computer Sweden',
    	'items' => '5',
    	]);
    
    $content = $rss->readRSS();

$app->theme->setVariable('title', "Test page")
           ->setVariable('main', "
    <p><i>This is a sample pagecontroller that lists a RSS feed.</i></p>
    {$content}
");


// Render the response using theme engine.
$app->theme->render();