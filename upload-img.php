<?php 
 include "connection.php";


 if (isset($_POST['submit'])) {
     # code...
    $_name= $_FILES['image']['name'];
    $_type= $_FILES['image']['type'];
    $_imgsize= $_FILES['image']['size'];
    $_temp= $_FILES['image']['tmp_name'];

     $date= date("Y/m/d");
     $cat=$_POST['cat'];
     $description=$_POST['description'];
     $path="portfolio/".$_name;

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


     $sql="INSERT INTO gallery(image, date, category, description ) VALUES ('$_name', '$date','$cat','$description')";
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