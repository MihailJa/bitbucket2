<?php

class Model_Sum_Price extends Model

{   //return array of authors   
	public function get_data($id)
	{	             
        $query = new QueryBuilder(new DBConnector());
		$data = $query->selectSumPrice($id);	
        $query->close();	
		
        return $data[0]['SUM(price)'];    	
	}
}

?>