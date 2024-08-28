<?php

// Create a PHP function to delete a product from the database

  // Connect to the database

  // Check if the connection was successful

  $deleteflag = $_GET['delflag'];
  $idgo = $_GET['idgo'];

  $conn = mysqli_connect("localhost", "root", "", "shopdata");

  if ($deleteflag === "0") {

   
   // Delete the product from the database
   $productId = $_GET['producttt_id'];
   $sql1 = "DELETE FROM products WHERE p_id = $productId";
   $sql2 = "DELETE FROM product_colors WHERE p_id = $productId";
   $sql3 = "DELETE FROM product_images WHERE p_id = $productId";

mysqli_query($conn, $sql2);
mysqli_query($conn, $sql3);
mysqli_query($conn, $sql1);


 

echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idgo . '">';


  
$conn->close();
  }
  
  else if($deleteflag === "1"){

    $productpicid = $_GET['productpic_id'];
    $sql4 = "DELETE FROM product_images WHERE pim_id = $productpicid";
    mysqli_query($conn, $sql4);

    
    echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idgo . '">';

  }

  else if($deleteflag === "2"){

        $departmentId=$_GET['departmenttt_id'];
        $resultt1 = "SELECT p_id from products WHERE d_id = $departmentId";
        $sql5 = "DELETE FROM product_images WHERE p_id = $resultt1";
        $sql6 = "DELETE FROM product_colors WHERE p_id = $resultt1";
        $sql7 = "DELETE FROM products WHERE p_id = $resultt1";
        $sql8 = "DELETE FROM departments WHERE d_id = $departmentId";

        mysqli_query($conn, $sql5);
        mysqli_query($conn, $sql6);
        mysqli_query($conn, $sql7);
        mysqli_query($conn, $sql8);


        echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idgo . '">';
  }


  else if($deleteflag === "3"){

    $productpopularid = $_GET['productpopular_id'];
    $sql9 = "UPDATE products SET p_position='0' WHERE p_id='$productpopularid'";
    mysqli_query($conn, $sql9);
    echo '<meta http-equiv="refresh" content="0; url=add.php?idgo=' . $idgo . '">';


  }

 


  $conn->close();


?>



<?php 

$oolf=$_GET['departmentgft_id']; 
$ooln=$_GET['departmentgft_name']; 


header("Location: packages.php?oolfde=$oolf&oolfdn=$ooln");


?>

