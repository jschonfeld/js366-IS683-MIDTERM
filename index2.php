<?php

$tag = 'a';
attributes = array('href'=>'http://www.google.com');
$content = 'Click for Google';
	
echo taggen($tag, $attributes, $content);

		function taggen($tag, $attributes, $content)
		{
		
			if (!is_array ($attributes))//check if $attributes is an array
			{ 
				throw new Exception ('Not an array');
			}
			$html = '<' . $tag;
			
			foreach($attributes as $key=>$value)//loop through array
			{
				$html .= ' ' . $key  . '= ' .'"'.  $value . '"';
			}

			$html .= '>'. $content . '</' . $tag . '>';
			
				return $html;//return tag
		
	
				try
				{
	
				echo taggen($tag, $attributes, $content);
	
				} 	catch(Exception $e) 
				
				{	
				
				echo $e->getMessage();
	
				}
		}		
				
				
				

	
	
	function midterm($array){
		
			$array = array('title' => 'my article title', 'body' => 'lorem ipsum');
			
				function maketag($something) {
	
				foreach($array as $key => $content){
				
				switch ($key){
			
						case "title":
						$tag = 'h1';
						$attributes = array("title" => "my article title");
						break;
						
						case "body":
						$tag = 'p';
						$attributes = array("body" => "lorem ipsum");
						break;
					}
				$HTMLCONTENTS .= tag($tag, $attributes, $content);
				}
				}
					
				$array = array('title' => 'my article title', 'body' => 'lorem ipsum');
				echo taggen($tag, $attributes, $HTMLCONTENTS);
	}
	
	?>
	
	
	
	
	
	
	
	

