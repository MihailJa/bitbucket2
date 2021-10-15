<h2>Книги без авторов</h2>
<table class="table table-dark table-striped" >
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
<?php
$count = 0;

foreach($data as $item) 
{ 
$count ++;
$title = $item['title'];
$price = $item['price'];
 

  echo
  " <tr>
    <th scope='row'>$count</th>
    <td>$title</td>
    <td>$price</td>
    
  </tr>";
}

?>
  </tbody>
</table>