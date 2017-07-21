<?php

namespace Anax\Rssfeed;

use Anax\Rssfeed\CRssfeed; 

/**
 * This class will test the class that shows a RSS-feed.
 * 
 */
class CRssfeedTest extends \PHPUnit_Framework_TestCase{
    
    /**
     * Properties
     *
     */ 	
    private $options = array(
                'url' => 'http://feeds.idg.se/ComputerSweden20SenasteNyheter',
                'heading' => 'An example RSS feed',
                'items' => '5'
                ); 
	
	/**
     * Test 
     * @return void 
     *
     */
    public function testCreateClass()
    {
        $rss = new \Anax\Rssfeed\CRssfeed($this->options);
        
        $res = get_class($rss);
        $exp = "Anax\Rssfeed\CRssfeed";
        $this->assertEquals($res, $exp, "This is not the correct class.");
    }
    
    public function testReadRSS()
    {   	
        $rss = new \Anax\Rssfeed\CRssfeed($this->options);
        
        $test = $rss->readRSS();
        $this->assertStringStartsWith('<article>', $test);
        $this->assertStringEndsWith('</article>', $test);
    }

}