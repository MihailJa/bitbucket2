<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">

    <title>Test task</title>
	<meta name="keywords" content="products">
    <meta name="description" content="products">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' 
	integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' 
integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' 
integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	

<style>
.cost{
   font-weight: bold;
   color: green;
}
nav{
    color:white;
    background-color: #47474b;
}
select {    
    width: 100%;
}
  </style>
  </head>
  <body class="d-flex flex-column h-100">
  <header>    
    <nav class="navbar">      
        <span class="navbar-brand">Test task</span>
        
    </nav>
  </header>
 
 <div class="container">
 <div class="row align-items-start mt-4">
    <div class="col-lg-4 col-12">
    <div class="books m-2">
   <select class="form-select" aria-label="Select books">
   <option value="-1" selected>Выберите книгу</option> 
  <?php include 'scripts/views/'.$content_view; ?>       
   </select>
</div>
</div>
<div class="col-lg-4 col-12">
<div class="authors m-2">
<select class="form-select" aria-label="Select authors"></select>
</div>
</div>
<div class="col-lg-4 col-12">
<div class="not-authors m-2">
<button type="button" class="btn btn-link">Книги без автора</button>
    </div>
    </div>
    </div>
    <div class="row align-items-start">
    <div class="col-12">
    <div class="table-responsive book_authors"></div>
    </div>
    
    <div class="sum_price mt-5"></div>    
           
  </div>  

   <script>
const _ajax = (url, data, func) =>{
   $.ajax({
type: "POST",
url: url,
data: data,
cache: false,
success: func
});
}

const getAuthors = () => {
   _ajax("authors.php", "", (html)=>document.querySelector('.authors select').innerHTML=html);   
}

$(document).ready(function() { 
      getAuthors();      
    
   let book = document.querySelector('.books select');
   let book_authors = document.querySelector('.book_authors');
   let authors = document.querySelector('.authors select');
   let button = document.querySelector('.not-authors button');
   let sum_price = document.querySelector('.sum_price');

   book.addEventListener( "change" , (event)  => { 
      if(event.target.value!=-1) {
         _ajax("book_authors.php", "id=" + event.target.value,
          (html) => { book_authors.hidden = false;
                      book_authors.innerHTML=html;});

   } else { book_authors.hidden = true; }
});

    
authors.addEventListener( "change" , (event)  => { 
   if(event.target.value!=-1) {
      _ajax("sum_price.php", "id=" + event.target.value, 
      (html) => { sum_price.hidden=false;
                  sum_price.innerHTML=html})    
   
   } else { sum_price.hidden=true;}
 });

 
 button.addEventListener( "click" , (event)  => {  
   _ajax("book_without_authors.php", "", (html) => book_authors.innerHTML=html);
   
 });  

})     
   
   </script>
  </body>
</html>