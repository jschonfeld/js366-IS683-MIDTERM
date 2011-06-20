<?php


	

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
	
		foreach ($array as $key=>$value){
		
			maketag($var);
		
		}
			
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
				$HTMLCONTENTS .= taggen($tag, $attributes, $content);

				}
				
				echo taggen($array);
							 
				}		
	}
	$array = array('title' => 'my article title', 'body' => 'lorem ipsum');
	
	
	?>
	
	
	
	
	
	
	
	

