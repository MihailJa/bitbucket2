<?php

class Model_Book_Without_Authors extends Model

{   //return array of authors   
	public function get_data($id)
	{	             
        
		$query = new QueryBuilder(new DBConnector());
		$data = $query->selectBookWithoutAuthors();	
        $query->close();	
		
        return $data;    	
	}
}

?>