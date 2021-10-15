<h2>Авторы книги</h2>
<table class="table table-dark table-striped" >
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Parcity</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach($data as $item) 
{

$first_name = $item['first_name'];
$last_name = $item['last_name'];
$patronymic = $item['patronymic'];  

  echo
  " <tr>
    <th scope='row'>1</th>
    <td>$first_name</td>
    <td>$last_name</td>
    <td>$patronymic</td>
  </tr>";
}

?>
  </tbody>
</table>



