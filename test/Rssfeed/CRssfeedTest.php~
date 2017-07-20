<?php

namespace Anax\Rssfeed;

/**
 * A class to show a RSS-feed.
 *
 */
class CRssfeed { 
   
    /**
     * Properties
     *
     */ 
    private $options = array();
    private $url;
    private $heading;
    private $items;
     
    /**
     * Constructor
     *
     * @param array $options to alter the default behaviour.
     */
    public function __construct($options=array()) {
       $this->url = $options['url'];
       $this->heading = $options['heading']; 
       $this->items = $options['items'];
    }
	
    public function readRSS(){
    	
       $html = "<article>";
       $heading = $this->heading; 
       $html .= "<h1>$heading</h1>";
       $xml = simplexml_load_file($this->url);

       for($i = 0; $i < $this->items; $i++){
	       $title = $xml->channel->item[$i]->title;
	       $link = $xml->channel->item[$i]->link;
	       $description = $xml->channel->item[$i]->description;
	       $pubDate = $xml->channel->item[$i]->pubDate;
	       
	       // Formatting the date
           $pubDate= date("D, d M Y H:i:s T", strtotime($pubDate));
	       
           $html .= "<a href='$link'><h3>$title</h3></a>";
	       $html .= "<small>$pubDate</small><br /><br />";
           $html .= "$description";
           $html .= "<hr />";
       }
       $html .= "</article>";
           
       return $html;
    
    }      
     
}