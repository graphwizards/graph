<?php

include "connection.php";


if (isset($_POST['submit'])) {
    # code...
    $_name= $_FILES['image']['name'];
    $_type= $_FILES['image']['type'];
    $_imgsize= $_FILES['image']['size'];
    $_temp= $_FILES['image']['tmp_name'];

    $name=$_POST['name'];
    $status=$_POST['status'];
    $path="theme/".$_name;

if ($_name=="") {
	# code...
	echo "please select image";
}

else{
	$move=move_uploaded_file($_temp,$path);

	if ($move) {
		# code...
		echo "image uploaded ";

	}

	else{
        echo "image <b> not </b>uploaded";
        $connect-->close();
	}
}


     $sql="INSERT INTO theme(image, name, status) VALUES ('$_name', '$name','$status')";
     $result = mysqli_query($connect,$sql);
     if ($result) {
        echo" <script> alert('data inserted') </script>";
        header('Location: upload-work.php');
        
     }
     else{
         echo "data inserted failed".mysqli_error($connect);
     }
    }

?>