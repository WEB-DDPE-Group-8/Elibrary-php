

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
 
  if(str_contains($uri, "profile")){
    include "../lib/cartadder.php";
    include "sectionslider.php";
      return 0;
  }
  else if(!str_contains($uri, "index")){
    include "../lib/cartadder.php";
$newarray = array_chunk($books,3,TRUE);

  foreach ($newarray as $books) {
    include "sectionslider.php";
}
  }
  else{ include "lib/cartadder.php";
    include "sectionslider.php";
  }
?>