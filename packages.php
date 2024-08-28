<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="نحن نمتلك أسلوب في تصميم وتنفيذ الستائر بشتي تفاصيلها وأنواعها يجعلنا قادرين علي مواكبة تصميماتك المطلوبه ولدينا الكثير من الخيرة في هذا المجال وهذا ما يجعل ستائرنا رائعة في تنفيذها">

    <title>تصميمات</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrapmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/newstyle.css">


    <style>
        .about .form {
            margin-bottom: 10rem;
            flex: 1 1 41rem;
        }








        .about .form .review-form {

            padding: 2rem;
            width: 100%;
            background-color: var(--light-bg);
            border-radius: 2rem;
        }

        .about .form .review-form .flex {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }



        .about .form .review-form .flex .inputBox {
            flex: 1 1 41rem;
            text-align: right;
        }


        .about .form .review-form .flex .inputBox select {
            width: 100%;
            padding: 1.2rem 1.4rem;
            font-size: 1.6rem;
            color: var(--light-black);
            text-transform: none;
            margin-top: 1.5rem;
            border: var(--border);
            border-radius: 2rem;
            background-color: transparent;
        }




        .about .form .review-form .flex .inputBox select option {
            background-color: var(--black);
            color: var(--light-white);
            border-radius: 5rem;
            border-style: solid;
            font-size: 2.5rem;
        }



        .about .form .review-form .flex .inputBox span {
            font-size: 1.5rem;
            color: var(--light-black);
        }













        .packages-pop .box-container .box {
            /* background-color: rgb(61, 4, 4); */
            border-radius: 2rem;

            background-color: rgb(255, 255, 255);
            border-style: solid;

        }



        .packages-pop .box-container .box .content h3 {
            font-size: 2.5rem;
            color: var(--black);
        }

        .packages-pop .box-container .box .content p {
            font-size: 1.5rem;
            color: var(--light-black);
            line-height: 2;
            padding: 1rem 0;
        }


        .packages-pop .box-container .box .content .box-buttons .btn {
            width: 50%;

            position: relative;
            right: 20%;
            margin-top: 1rem;
            background-color: rgb(250, 127, 12);
            color: rgb(255, 255, 255);
            transition: 0.5s;

        }

        .packages-pop .box-container .box .image {
            border-top: solid;
            border-top-left-radius: 1.5rem;
            border-top-right-radius: 1.5rem;
        }

        .packages-pop .box-container .box .image img {
            width: 30rem;

            /* padding-left: 10rem; */
        }






        .packages-pop .box-container .box .content .box-buttons .btn:hover {
            transition: 0.5s;

            transform: scale(1.1);
            background-color: var(--black);
            color: whitesmoke;

        }

        .carousel .carousel-inner .carousel-item {

            text-align: center;
            align-items: center;
            align-content: center;

        }

        .carousel .carousel-inner .carousel-item img {
            height: 50rem;
            width: 50rem;

        }


        .dropdown {
            text-align: center;
        }

        .dropdown .btn{
            width: 70%;
            background-color: black;
            color: whitesmoke;
        }

        .dropdown ul{
            width: 70%;
            border-radius: 2rem;
        }

        
        .dropdown ul li a{
            border-radius: 2rem;
        }

        .dropdown ul li a{
            text-align: right;
            font-size: 1.9rem;
        }


        @media(max-width:768px) {
            .menu-packages {
                display: none;
            }

            .dropdown {
                display: block;
            }


        }

        .footer .box-container .box a {
        text-decoration: none;
    }

    </style>


</head>

<body>

    <div class="up">


        <section class="header" style="background-color:rgba(255, 255, 255, 0.834);padding-bottom: 1rem;box-shadow: var(--box-shadow);">
        <a href="home.html" class="logo"
                style="text-align: right; font-family: Verdana, Geneva, Tahoma, sans-serif; text-decoration: none; font-size: 3rem;font-weight: 600;color: var(--main-color);"
                dir="rtl" lang="ar">ام آيــــه</a>

            <a href="home.html" class="logo"></a>

            <nav class="navbar" dir="rtl" lang="ar">
                <a href="login.php" style="padding-bottom: 1rem; padding-top: 1rem;" id="sign-in-btn">تسجيل الدخول</a>
                <a href="signup.php" style="padding-bottom: 1rem; padding-top: 1rem;background-color: black;" id="sign-in-btn">تسجيل حساب</a>


                <a href="index.php">الرئيسية</a>
                <a href="deletee.php?departmentgft_id=<?php echo '-5'; ?> &departmentgft_name=<?php echo 'كل الستائر'; ?>">تصميماتنا</a>
                <!-- <a href="package.html" >عن المعرض</a> -->
                <a href="#footer">تواصل معنا</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"  style="color: black;"></div>
        </section>


    </div>




    <!-- style="background-color: whitesmoke;" -->
    <section class="about">






        <div class="image">
            <div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="4000">
                <!-- Set data-interval to 3000 milliseconds for a 3-second interval -->
                <!-- Indicators -->


                <?php
                $conn = mysqli_connect("localhost", "root", "", "shopdata");

               



                        // $table1prcolorcon = mysqli_query($conn, "SELECT * FROM product_colors WHERE p_id='$table1prid'");





                ?>
                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/12.png" alt="Image 1" class="carousel-img">
                                <div class="carousel-caption">

                                    <h3></h3>
                                    <p></p>
                                </div>
                            </div>




                            <?php


                            $query6 = "SELECT filename FROM product_images";
                            $result6 = $conn->query($query6);
                            if ($result6->num_rows > 0) {
                                while ($optionData6 = $result6->fetch_assoc()) {
                                    $table1primagee = $optionData6['filename'];


                            ?>

                                    <div class="carousel-item">

                                        <img src="image_store/<?php echo $table1primagee; ?>" alt="ُError" class="carousel-img">

                                        <div class="carousel-caption">

                                            <h3></h3>
                                            <p></p>
                                        </div>


                                    </div>

                            <?php
                                }
                            }
                            ?>

                        </div>





            </div>

        </div>


    </section>











    <div class="dropdown" lang="ar" dir="rtl">
        <button style="font-size: 2.5rem;" lang="ar" dir="rtl" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            أقسام الستائر
        </button>
        <ul class="dropdown-menu"lang="ar" dir="rtl">
        <li><a  lang="ar" dir="rtl"   href="deletee.php?departmentgft_id=<?php echo '-5'; ?> &departmentgft_name=<?php echo 'كل الستائر'; ?>#allproductsdisplay" class="dropdown-item" href="#">كل الستائر</a></li>

        <?php
                $conn = mysqli_connect("localhost", "root", "", "shopdata");

                $querydepsmenu = "SELECT d_name,d_id FROM departments";
                $resultdepsmenu = $conn->query($querydepsmenu);
                if ($resultdepsmenu->num_rows > 0) {
                    while ($optionDatadepsmenu = $resultdepsmenu->fetch_assoc()) {
                        $depsmenuid = $optionDatadepsmenu['d_id'];
                        $depsmenuname = $optionDatadepsmenu['d_name'];

?>
                        <li lang="ar" dir="rtl"><a   lang="ar" dir="rtl"  href="deletee.php?departmentgft_id= <?php echo $depsmenuid; ?> &departmentgft_name=<?php echo $depsmenuname ; ?> #allproductsdisplay " class="dropdown-item" href="#"><?php echo$depsmenuname;?></a></li>


<?php


                    }}
                ?>
        </ul>
    </div>
















    
        <section  class="packages" style="background-color: #fffffff5;">
        <?php $oolrf=$_GET['oolfde']; 
                  $oolrn=$_GET['oolfdn'] 
            ?>   
        <img src="images/White Desk Background Texture Scandinavian Style.jfif" alt="" style=" padding-bottom: 15rem;width: 100%;height: 60rem;opacity: 0.2;">
            <h1 class="heading-title" style="text-align: center;position: relative; bottom: 40rem; color: rgb(41, 52, 102);  font-family:monospace; font-size: 10rem;font-weight:700;" dir="rtl" lang="ar"><?php echo $oolrn; ?></h1>

            <div id="allproductsdisplay" class="box-container">


            
           



                <?php
                $conn = mysqli_connect("localhost", "root", "", "shopdata");

                if($oolrf == "-5"){
                    $query15 = "SELECT * FROM products";
                }
                else{
                    $query15 = "SELECT * FROM products WHERE d_id = '$oolrf'";
                }

                
                $result15 = $conn->query($query15);
                if ($result15->num_rows > 0) {
                    while ($optionData15 = $result15->fetch_assoc()) {
                        $table1prid = $optionData15['p_id'];
                        $table1prname = $optionData15['p_name'];
                        $table1prdescribtion = $optionData15['p_describtion'];



                        // $table1prcolorcon = mysqli_query($conn, "SELECT * FROM product_colors WHERE p_id='$table1prid'");





                ?>
                        <div class="box">

                            <div class="image">
                                <div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="4000">
                                    <!-- Set data-interval to 3000 milliseconds for a 3-second interval -->
                                    <!-- Indicators -->


                                    <!-- Slides -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images/12.png" alt="Image 1" class="carousel-img">
                                            <div class="carousel-caption">

                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>




                                        <?php


                                        $query6 = "SELECT filename FROM product_images WHERE p_id='$table1prid'";
                                        $result6 = $conn->query($query6);
                                        if ($result6->num_rows > 0) {
                                            while ($optionData6 = $result6->fetch_assoc()) {
                                                $table1primagee = $optionData6['filename'];


                                        ?>

                                                <div class="carousel-item">

                                                    <img src="image_store/<?php echo $table1primagee; ?>" alt="ُError" class="carousel-img">

                                                    <div class="carousel-caption">

                                                        <h3></h3>
                                                        <p></p>
                                                    </div>


                                                </div>

                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>





                                </div>

                            </div>


                            <div class="content">
                                <hr>
                                <p style="word-wrap: break-word;" lang="ar" dir="rtl"><?php echo $table1prdescribtion; ?></p>
                                <div class="box-buttons">
                                    <a href="#" class="btn">طلب </a>
                                    <!-- <a  href="#" class="btn menu"><i  class="bi bi-search"></i></a> -->
                                </div>
                            </div>
                        </div>

                <?php }
                } ?>





















                <!-- <a href="" class="btn">عرض أكثر</a> -->


            </div>
        </section>




    <section class="review">

        <div class="image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7164.931446597134!2d34.280304606420906!3d26.11635380000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x144cc5060dfb91b3%3A0x8cf9daff168656ff!2z2YjYrdiv2Kkg2LXYrdipINin2YTYp9iz2LHYqSDYp9mE2KfZhdmE!5e0!3m2!1sar!2seg!4v1692322409934!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

</html>