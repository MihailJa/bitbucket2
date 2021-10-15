<?php

class QueryBuilder 
{
    private $connector;   
    private $table;
    private $query;       


    public function __construct(DBConnector $connector)
    {       
        $this->connector = $connector;
        $this->connector->set_charset("utf8");         
    }     

    private function _setTable($table)
    {        
        $this->table = $table;            
        return $this;       
    }
    private function _setQueryStringBookAuthors($id)
    {  
        $this->query="SELECT authors.first_name, authors.last_name, authors.patronymic FROM authors
        JOIN book_authors ON authors.id=book_authors.id_author WHERE book_authors.id_book = $id";         
        return $this;       
    }
    private function _setQueryStringSumPrice($id)
    {  
        $this->query="SELECT SUM(price) FROM books JOIN book_authors ON books.id=book_authors.id_book
        WHERE id_author = $id;";         
        return $this;       
    }
    
    private function _setQueryStringBookWithoutAuthors()
    {  
        $this->query="SELECT title, price FROM books JOIN book_authors ON books.id=book_authors.id_book
        WHERE id_author IS NULL;";         
        return $this;       
    }
    private function _setQueryStringSelect()
    {  
        $this->query="SELECT * FROM $this->table ";       
        return $this;       
    }        
     
    
      private function _select(){                
        $result = $this->connector->query($this->query);           
            if($result){    
                $data_array = $result->fetch_all($resulttype = MYSQLI_ASSOC);                 
                    return   $data_array;          
             }else 
             {             
                return false;            
             }   
        }  
           
      public function selectAll($product_type){ 
        $this->_setTable($product_type)->_setQueryStringSelect();      
        return $this->_select();
      }     

      public function selectBookAuthors($id){ 
        $this->_setQueryStringBookAuthors($id);      
        return $this->_select();
      }      

     public function selectSumPrice($id){ 
       $this->_setQueryStringSumPrice($id);      
       return $this->_select();
      }  
  
     public function selectBookWithoutAuthors(){ 
       $this->_setQueryStringBookWithoutAuthors();      
       return $this->_select();
      }  
   
     public function close(){      
        $this->connector->close();
      }    

}

?>