<?php
class Controller_Book_Authors extends Controller
{    
    function __construct()
	{
		$this->model = new Model_Book_Authors();
		$this->view = new View();
        $this->id = $_POST['id'];
	}
	
	function action_index()
	{	        
        $dataAuthors = $this->model->get_data($this->id);       		
					
		$this->view->generateAJAX('book_authors.php', $dataAuthors);
		
		if(!$dataAuthors)	
		{
			 // to print "product not found"            
		}		
	}	
}
?>