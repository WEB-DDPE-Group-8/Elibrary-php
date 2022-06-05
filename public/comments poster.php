<link rel="stylesheet" href="../css/comments2.css">
<div class="comments">

<h2>Leave a comment</h2>

<form class="comments__form" action="comments poster.php" method="POST">
  <?php 
  
  if(isset($_POST["submit"]))
{
  if(!isset($_SESSION["loggedin"]) )
  {
  header("location:login.php");
  } 
  include "../config/dbconfig.php";

  $Content = mysqli_real_escape_string($db,$_POST["author"]);
  $UserID = $_SESSION["UserID"];
  $BookID = $Id;
  $Reaction=2;

  $sql = "INSERT into reviews (UserID,BookID,Content,reaction) values ( $UserID,$BookID,'$Content',$Reaction)";

  $db->query($sql);
}
  ?>
  <div class="comments__form-info">
  <div class="comments__form-text">
    
    <div class="comments__form-field">
      <textarea id="comments__form-label-text" name="author" placeholder="Express your thoughts" type="text" class="comments__form-input comments__form-textarea"></textarea>
      <label class="comments__form-label" for="comments__form-label-text">
        <span class="comments__form-label-text">Express your thoughts</span>
      </label>
    </div>

  </div>
 <input name="submit" type="submit" id="submit" class="comments__form-submit" value="Post Comment">
</form>
</div>

</div>
<script src="../js/comments2.js"></script>