<?php

namespace Anax\Rssfeed;

/**
 * This class will test the class that shows a RSS-feed.
 * 
 */
class CRssfeedTest extends \PHPUnit_Framework_TestCase{
    
    /**
     * Test 
     * @return void 
     *
     */
    public function testCreateClass()
    {
        $rss = new \Anax\Rssfeed\CRssfeed([
            'url' => 'http://feeds.idg.se/ComputerSweden20SenasteNyheter',
            'heading' => 'An example RSS feed',
            'items' => '5'
        ]);
        
        $res = get_class($rss);
        $exp = "Anax\Rssfeed\CRssfeed";
        $this->assertEquals($res, $exp, "This is not the correct class.");
        
        //$res = $rss->characterEncoding;
        //$exp = 'UTF-8';
        //$this->assertEquals($res, $exp, "Character encoding missmatch.");
    }
 
	
}