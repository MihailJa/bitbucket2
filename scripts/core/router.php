<?php

class Route
{
	static function start()
	{
       
	   $routes = explode('/', $_SERVER['REQUEST_URI']);
	  
    switch( $routes[2])
    { 
	case "":		
		$controller = new Controller_AllBooks();
		$controller->action_index();
		break;
	case "index.php":		
		$controller = new Controller_AllBooks();
		$controller->action_index();
		break;		
	case "authors.php":		
		$controller = new Controller_AllAuthors();
		$controller->action_index();		
		break;
	case "book_authors.php":			
		$controller = new Controller_Book_Authors();
		$controller->action_index();		
		break;		
	case "sum_price.php":			
			$controller = new Controller_Sum_Price();
			$controller->action_index();		
			break;
	case "book_without_authors.php":		
			$controller = new Controller_Book_Without_Authors();
			$controller->action_index();		
			break;
	

	default : 
		/*require_once("page404.php"); */
	break;
}
	
}
}

?>