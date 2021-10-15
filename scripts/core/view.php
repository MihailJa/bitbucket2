<?php

class View
{
	

	function generate($content_view, $template_view, $data = null)
	{	
		include 'scripts/views/'. $template_view; 
		     

	}

	function generateAJAX($content_view,  $data = null)
	{	
		include 'scripts/views/'. $content_view; 	     

	}

	


}


?>