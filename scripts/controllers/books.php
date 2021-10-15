<?php
class Controller_AllBooks extends Controller
{
    
    function __construct()
	{
		$this->model = new Model_AllBooksOrAuthors();
		$this->view = new View();
	}
	
	function action_index()
	{			
        $dataBooks = $this->model->get_data("books");		
	
		$this->view->generate('books.php', 'template_view.php', $dataBooks);
		
		if(!$dataBooks)
		{
			 // to print "product not found"
            
		}			
	}	
}	
?>