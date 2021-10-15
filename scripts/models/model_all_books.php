<?php

class Model_AllBooksOrAuthors extends Model

{   //return array of books or authors   
	public function get_data($product_type)
	{	             
        $query = new QueryBuilder(new DBConnector());
		$data = $query->selectAll($product_type);	
        $query->close();	
		
        return $data;    	
	}
}

?>