<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include '../config/dbconfig.php';

?>
    <link rel="stylesheet" href="../css/cart final.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../multimedia/logo.png" type="image/icon type">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".del").click(function () {
                var id = $(this).data("id");
                console.log(id);

                $.ajax({
                    url: '/html/lib/cartfunctions.php',
                    type: 'GET',
                    data: {
                        remove: id
                    },
                    success: function () {
                        $('div#' + id + '').css('display', 'none');
                        alert("Item removed from cart");
                        // location.href="/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf"
                    },
                    error: function (e) {
                        $('div#' + id + '').fadeOut('slow');
                        $('div#' + id + '').css('display', 'none');

                    }
                })
            })

            $(".dwnld").click(function () {
                var id = $(this).data("id");
                var url = $(this).data("url");

                // $(this).css('display','none');

                $.ajax({
                    url: '/html/lib/cartfunctions.php',
                    type: 'GET',
                    data: {
                        addto: id
                    },
                    success: function () {
                        location.href = url;
                        $('div#' + id + '').css('display', 'none');
                        // alert("Item removed from cart");
                    },
                    error: function (e) {
                        // $('div#'+id+'').css('display','none');
                        // $('div#'+id+'').fadeOut('slow');
                        alert(" error Item removing from cart");
                    }
                })
            })
        })
    </script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="../multimedia/resources/logo/logo.png" />

    <title>Cart</title>
</head>

<body background="resources/banner-bg.jpg">
    <!-- header -->
    <?php include("../inc/nav_bar.php");

    ?>
    <!-- final cart -->
    <?php 

$select_cart = mysqli_query($db, "SELECT books.Cover,books.Book,books.Title,books.Author,cart.UserID,cart.BookID,cart.Price FROM cart INNER JOIN BOOKS ON books.BookID = cart.BookID WHERE CART.UserID =$_SESSION[UserID]");
$grand_total = 0;
?>

    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Wish List</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">
                            <p><?php echo mysqli_num_rows($select_cart)?> Items<p>
                        </div>
                    </div>
                </div>

                <?php 
if(mysqli_num_rows($select_cart) > 0){
   while($fetch_cart = mysqli_fetch_assoc($select_cart)){
?>
                <div id=<?php echo $fetch_cart['BookID'] ?> class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <?php
                        if($fetch_cart["BookID"]<=43){
                        ?>
                        <div class="col-2"><img class="img-fluid"
                                src='../image/<?php echo $fetch_cart['BookID']; ?>.png'></div>
                        <?php
                        }else{
                        ?>
                        <div class="col-2"><img class="img-fluid" src='<?php echo $fetch_cart["Cover"];?>'></div>
                        <?php
                        }
                        ?>
                        <div class="col">
                            <div class="row text-muted"><?php echo $fetch_cart['Title']; ?></div>
                            <div class="row">By <?php echo $fetch_cart['Author']; ?></div>
                        </div>
                        <div class="col">
                            <button class="dwnld btn" data-id="<?php echo $fetch_cart['BookID']?>"
                                data-url="<?php echo $fetch_cart['Book']?>">Download </button>
                        </div>
                        <div class="col"> <?php 
                        
                        ?> <span class="close" style="color:red"> <button data-id=<?php echo $fetch_cart['BookID']; ?>
                                    class="fas fa-trash del" style="color:red"></button> </span></div>
                    </div>
                </div>
                <?php 
   }}
   else{
       ?>

                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"></div>
                        <div class="col">
                            <div class="row text-muted"></div>
                            <div class="row"></div>
                        </div>
                        <div class="col">
                            <P>No items found in Wishlist </P>
                        </div>
                        <div class="col"> <span class="close" style="color:red"> <a> </a></span></div>
                    </div>
                </div>
                <?php
   }
?>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">ITEMS <?php   ?></div>
                    <div class="col text-right"><?php echo mysqli_num_rows($select_cart) ?></div>
                </div>
                <!-- <form>
                      
                        <p>GIVE CODE</p>
                        <input id="code" placeholder="Enter your code">
                    </form> -->
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <!-- <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&dollar;<?php echo "count" ?></div> -->
                </div>
                <!-- <button class="btn">CHECKOUT</button> -->
            </div>
        </div>

    </div>

    <!-- final cart -->
    <?php include("../inc/footer.php") ?>
</body>

</html>