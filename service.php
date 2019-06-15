<?php
include "connection.php";


if (isset($_POST['submit'])) {
    # code...
    $_name= $_FILES['image']['name'];
    $_type= $_FILES['image']['type'];
    $_imgsize= $_FILES['image']['size'];
    $_temp= $_FILES['image']['tmp_name'];


    $name=$_POST['name'];
    $desc=$_POST['desc'];
    $desc2=str_replace("\n","<br>", $desc);
    $path="services/".$_name;
    
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


$sql="INSERT INTO service(image, name, description ) VALUES ('$_name', '$name','$desc2')";
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