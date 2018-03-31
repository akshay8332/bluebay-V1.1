<?php include("header.php"); ?>	
	
<h2 style="padding-left:550px;">CATEGORY</h2>

<form  method="post" enctype="multipart/form-data">	
<div id="main">	
<h3>NAME</h3><input type="text" name="category"/> <span style="color:red";>* Enter unique name</span> <br/>
<h3>IMAGE</h3> <input type="file" id="cat_img" name="cat_img"/><br/><br/>
<input type="submit" name="submit" value="ADD"/></div>
</form>

<?php include("footer.php"); ?>

<?php
include("connect.php");	
$target_dir = "";
$uploadOk = 1;
$err=0;
if(empty($_POST["category"])){$err=1;}else{$cat_name=$_POST['category'];}

if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["submit"]) ) {
$target_file = $target_dir . basename($_FILES["cat_img"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 $check = getimagesize($_FILES["cat_img"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["cat_img"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	 if($err==0)
	  {
       if (move_uploaded_file($_FILES["cat_img"]["tmp_name"], "uploads/".$cat_name.".".$imageFileType)) {
       // echo "The file ". basename( $_FILES["cat_img"]["name"]). " has been uploaded.";
		echo "<script>alert('uploaded');</script>";
          }
		 else {
        echo "Sorry, there was an error uploading your file.";
     }

	 }else{ echo "<script>alert('enter category');</script>"; } 
	}
}
?>