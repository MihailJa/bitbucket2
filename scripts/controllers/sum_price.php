<?php
class Controller_Sum_Price extends Controller
{    
    function __construct()
	{
		$this->model = new Model_Sum_Price();
		$this->view = new View();
        $this->id = $_POST['id'];
	}
	
	function action_index()
	{	        
        $dataSum = $this->model->get_data($this->id);	        		
					
		$this->view->generateAJAX('sum_price.php', $dataSum);
		
		if(!$dataSum)	
		{
			 // to print "product not found"
            
		}		
	}	
}	
?>