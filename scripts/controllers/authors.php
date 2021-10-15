<?php
class Controller_AllAuthors extends Controller
{
    
    function __construct()
	{
		$this->model = new Model_AllBooksOrAuthors();
		$this->view = new View();
	}
	
	function action_index()
	{	$dataAuthors = $this->model->get_data("authors");	        		
					
		$this->view->generateAJAX('authors.php', $dataAuthors);
		
		if(!$dataAuthors)	
		{
			 // to print "product not found"
            
		}
		
	}	
}	
?>