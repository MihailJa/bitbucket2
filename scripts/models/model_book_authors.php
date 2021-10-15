<?php

class Model_Book_Authors extends Model

{   //return array of authors   
	public function get_data($id)
	{	             
        $query = new QueryBuilder(new DBConnector());
		$data = $query->selectBookAuthors($id);	
        $query->close();	
		
        return $data;    	
	}
}

?>