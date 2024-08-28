<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="نحن نمتلك أسلوب في تصميم وتنفيذ الستائر بشتي تفاصيلها وأنواعها يجعلنا قادرين علي مواكبة تصميماتك المطلوبه ولدينا الكثير من الخيرة في هذا المجال وهذا ما يجعل ستائرنا رائعة في تنفيذها">

    <title>إدارة</title>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css5"/> -->
    <link rel="stylesheet" href="css/swiper-bundlemin.css" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrapmin.css">
    <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/newstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
        .about {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 3rem;
        }

        .about .image {
            flex: 1 1 41rem;
        }


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


        .about .form .review-form .flex .inputBox input,
        select {
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

        .about .form .review-form .flex .inputBox textarea {
            width: 100%;
            padding: 1.2rem 1.4rem;
            font-size: 1.6rem;
            color: var(--light-black);
            text-transform: none;
            margin-top: 1.5rem;
            border: var(--border);
            border-radius: 2rem;
            background-color: transparent;
            resize: none;
        }


        .about .form .review-form .flex .inputBox select option {
            background-color: var(--black);
            color: var(--light-white);
            border-radius: 5rem;
            border-style: solid;
            font-size: 2.5rem;
        }


        .about .form .review-form .flex .inputBox textarea:focus {
            background: var(--black);
            color: var(--white);
        }


        .about .form .review-form .flex .inputBox textarea:focus::placeholder {
            color: var(--light-white);
        }

        .about .form .review-form .flex .inputBox input:focus {
            background: var(--black);
            color: var(--white);
        }


        .about .form .review-form .flex .inputBox input:focus::placeholder {
            color: var(--light-white);
        }

        .about .form .review-form .flex .inputBox span {
            font-size: 1.5rem;
            color: var(--light-black);
        }

        .about .form .review-form .btn {
            margin-top: 2rem;
        }




        /*------------------Image Upload And Container-----------------------------*/

        .img-area {
            position: relative;
            width: 100%;
            height: 240px;
            background: rgb(216, 216, 216);
            margin-bottom: 30px;
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .img-area .icon {
            font-size: 100px;
        }

        .img-area h3 {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .img-area p {
            color: #999;
        }

        .img-area p span {
            font-weight: 600;
        }

        .img-area img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            z-index: 100;
        }

        .img-area::before {
            content: attr(data-img);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .5);
            color: #fff;
            font-weight: 500;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            pointer-events: none;
            opacity: 0;
            transition: all .3s ease;
            z-index: 200;
        }

        .img-area.active:hover::before {
            opacity: 1;
        }

        .select-image {
            display: block;
            width: 100%;
            padding: 16px 0;
            border-radius: 15px;
            background: var(--main-color);
            color: #fff;
            font-weight: 500;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: all .3s ease;
        }

        .select-image:hover {
            background: rgb(94, 94, 94);
        }



        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        table td,
        table th {
            border: 4px solid #ccc;
        }



        .about .content table tr th {
            width: 40rem;
            font-size: 2rem;
            text-transform: uppercase;
        }

        .about .content table tr td {
            font-size: 1.5rem;
        }

        .about .content table tr td a {
            background-color: red;
            border-color: red;
            color: white;
            margin: auto;
            height: 4.5rem;
        }


        .about .content table tr td a i {
            width: 1rem;
            text-align: center;

        }

        .about .content table tr td img {
            width: 10rem;
            height: 10rem;
        }

        .about .content table tr td img:hover {
            transform: scale(5);
        }





        @media(max-width:400px) {

            table {
                margin: auto;
            }


            .about .content table tr td a i {
                padding: 0.2rem;
            }

        }

        @media(max-width:395px) {

            .about .content table tr th {
                font-size: 1.5rem;
            }

            .about .content table tr td {
                font-size: 1rem;
            }


            .about .content table tr td a i {
                padding: 0.5px;
            }

        }


        @media(max-width:380px) {
            .about .content table tr td a i {
                width: 2px;
            }
        }

        @media(max-width:340px) {

            .about .content table tr th {
                font-size: 1rem;
            }

            .about .content table tr td {
                font-size: 0.7rem;
            }

            .about .content table tr td a i {
                width: 50%;
            }

        }


        @media(max-width:285px) {

            .about .content table tr th {
                font-size: 0.7rem;
            }

            .about .content table tr td {
                font-size: 0.6rem;
            }

        }


        .about .dropdown .dropdown-menu li button:hover {
            border-radius: 1rem;
        }


        #myInput {
            background-image: url('/css/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 50%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 12px;
            /* Add some space below the input */
        }







        
#users-menu,#control-menu{
    background-color: var(--main-color);
    color: white;
    border-radius: 2rem;
    width: 14rem;
    padding: 0.4rem;
    text-align: center;
    font-size: 1.8rem;
    font-weight: normal;
}

#users-menu:hover,#control-menu:hover{
    cursor: pointer;
    transition: 0.5s;

    color: white;
    background-color: rgb(0, 0, 0);
    
    border: none;

}

.footer .box-container .box a {
        text-decoration: none;
    }

    </style>


</head>

<body>

    <div class="up">


        <section class="header" style="background-color:rgba(255, 255, 255, 0.834);padding-bottom: 1rem;box-shadow: 0 .5rem 1rem rgba(255, 255, 255, 0.871);">

            <a href="home.html" class="logo" style="text-align: right; font-family: Verdana, Geneva, Tahoma, sans-serif; text-decoration: none; font-size: 3rem;font-weight: 600;color: var(--main-color);" dir="rtl" lang="ar">ام آيــــه</a>


            <nav class="navbar" dir="rtl" lang="ar">
                <a onclick="menublocks('Allusers')" style="padding-bottom: 1rem; padding-top: 1rem; width: 6rem;font-size: 2rem;" id="users-menu"><i class="bi bi-person-circle"></i></a>
                <a onclick="menublocks('controlpage')" style="padding-bottom: 1rem; padding-top: 1rem; width: 6rem;font-size: 2rem;" id="control-menu"><i class="bi bi-gear-fill"></i></a>

                <a href="index.php" style="padding-bottom: 1rem; padding-top: 1rem;" id="sign-out-btn">تسجيل خروج</a>

                <a style="padding-bottom: 1rem; padding-top: 1rem;" id="sign-in-btn">تسجيل حساب</a>

                <?php

                $idfielda = $_GET['idgo'];
                $idfielda2 = $idfielda;
                $conn = mysqli_connect("localhost", "root", "", "shopdata");

                $query4 = "SELECT u_name,u_super_id,u_job FROM users WHERE u_id='$idfielda2'";
                $result4 = $conn->query($query4);
                if ($result4->num_rows > 0) {
                    while ($optionData4 = $result4->fetch_assoc()) {
                        $usernamfe = $optionData4['u_name'];
                        $usersuperifd = $optionData4['u_super_id'];
                        $userjofb = $optionData4['u_job'];

                        if($userjofb == "إداري" && $idfielda2 == $usersuperifd){
                            $usermenuavailbility = "usersavailable";
                        }
                        else{
                            $usermenuavailbility = "usersnotavailable";
                        }
                        
                ?>

                        <a style="cursor: auto;border: none;padding: none;" href="#"><?php echo $usernamfe; ?></a>
                <?php
                    }
                }

                ?>

                <!-- <a href="index.html">إضافة قسم</a>
                <a href="meals.html">جميع الستائر</a>
                <a href="package.html">جميع الأقسام</a> -->

                <!-- <div class="dropdown" style="    margin-bottom: 3rem;" lang="ar" dir="rtl">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                صفحات الإدارة </button>
            <ul class="dropdown-menu" style="text-align: right; font-size: 2rem;border-radius: 2rem;width: 40rem;">
                <li><button class="dropdown-item" href="#">إضافة جديد</button></li>
                <li><button class="dropdown-item" href="#">إضافة صور إلي منتج</button></li>
                <li><button class="dropdown-item" href="#">إضافة قسم</button></li>
                <li><button class="dropdown-item" href="#">صور المنتجات</button></li>
                <li><button class="dropdown-item" href="#">الأقسام</button></li>
                <li><button class="dropdown-item" href="#">المنتجات الأكثر شيوعاً</button></li>
                <li><button class="dropdown-item" href="#">المنتجات</button></li>




            </ul>
        </div> -->

            </nav>

            <div id="menu-btn" class="fas fa-bars"  style="color: black;"></div>
        </section>





    </div>





    <section id="controlpage" class="about" style="background-color: rgb(32, 29, 61);justify-content: center; padding-top: 14rem;">


        <div class="dropdown" lang="ar" dir="rtl">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                صفحات الإدارة </button>
            <ul class="dropdown-menu" style="text-align: right; font-size: 2rem;border-radius: 2rem;width: 30rem;">
                <li><button onclick="menublocks('Addnewproduct')" class="dropdown-item" href="#">إضافة جديد</button></li>
                <li><button onclick="menublocks('Addnewpicture')" class="dropdown-item" href="#">إضافة صور إلي منتج</button></li>
                <li><button onclick="menublocks('Adddepartment')" class="dropdown-item" href="#">إضافة قسم</button></li>
                <li><button onclick="menublocks('allpictures')" class="dropdown-item" href="#">صور المنتجات</button></li>
                <li><button onclick="menublocks('alldepartments')" class="dropdown-item" href="#">الأقسام</button></li>
                <li><button onclick="menublocks('allpopularproducts')" class="dropdown-item" href="#">المنتجات الأكثر شيوعاً</button></li>
                <li><button onclick="menublocks('allproducts')" class="dropdown-item" href="#">المنتجات</button></li>
                <li><button onclick="menublocks('addtopopularproducts')" class="dropdown-item" href="#">إضافة إلي قائمة الأكثر شيوعاً</button></li>





            </ul>
        </div>
    </section>




    <section id="Allusers" class="about" style="background-color: whitesmoke;" lang="ar" dir="rtl">

    <div class="form" >
            <h2 class="heading-title" style="text-align: center;color: #222;" lang="ar" dir="rtl">تفعيل مستخدم</h2>

            <form style="background-color: #222;" action="" method="POST" class="review-form" >

                <div class="flex">
                    <div class="inputBox" >
                        <span lang="ar" dir="rtl">اختر مستخدم</span>
                        <select style="border-color: #fff;"  name="updateid" lang="ar" dir="rtl" required>
                            <option value="">قم بإختيار الرقم الشخصي للمستخدم</option>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "shopdata");

                            $queryflag = "SELECT u_name,u_id FROM users WHERE u_flag='0'";
                            $resultflag = $conn->query($queryflag);
                            if ($resultflag->num_rows > 0) {
                                while ($optionDataflag = $resultflag->fetch_assoc()) {
                                    $userselectorname = $optionDataflag['u_name'];
                                    $userselectorid = $optionDataflag['u_id'];

                            ?>
                                    <option> <?php echo $userselectorid; ?> </option>
                            <?php
                                }
                            }
                            ?>

                        </select>
                    </div>

                    <div class="inputBox">
                        <span lang="ar" dir="rtl">اختر وظيفة</span>
                        <select style="border-color: #fff;"  name="updatejobb" lang="ar" dir="rtl" required>
                        <option value="">قم بإختيار وظيفة</option>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "shopdata");

                            $queryjob = "SELECT j_name FROM jobs";
                            $resultjob = $conn->query($queryjob);
                            if ($resultjob->num_rows > 0) {
                                while ($optionDatajob= $resultjob->fetch_assoc()) {
                                    $userselectorjobname = $optionDatajob['j_name'];

                            ?>
                                    <option> <?php echo $userselectorjobname; ?> </option>
                            <?php
                                }
                            }
                            ?>


                        </select>
                    </div>


                </div>


                <div class="inputbox" style="text-align: left;">
                    <input lang="ar" dir="rtl" type="submit" value="إضافة" class="btn" name="updateuserbutton">

                </div>


            </form>
        </div>




        <div class="content">
            <h2 class="heading-title" style="text-align: center; color: black;">المستخدمين</h2>

            <?php $counter=1; ?>
            <table>
                <tr style="background-color: beige;">
                    <th>م</th>
                    <th>الرقم الوظيفي</th>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>الوظيفة</th>
                    <th>حالة الحساب</th>



                </tr>


              

                <tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "shopdata");

                    $queryusers = "SELECT u_id,u_name,u_mail,u_job,u_flag FROM users";
                    $resultusers = $conn->query($queryusers);
                    if ($resultusers->num_rows > 0) {
                        while ($optionDatausers = $resultusers->fetch_assoc()) {
                            $usertableid = $optionDatausers['u_id'];
                            $usertablename = $optionDatausers['u_name'];
                            $usertablemail = $optionDatausers['u_mail'];
                            $usertablejob = $optionDatausers['u_job'];
                            $usertableflag = $optionDatausers['u_flag'];


                    ?>
                            <td style="background-color: beige;"> <?php echo $counter;
                    $counter++;
                    ?></td>
                            <td><?php echo $usertableid; ?></td>
                            <td><?php echo $usertablename; ?></td>
                            <td><?php echo $usertablemail; ?></td>
                            <td><?php echo $usertablejob; ?></td>
                            <?php 
                            if($usertableflag == "0"){
                                ?><td style="color: red;"><?php echo "غير مفعل"; ?></td>
                                <?php
                            }
                            
                            else if($usertableflag == "1"){
                                ?>
                                <td style="color: green;"><?php echo "مفعل"; ?></td>
                                <?php
                            }
                            
                             ?>
                            






                </tr>
        <?php
                        }
                    }
        ?>





            </table>

        </div>

        <?php

// Create a global variable to store the MySQL connection
$conn = mysqli_connect("localhost", "root", "", "shopdata");

// Use the global variable in both PHP blocks
if (isset($_POST['updateuserbutton'])) {

    $userupdatedid= $_POST['updateid'];
    $userupdatedjobb = $_POST['updatejobb'];

    if($userupdatedjobb == "إداري")
    {
        $usersuperid = $userupdatedid;
    }

    else if($userupdatedjobb == "موظف"){
        $usersuperid = $idfielda2;
    }

    $sqlupdateuser = "UPDATE users SET u_job='$userupdatedjobb',u_flag='1',u_super_id = '$usersuperid' WHERE u_id='$userupdatedid'";

    

    mysqli_query($conn, $sqlupdateuser);



    echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idfielda2 . '">';
}
$conn->close();
?>




    </section>









    <section id="Addnewproduct" class="about" style="background-color: rgb(32, 29, 61);">






        <div class="form">
            <h2 class="heading-title" style="text-align: center;color: #fff;" lang="ar" dir="rtl">إضافة جديد</h2>


            <form method="POST" class="review-form" enctype="multipart/form-data">

                <div class="flex">
                    <div class="inputBox">
                        <span lang="ar" dir="rtl">كود المنتج</span>
                        <input type="text" placeholder="ادخل كود المنتج" name="productcode" lang="ar" dir="rtl" required>

                    </div>

                    <div class="inputBox">
                        <span lang="ar" dir="rtl">اسم المنتج</span>
                        <input type="text" placeholder="ادخل اسم المنتج" name="productname" lang="ar" dir="rtl" required>
                    </div>

                    <div class="inputBox">
                        <span lang="ar" dir="rtl">اللون</span>
                        <input type="text" placeholder="ادخل لون المنتج" name="productcolor" lang="ar" dir="rtl" required>
                    </div>

                    <div class="inputBox">
                        <span lang="ar" dir="rtl">السعر</span>
                        <input type="text" placeholder="ادخل سعر المنتج" name="productprice" lang="ar" dir="rtl" required>
                    </div>


                    <div class="inputBox">
                        <span lang="ar" dir="rtl">القسم</span>
                        <select name="productdepartment" id="" lang="ar" dir="rtl">
                            <option value="">اختر قسم</option>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "shopdata");

                            $query = "SELECT d_name FROM departments";
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while ($optionData = $result->fetch_assoc()) {
                                    $departname = $optionData['d_name'];
                            ?>
                                    <option> <?php echo $departname; ?> </option>
                            <?php
                                }
                            }
                            ?>

                        </select>
                    </div>


                    <div class="inputBox">
                        <span lang="ar" dir="rtl">الوصف</span>

                        <textarea lang="ar" dir="rtl" class="form-control" id="review" name="productdescribtion" rows="5" minlength="72" maxlength="85" placeholder="ادخل وصف المنتج" required></textarea>
                    </div>

                    <div class="inputBox">
                        <input type="file" name="productimage1" id="file" accept="image/*">

                    </div>

                </div>

                <div class="inputbox" style="text-align: left;">
                    <input lang="ar" dir="rtl" type="submit" value="إضافة" class="btn" name="productadd1">

                </div>
            </form>

            <a href="" class="btn">جميع الستائر</a>
        </div>




        <div class="image form" style="background-color: white; padding: 3rem; border-radius: 2rem; padding-bottom: 4rem;">


            <!-- <input type="file" name="productimage1" id="file" accept="image/*" hidden > -->
            <div class="img-area" data-img="" style="height: 40rem;">
                <i class='bx bxs-cloud-upload icon'></i>
                <h3>Upload Image</h3>
                <p>Image size must be less than <span>2MB</span></p>
            </div>
            <!-- <button name="slctimage1" class="select-image" lang="ar" dir="rtl">اسحب صورة</button> -->

        </div>



    </section>








    <!-- rgb(32, 29, 61) -->
    <section id="Addnewpicture" class="about" style="background-color: rgb(32, 29, 61);">






        <div class="form">
            <h2 class="heading-title" style="text-align: center;color: #fff;" lang="ar" dir="rtl">إضافة إلي منتج موجود
                مسبقاً</h2>

            <form action="" method="POST" class="review-form" enctype="multipart/form-data">

                <div class="flex">
                    <div class="inputBox">
                        <span lang="ar" dir="rtl">اسم المنتج</span>
                        <select placeholder="ادخل اسم المنتج" name="productname2" lang="ar" dir="rtl" required>
                            <option value="">اختر منتج</option>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "shopdata");

                            $query3 = "SELECT p_name FROM products";
                            $result3 = $conn->query($query3);
                            if ($result3->num_rows > 0) {
                                while ($optionData3 = $result3->fetch_assoc()) {
                                    $productnam = $optionData3['p_name'];
                            ?>
                                    <option> <?php echo $productnam; ?> </option>
                            <?php
                                }
                            }
                            ?>

                        </select>
                    </div>

                    <div class="inputBox">
                        <span lang="ar" dir="rtl">اللون</span>
                        <input type="text" placeholder="ادخل لون المنتج" name="productcolor2" lang="ar" dir="rtl" required>
                    </div>



                    <div class="inputBox">
                        <span lang="ar" dir="rtl">الصورة</span>
                        <input type="file" id="file2" name="productimage2" accept="image/*">

                    </div>


                </div>


                <div class="inputbox" style="text-align: left;">
                    <input lang="ar" dir="rtl" type="submit" value="إضافة" class="btn" name="productadd2">

                </div>


            </form>
        </div>



        <div class="image form" style="background-color: white; padding: 3rem; border-radius: 2rem; padding-bottom: 4rem;">

            <div class="img-area img-area2" data-img="" style="height: 40rem;">
                <i class='bx bxs-cloud-upload icon'></i>
                <h3>Upload Image</h3>
                <p>Image size must be less than <span>3MB</span></p>
            </div>
        </div>



    </section>






    <section id="Adddepartment" class="about" style="background-color: rgb(32, 29, 61);">






        <div class="form">
            <h2 class="heading-title" style="text-align: center;color: #fff;" lang="ar" dir="rtl">إضافة قسم جديد</h2>


            <form action="" method="POST" class="review-form" style="width: 50%; margin: auto;">

                <div class="flex">
                    <div class="inputBox">
                        <span lang="ar" dir="rtl">اسم القسم</span>
                        <input type="text" placeholder="ادخل اسم القسم" name="departmentname" lang="ar" dir="rtl" required>
                        <span lang="ar" dir="rtl">اسم القسم يظهر في معرض الستائر للعملاء</span>

                    </div>





                    <div class="inputBox">
                        <span lang="ar" dir="rtl">الوصف</span>

                        <textarea lang="ar" dir="rtl" class="form-control" id="review" name="departmentdescribtion" rows="5" placeholder="ادخل وصف القسم (اختياري)"></textarea>
                        <span lang="ar" dir="rtl">الوصف فقط للتذكرة بمحتوي القسم ولا يظهر</span>

                    </div>

                </div>

                <div class="inputbox" style="text-align: left;">
                    <input lang="ar" dir="rtl" type="submit" value="إضافة" class="btn" name="departmentadd">

                </div>

            </form>

            <a href="" class="btn" style="margin-left: 45%;">جميع الستائر</a>

        </div>






    </section>











    <section id="allproducts" class="about" style="background-color: whitesmoke;" lang="ar" dir="rtl">






        <div class="content">
            <h2 class="heading-title" style="text-align: center; color: black;">جميع المنتجات</h2>

            <table id="myTable2">
                <tr>
                    <!-- <th>id</th>
                <th>name</th>
                <th>describtion</th>
                <th>color</th>
                <th>image</th>
                <th>Delete</th> -->

                    <th>الاسم</th>
                    <th>القسم</th>
                    <th>السعر</th>
                    <!-- <th>الوصف</th> -->
                    <th>اللون</th>
                    <!-- <th>الصورة</th> -->
                    <th>حذف</th>


                </tr>





                <?php
                $conn = mysqli_connect("localhost", "root", "", "shopdata");

                $query4 = "SELECT * FROM products";
                $result4 = $conn->query($query4);
                if ($result4->num_rows > 0) {
                    while ($optionData4 = $result4->fetch_assoc()) {
                        $table1prid = $optionData4['p_id'];
                        $table1prname = $optionData4['p_name'];
                        $table1prcost = $optionData4['p_price'];
                        $table1prdescribtion = $optionData4['p_describtion'];
                        $table1prdepartment = $optionData4['d_id'];

                        $table1prdepartmentcon = mysqli_query($conn, "SELECT * FROM departments WHERE d_id='$table1prdepartment'");

                        while ($row = mysqli_fetch_array($table1prdepartmentcon)) {


                            $table1prdepartmentcon1 = $row['d_name'];
                        }



                        // $table1prcolorcon = mysqli_query($conn, "SELECT * FROM product_colors WHERE p_id='$table1prid'");





                ?>

                        <tr>
                            <td><?php echo $table1prname . " - " . $table1prid; ?></td>
                            <td><?php echo $table1prdepartmentcon1; ?></td>
                            <td><?php echo $table1prcost . " EGP"; ?></td>
                            <td><?php


                                $query5 = "SELECT p_color FROM product_colors WHERE p_id='$table1prid'";
                                $result5 = $conn->query($query5);
                                if ($result5->num_rows > 0) {
                                    while ($optionData5 = $result5->fetch_assoc()) {
                                        $table1prcolor = $optionData5['p_color'];
                                        echo $table1prcolor;

                                ?>
                                        <br>
                                <?php
                                    }
                                }
                                ?>

                            </td>

                            <td style="padding-top: 1rem;padding-bottom: 1rem;width: 10%;"><a href="deletee.php?producttt_id=<?php echo $table1prid; ?>&delflag=0&idgo=<?php echo $idfielda2; ?>" class="btn"><i class="bi bi-trash"></i></a>
                            </td>




                        </tr>
                <?php
                    }
                }
                ?>


            </table>

        </div>






    </section>





    <section id="allpictures" class="about" style="background-color: whitesmoke;" lang="ar" dir="rtl">






        <div class="content">
            <h2 class="heading-title" style="text-align: center; color: black;">صور المنتجات</h2>
            <input type="text" id="myInput" onkeyup="myFunction()" lang="ar" dir="rtl" placeholder="ادخل اسم المنتج للبحث...">

            <table id="myTable1">
                <tr>
                    <!-- <th>id</th>
                <th>name</th>
                <th>describtion</th>
                <th>color</th>
                <th>image</th>
                <th>Delete</th> -->

                    <th>رقم</th>
                    <th>الصورة</th>
                    <th>حذف</th>


                </tr>


                <?php
                $conn = mysqli_connect("localhost", "root", "", "shopdata");

                $query7 = "SELECT * FROM product_images";
                $result7 = $conn->query($query7);
                if ($result7->num_rows > 0) {
                    while ($optionData7 = $result7->fetch_assoc()) {
                        $tabl2image = $optionData7['filename'];
                        $tabl2pid = $optionData7['p_id'];
                        $table2picid = $optionData7['pim_id'];


                ?>
                        <tr>
                            <td><?php

                                $query8 = "SELECT p_name FROM products WHERE p_id='$tabl2pid'";
                                $result8 = $conn->query($query8);
                                if ($result8->num_rows > 0) {
                                    while ($optionData8 = $result8->fetch_assoc()) {
                                        $tabl2pname = $optionData8['p_name'];
                                    }
                                }

                                echo $tabl2pname;
                                ?></td>
                            <td style="padding: 1rem;"><img src="image_store/<?php echo $tabl2image; ?>" alt="error"></td>
                            <td style="width: 10%;padding: 1rem;"><a href="deletee.php?productpic_id=<?php echo $table2picid; ?>&delflag=1&idgo=<?php echo $idfielda2; ?>" class="btn"><i class="bi bi-trash"></i></a></td>


                        </tr>
                <?php
                    }
                }
                ?>








            </table>

        </div>






    </section>







    <section id="alldepartments" class="about" style="background-color: whitesmoke;" lang="ar" dir="rtl">






        <div class="content">
            <h2 class="heading-title" style="text-align: center; color: black;">الأقسـام</h2>

            <table>
                <tr>
                    <!-- <th>id</th>
                <th>name</th>
                <th>describtion</th>
                <th>color</th>
                <th>image</th>
                <th>Delete</th> -->

                    <th>اسم القسم</th>
                    <th>الوصف</th>
                    <th>حذف</th>


                </tr>



                <tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "shopdata");

                    $query9 = "SELECT * FROM departments";
                    $result9 = $conn->query($query9);
                    if ($result9->num_rows > 0) {
                        while ($optionData9 = $result9->fetch_assoc()) {
                            $tdepartmentid = $optionData9['d_id'];
                            $tdepartname = $optionData9['d_name'];
                            $tdepartdesc = $optionData9['d_describtion'];

                    ?>
                            <td style="width: 30%;"><?php echo $tdepartname; ?></td>
                            <td><?php echo $tdepartdesc; ?></td>




                            <td style="padding: 2rem; width: 10%;"><a href="deletee.php?departmenttt_id=<?php echo $tdepartmentid; ?>&delflag=2&idgo=<?php echo $idfielda2; ?>" class="btn"><i class="bi bi-trash"></i></a></td>


                </tr>
        <?php
                        }
                    }
        ?>





            </table>

        </div>






    </section>


















    <section id="allpopularproducts" class="about" style="background-color: whitesmoke;" lang="ar" dir="rtl">






        <div class="content">





            <h2 class="heading-title" style="text-align: center; color: black;">قائمة الأكثر شيوعاً</h2>



            <table id="myTable2">


                <tr>
                    <!-- <th>id</th>
                <th>name</th>
                <th>describtion</th>
                <th>color</th>
                <th>image</th>
                <th>Delete</th> -->

                    <th>الاسم</th>
                    <th>القسم</th>
                    <!-- <th>السعر</th> -->
                    <!-- <th>الوصف</th> -->
                    <!-- <th>اللون</th> -->
                    <th>الصورة</th>
                    <th>حذف</th>


                </tr>





                <?php
                $conn = mysqli_connect("localhost", "root", "", "shopdata");

                $query4 = "SELECT * FROM products WHERE p_position='1'";
                $result4 = $conn->query($query4);
                if ($result4->num_rows > 0) {
                    while ($optionData4 = $result4->fetch_assoc()) {
                        $table1prid = $optionData4['p_id'];
                        $table1prname = $optionData4['p_name'];
                        $table1prdepartment = $optionData4['d_id'];

                        $table1prdepartmentcon = mysqli_query($conn, "SELECT * FROM departments WHERE d_id='$table1prdepartment'");

                        while ($row = mysqli_fetch_array($table1prdepartmentcon)) {


                            $table1prdepartmentcon1 = $row['d_name'];
                        }



                        // $table1prcolorcon = mysqli_query($conn, "SELECT * FROM product_colors WHERE p_id='$table1prid'");





                ?>

                        <tr>
                            <td><?php echo $table1prname . " - " . $table1prid; ?></td>
                            <td><?php echo $table1prdepartmentcon1; ?></td>

                            <td style="padding: 1rem;">
                                <?php


                                $query6 = "SELECT filename FROM product_images WHERE p_id='$table1prid'";
                                $result6 = $conn->query($query6);
                                if ($result6->num_rows > 0) {
                                    while ($optionData6 = $result6->fetch_assoc()) {
                                        $table1primage = $optionData6['filename'];


                                ?>
                                        <img style="width: 10rem;height: 10rem;" src="image_store/<?php echo $table1primage; ?>" alt="Error">
                                <?php
                                    }
                                }
                                ?>




                            </td>
                            <td style="padding: 1rem;width: 10%;"><a href="deletee.php?productpopular_id=<?php echo $table1prid; ?>&delflag=3&idgo=<?php echo $idfielda2; ?>" class="btn"><i class="bi bi-trash"></i></a></td>



                        </tr>
                <?php
                    }
                }
                ?>


            </table>


        </div>









    </section>








    <section id="addtopopularproducts" class="about" style="background-color: whitesmoke;">






        <div class="form">
            <h2 class="heading-title" style="text-align: center;color: black;" lang="ar" dir="rtl">إضافة للأكثر شيوعاً</h2>


            <form method="POST" class="review-form" enctype="multipart/form-data" style="width: 50%;margin-left: 24%;background-color: #222;">

                <div class="flex">



                    <div class="inputBox">
                        <span lang="ar" dir="rtl" style="color: #fff;">اختر ستارة</span>
                        <select name="popularproductt" id="" lang="ar" dir="rtl" style="border-color: #fff;">
                            <option value="">اختر ستارة</option>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "shopdata");

                            $query10 = "SELECT p_name FROM products WHERE p_position = '0'";
                            $result10 = $conn->query($query10);
                            if ($result10->num_rows > 0) {
                                while ($optionData10 = $result10->fetch_assoc()) {
                                    $popprodname = $optionData10['p_name'];
                            ?>
                                    <option> <?php echo $popprodname; ?> </option>
                            <?php
                                }
                            }
                            ?>

                        </select>
                    </div>





                </div>

                <div class="inputbox">
                    <input lang="ar" dir="rtl" type="submit" value="إضافة" class="btn" name="popularproductadd">

                </div>
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



    <script>
        document.getElementById("Addnewproduct").style.display = ("none")
        document.getElementById("Addnewpicture").style.display = ("none")
        document.getElementById("Adddepartment").style.display = ("none")
        document.getElementById("allpictures").style.display = ("none")
        document.getElementById("alldepartments").style.display = ("none")
        document.getElementById("allpopularproducts").style.display = ("none")
        document.getElementById("allproducts").style.display = ("flex")
        document.getElementById("addtopopularproducts").style.display = ("none")
        document.getElementById("Allusers").style.display = ("none")




        function menublocks(menuid) {
            document.getElementById("Addnewproduct").style.display = ("none")
            document.getElementById("Addnewpicture").style.display = ("none")
            document.getElementById("Adddepartment").style.display = ("none")
            document.getElementById("allpictures").style.display = ("none")
            document.getElementById("alldepartments").style.display = ("none")
            document.getElementById("allpopularproducts").style.display = ("none")
            document.getElementById("allproducts").style.display = ("none")
            document.getElementById("addtopopularproducts").style.display = ("none")
            document.getElementById("Allusers").style.display = ("none")
            document.getElementById("controlpage").style.display = ("none")


            var menublockid = document.getElementById(menuid).style.display = ("flex");

            if (menuid == "Allusers") {
                document.getElementById("controlpage").style.display = ("none")


            } else {
                document.getElementById("controlpage").style.display = ("flex")

            }

        }
    </script>








    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, table2, tr2, tr, td2, td, i, txtValue2, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable1");
            table2 = document.getElementById("myTable2");

            tr = table.getElementsByTagName("tr");
            tr2 = table2.getElementsByTagName("tr");


            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];

                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }


            }

            for (i = 0; i < tr2.length; i++) {
                td2 = tr2[i].getElementsByTagName("td")[0];
                if (td2) {
                    txtValue2 = td2.textContent || td2.innerText;
                    if (txtValue2.toUpperCase().indexOf(filter) > -1) {
                        tr2[i].style.display = "";
                    } else {
                        tr2[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <script>
        window.history.forward();
    </script>




    <script>
        // Uploading image 2 MB  .........

        const selectImage = document.querySelector('.select-image');
        const inputFile = document.querySelector('#file');
        const imgArea = document.querySelector('.img-area');

        // selectImage.addEventListener('click', function() {
        //     inputFile.click();
        // })

        inputFile.addEventListener('change', function() {
            const image = this.files[0]
            if (image.size < 2000000) {
                const reader = new FileReader();
                reader.onload = () => {
                    const allImg = imgArea.querySelectorAll('img');
                    allImg.forEach(item => item.remove());
                    const imgUrl = reader.result;
                    const img = document.createElement('img');
                    img.src = imgUrl;
                    imgArea.appendChild(img);
                    imgArea.classList.add('active');
                    imgArea.dataset.img = image.name;
                    imgArea.style.width = ("100%");
                    img.style.width = ("100%");
                    img.style.height = ("100%");

                }
                reader.readAsDataURL(image);
            } else {
                alert("Image size more than 2MB");
            }
        })
    </script>


    <script>
        // Uploading image 2 MB  .........

        const selectImage2 = document.querySelector('.select-image2');
        const inputFile2 = document.querySelector('#file2');
        const imgArea2 = document.querySelector('.img-area2');

        // selectImage2.addEventListener('click', function() {
        //     inputFile2.click();
        // })

        inputFile2.addEventListener('change', function() {
            const image2 = this.files[0]
            if (image2.size < 2000000) {
                const reader2 = new FileReader();
                reader2.onload = () => {
                    const allImg2 = imgArea2.querySelectorAll('img');
                    allImg2.forEach(item2 => item2.remove());
                    const imgUrl2 = reader2.result;
                    const img2 = document.createElement('img');
                    img2.src = imgUrl2;
                    imgArea2.appendChild(img2);
                    imgArea2.classList.add('active');
                    imgArea2.dataset.img2 = image2.name;
                    imgArea2.style.width = ("100%");
                    img2.style.width = ("100%");
                    img2.style.height = ("100%");
                }
                reader2.readAsDataURL(image2);
            } else {
                alert("Image size more than 2MB");
            }
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/poppermin.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>



<?php 
if($usermenuavailbility == "usersnotavailable"){
    echo "<script>
    document.getElementById('users-menu').style.display=('none');
    document.getElementById('sign-in-btn').style.display=('none');
    document.getElementById('control-menu').style.display=('none');

    
</script>";
}
?>







<?php


error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['productadd1'])) {

    $productcode = $_REQUEST['productcode'];
    $productname = $_REQUEST['productname'];
    $productcolor = $_REQUEST['productcolor'];
    $productprice = $_REQUEST['productprice'];
    $productdescribtion = $_REQUEST['productdescribtion'];

    $conn = mysqli_connect("localhost", "root", "", "shopdata");


    $filename = $_FILES['productimage1']['name'];
    $tempname = $_FILES["productimage1"]["tmp_name"];
    $folder = "./image_store/" . $filename;


    $productdepartmentv = $_POST['productdepartment'];
    $departmentv = mysqli_query($conn, "SELECT * FROM departments WHERE d_name='$productdepartmentv'");

    while ($row = mysqli_fetch_array($departmentv)) {


        $departid = $row['d_id'];
    }



    $sql2 = "INSERT INTO products VALUES ('$productcode','$productname','$productprice','$productdescribtion','$idfielda','$departid','0')";
    $sql = "INSERT INTO product_images VALUES ('$productcode','','$filename')";
    $sql3 = "INSERT INTO product_colors VALUES ('$productcode','$productcolor')";

    mysqli_query($conn, $sql2);
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql3);


    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idfielda2 . '">';
}
$conn->close();


?>









<?php

// Create a global variable to store the MySQL connection
$conn = mysqli_connect("localhost", "root", "", "shopdata");

// Use the global variable in both PHP blocks
if (isset($_POST['departmentadd'])) {

    $departmentname = $_REQUEST['departmentname'];
    $departmentdesci = $_REQUEST['departmentdescribtion'];


    $sql4 = "INSERT INTO departments VALUES ('','$departmentname','$departmentdesci','1')";

    mysqli_query($conn, $sql4);


    echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idfielda2 . '">';
}
$conn->close();
?>

<?php

if (isset($_POST['productadd2'])) {
    $conn2 = mysqli_connect("localhost", "root", "", "shopdata");

    // $productname2 = $_REQUEST['productname2'];
    $productcolor2 = $_REQUEST['productcolor2'];



    $filename2 = $_FILES['productimage2']['name'];
    $tempname2 = $_FILES["productimage2"]["tmp_name"];
    $folder2 = "./image_store/" . $filename2;


    $productnamev = $_POST['productname2'];
    $productv = mysqli_query($conn2, "SELECT * FROM products WHERE p_name='$productnamev'");

    while ($row2 = mysqli_fetch_array($productv)) {


        $prodid = $row2['p_id'];
    }



    $sql5 = "INSERT INTO product_images (p_id,filename) VALUES ('$prodid','$filename2')";
    $sql6 = "INSERT INTO product_colors (p_id,p_color) VALUES ('$prodid','$productcolor2')";

    mysqli_query($conn2, $sql5);
    mysqli_query($conn2, $sql6);


    if (move_uploaded_file($tempname2, $folder2)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

    echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idfielda2 . '">';
}
$conn2->close();


?>







































<?php

// Create a global variable to store the MySQL connection
$conn23 = mysqli_connect("localhost", "root", "", "shopdata");

// Use the global variable in both PHP blocks

$popularproductaddv = $_POST['popularproductt'];

if (isset($_POST['popularproductadd'])) {








    $sql11 = "UPDATE products SET p_position='1' WHERE p_name='$popularproductaddv'";

    mysqli_query($conn23, $sql11);


    echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idfielda2 . '">';
}

$conn23->close();

?>








