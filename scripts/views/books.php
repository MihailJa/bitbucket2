<?php
foreach($data as $item)
{  
  $id = $item['id'];  
  $title = $item['title']; 

    echo
    "<option value='$id'>$title</option>";

}

?>