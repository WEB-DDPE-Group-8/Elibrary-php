

<script src="../js/script.js" ></script>
       <?php 

      
  $uri = $_SERVER['REQUEST_URI']; 
 
  if(str_contains($uri, "profile")){
    // include "../lib/cartadder.php";
    include "sectionslider.php";
      return 0;
  }
  else if(!str_contains($uri, "index")){
$newarray = array_chunk($books,3,TRUE);

  foreach ($newarray as $books) {
    include "../inc/sectionslider.php";
}
  }
  else{ 
    include "sectionslider.php";
  }
?>