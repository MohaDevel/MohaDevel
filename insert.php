<?php
include('config.php');
if(isset($_POST['upload'])){
$NAME = $_POST['name'];
$PRICE = $_POST['price'];
$IMAGE = $_FILES['image'];
$image_location = $_FILES['image']['tmp_name'];
$image_name =  $_FILES['image']['name'];
$image_up = "img/" . $image_name;
//تم انشاء متغير انسيرت ليقوم بحمل البيانات واريالها الى قاعدة البيانات
//ادخل البيانات الى الجدول برود
$insert = "INSERT INTO prod (name , price , image) VALUES('$NAME','$PRICE','$image_up')";
//استعلام عن الكون والانسيرت تنفذهم الكون هو الربط والنسيرت هو القيم المخرنة
mysqli_query($con,$insert);
//  وادا لا اطبع حدث مشكلةاذا تم رفع الملفات في المجلد اطبع تم رفع الملف
if(move_uploaded_file($image_location,'img/'.$image_name)){
	echo "<script> alert('تم رفع المنتج بنجاح')</script>";
}else{
	echo "<script> alert('لقد حدث مشكلة لم يتم رفع الملف')</script>";

}

    header('location: page1ofadmin.php');
}
?>