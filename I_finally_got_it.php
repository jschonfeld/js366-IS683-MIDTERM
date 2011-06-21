<?php

function tag($tag, $attributes, $content){

	if(!is_array($attributes)){
	
		die('Not an array');
	}
$html = '<' . $tag;

	foreach ($attributes as $key=>$value){	
	
	$html .= ' ' . $key . ' =' . $value; 
	
	}

$html.=  '>' . $content . '</' . $tag . '>';	

return $html;

}

function arrayDivider($array){

foreach($array as $key=>$value){

switch($key){
case 'title':
$tag = 'h1';
$attributes = array();

break;

case 'body':
$tag = 'p';
$attributes = array();

}
echo tag($tag, $attributes, $value);
}

}

$article = array('title' => 'my article title', 'body' => 'lorem ipsum');

arrayDivider($article);

?>
