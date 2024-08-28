<?php
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="نحن نمتلك أسلوب في تصميم وتنفيذ الستائر بشتي تفاصيلها وأنواعها يجعلنا قادرين علي مواكبة تصميماتك المطلوبه ولدينا الكثير من الخيرة في هذا المجال وهذا ما يجعل ستائرنا رائعة في تنفيذها">

    <title>تسجيل دخول</title>

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrapmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/newstyle.css">


    <style>


    
    .review .form .review-form{
    
    padding: 15rem;
    width: 60%;
    background-color: whitesmoke;
    opacity: 0.8;
    /* filter: blur(8px);
  -webkit-filter: blur(8px); */
  margin: auto;
  border-radius: 2rem;

}


    .review .form .review-form .flex{
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    gap: 2rem;
}

.review  .form .review-form .flex .inputBox{
    flex: 1 1 10rem;
}


.review  .form .review-form .flex .inputBox input{
    width:100%;
    padding: 1.2rem 1.4rem;
    font-size:1.6rem;
    color:var(--light-black);
    text-transform: none;
    margin-top: 1.5rem;
    border: none;
    border-bottom:var(--border);
    background-color: transparent;
    border-radius: 1rem;
    opacity: 1;
    /* filter: blur(0px);
  -webkit-filter: blur(0px); */
}






















/* media queries */

@media(max-width:1200px){
    .review .form .review-form{

    width: 70%;
}

#keysubmit{
    margin-left: 10rem;
}
 
}

@media(max-width:991px){

    .review .form .review-form{

width: 80%;
}
    
        
        
}

@media(max-width:768px){

    #keysubmit{
    margin-left: 20rem;
}
    

    .review .form .review-form{

width: 100%;
}

.review  .form .review-form .flex .inputBox input{
 width: 100%;
}


}


@media(max-width:575px){

    #keysubmit{
    margin-left: 4rem;
}

    .review  .form .review-form .flex .inputBox input{
        width: 90%;
    }

    .review  .form .review-form .flex{
        margin-left: -15rem;
        padding-left: 5rem;
        
    }

    .review  .form .review-form{
        padding-right: 1rem;
    }

}


@media(max-width:450px){

    #keysubmit{
    margin-left: 6rem;
}

    .review  .form .review-form .flex .inputBox input{
 width: 100%;
}

.review  .form .review-form{
 padding-right: 2rem;
}

.review  .form .review-form .flex{
    margin-right: 10rem;
}

}

@media(max-width:432px){
    #keysubmit{
    margin-left: 5rem;
}

.review  .form .review-form .flex .inputBox input{
width: 320%;
}

.review  .form .review-form{
    padding-right: 1rem;
}

.review  .form .review-form .flex{
    margin-left: 8rem;
    padding-right: 1rem;
}

}



@media(max-width:424px){

.review  .form .review-form .flex .inputBox input{
width: 290%;
margin: auto;
}


}



@media(max-width:384px){

.review  .form .review-form .flex .inputBox input{
width: 230%;
}

/*  .review  .form .review-form .flex {
 margin-right: 7rem;
 background-color: red;
 width: 50%;
} */

.review  .form .review-form{
    margin-right: 1rem;
    padding-left: 10rem;
    
} 

}


@media(max-width:355px){
    .review  .form .review-form .flex .inputBox input{
width: 250%;
position: relative;
right: -5rem;
}

.review  .form .review-form .flex .inputBox span{
position: relative;
right: -5rem;
}


.review  .form .review-form{

    padding-left: 1rem;
    
} 
}


 @media(max-width:310px){
    
} 



.footer .box-container .box a {
        text-decoration: none;
    }

    </style>

   
</head>

<header>
<body style="background: url(images/pexels-татьяна-чернышова🍒-11849111.jpg);background-size: cover;background-repeat: no-repeat;">


    <div class="up" >
     

        <section class="header" style="background-color:rgba(255, 255, 255, 0.834);padding-bottom: 1rem;box-shadow: var(--box-shadow);" >
        
        <a href="home.html" class="logo" style="text-align: right; font-family: Verdana, Geneva, Tahoma, sans-serif; text-decoration: none; font-size: 3rem;font-weight: 600;color: var(--main-color);" dir="rtl" lang="ar">ام آيــــه</a>
            
        
            <nav class="navbar" dir="rtl" lang="ar" >
                <a href="signup.php" style="padding-bottom: 1rem; padding-top: 1rem;background-color: black;" id="sign-in-btn">تسجيل حساب</a>

            
            <a href="index.php" >الرئيسية</a>
            <a href="deletee.php?departmentgft_id=<?php echo '-5'; ?> &departmentgft_name=<?php echo 'كل الستائر'; ?>">تصميماتنا</a>
            <a href="#footer" >تواصل معنا</a>
            
            </nav>
        
            <div id="menu-btn" class="fas fa-bars"  style="color: black;"></div>
        </section>


</div>





















<section class="review">

    <div class="form">
    <form   method="POST" action=""  id="formidd" class="review-form" enctype="multipart/form-data">
        <h2 style="text-align: center; margin-bottom: 10rem; color: #222;" class="heading-title">تسجيل دخول</h2>
        <div class="flex"dir="rtl" lang="ar">
         <div class="inputBox">
             <span>الرقم الخاص</span>
             <input type="text" placeholder="ادخل رقم التعريف الخاص" name="idfield"  dir="rtl" lang="ar"pattern="[0-9A-Z]+" required>
         </div>
 
         <div class="inputBox">
             <span>الرقم السري</span>
             <input type="password" placeholder="ادخل الرقم السري" name="passwordfield" dir="rtl" lang="ar" required>
         </div>

 
        </div>
 
        <input id="keysubmit" type="submit" value="دخول" class="btn" name="login_button"dir="rtl" lang="ar" >
     </form>
    </div>


  

</section>








<section class="footer" id="footer" dir="rtl" lang="ar">

<div class="box-container">
    <div class="box">
        <h3>روابط سريعة</h3>
        <a href="index.php"> <i class="fas fa-angle-left"></i> الرئيسية</a>
        <a href="packages.php"> <i class="fas fa-angle-left"></i> تصميماتنا</a>
        <a href="signup.php"> <i class="fas fa-angle-left"></i> تسجيل حساب</a>

    </div>



    <div class="box">
        <h3>معلومات الإتصال</h3>
        <a href="tel:+20 106-499-2414" title="اتصل بنا"> <i class="fas fa-phone"></i> 106-499-2414 20+ </a>
        <a href="https://wa.me/201064992414"> <i  class="fab fa-whatsapp"></i>  106-499-2414 20+  </a>
        <a href="#"> <i class="fas fa-map"></i> البحر الاحمر - القصير - بجوار وحده الامل</a>
    </div>

    <div class="box">
        <h3>تابعنا</h3>
        <a href="https://www.facebook.com/profile.php?id=100063726921085&mibextid=ZbWKwL" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href=""> <i class="fab fa-instagram"></i> instagram </a>



    </div>
</div>

<div class="credit"> created by <span> zeyad abosetta</span> | all rights reserved!</div>

</section>



<script src="js/script.js"></script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</header>

</html>





<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopdata";


// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn === false) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the id and password from the form
$id = $_POST["idfield"];
$password = $_POST["passwordfield"];

// Check if the id and password are valid
$sql = "SELECT * FROM users WHERE u_id='$id' AND u_password='$password' AND u_flag='1'";
$result = mysqli_query($conn, $sql);

// If the user exists, log them in
if (mysqli_num_rows($result) > 0) {
  // Get the user data
  $row = mysqli_fetch_assoc($result);

  // Set the session variables
  $idg = $row["u_id"];
  $passwordg = $row["u_name"];

  // Redirect the user to the home page

  header("Location: add.php?idgo=$idg &passwordgo=$passwordg");
  ob_end_flush();




  
} 
//else {
//   // The user does not exist, so show an error message
//   echo "The username or password is incorrect.";
// }

// Close the connection to the database
mysqli_close($conn);

?>
