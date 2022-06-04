

<script src="../js/script.js" defer></script>
<!-- trial -->
<style>
  .title
  {
    display:none;
    width:100px;
    height:auto;
    position:relative;
    /* background:green; */
  }
 img:hover +  .title {
  /* content: attr(data-title); */
  display:block;
  position: absolute;

  transform: translateY(-50px);
}
  </style>

       <?php 

      
  $uri = $_SERVER['REQUEST_URI']; 
  include "../lib/cartadder.php";
  if(str_contains($uri, "bookshelf")){
$newarray = array_chunk($books,3,TRUE);

foreach ($newarray as $books) {
   include "sectionslider.php";
}
  }
  else{
    include "sectionslider.php";
  }
?>