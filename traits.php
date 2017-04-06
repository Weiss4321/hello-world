<?php

trait Setter
{
	public function setTitle($title)
	{
		return $title;
	}
}



class Home 
{
	use Setter;
	
	public $title;
	
	public function __construct($title)  
	{
		$this->title = $this->setTitle($title);
	}
	
	
}


$obj = new Home('Traits');

//$obj->setTitle('Traits');

var_dump($obj);
