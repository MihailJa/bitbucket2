<option value="-1" selected>Выберите автора</option>
<?php

foreach($data as $item)
{  
  $id = $item['id'];  
  $first_name = $item['first_name'];
  /*$price = $item['price'];  */

    echo
    "<option value='$id'>$first_name</option>";
}
?>