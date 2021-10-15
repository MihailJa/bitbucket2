<?php
class Controller_Book_Without_Authors extends Controller
{    
    function __construct()
	{
		$this->model = new Model_Book_Without_Authors();
		$this->view = new View();
        
	}
	
	function action_index()
	{	
        $id=null;
        $dataAuthors = $this->model->get_data($id);	        		
					
		$this->view->generateAJAX('book_without_authors.php', $dataAuthors);
		
		if(!$dataAuthors)	
		{
			 // to print "product not found"
            
		}	
	}	
}	
?>