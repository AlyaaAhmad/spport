
<?php
if(isset($_POST["done"])){

 $name=$_POST["name"];
$date=$_POST["date"];
$email=$_POST["email"];
$number=$_POST["number"];
$place=$_POST["place"];
$size=$_POST["size"];
$length=$_POST["length"];
$note=$_POST["note"];
$days=$_POST["days"];
$name2=$_POST["name2"];
$status=$_POST["status"];
$time=$_POST["time"];


require 'db.php';

//select  where field name=email

$select="select * from users where  email='$email'";
$query=  mysqli_query($con, $select);


if(mysqli_num_rows($query)>0){
    
    echo '<script>alert("email already exists plz sign in");window.location.assign("index.php");</script>';
    
    
}
else{
    //email does not exists
    
    $insert="insert into users( `name`, `date`, `email`, `number`, `place`, `size`, `length`, `note`, `days`, `name2`, `status`, `time` ) "
            . "values('$name','$date','$email','$number','$place','$size','$length','$note','$days','$name2','$status','$time')";
    
    $query2=  mysqli_query($con, $insert);
    
    
    
    if($query2){
        
       $move= move_uploaded_file($pictmpname, "images/$picname");
       
       
       if($move){
           
               echo '<script>alert("done");window.location.assign("home.php");</script>';

       }
    }
    
}






}
?>


<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> تسجيل تعليم رياضي </title>
    <link rel="stylesheet" href="assets/css/style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">تسجيل تعليم رياضي في نادي اللياقة النسائي</div>
    <div class="content">
      <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" >
        <div class="user-details">
          <div class="input-box">
            <span class="details">الاسم كامل</span>
            <input type="text"  name="name" placeholder="ادخل اسمك" required>
          </div>
          <div class="input-box">
            <span class="details">تاريخ الميلاد</span>
            <input type="date" name="date" required>
          </div>
          <div class="input-box">
            <span class="details">الايميل</span>
            <input type="text" name="email" placeholder="ادخل ايميلك " required>
          </div>
          <div class="input-box">
            <span class="details">رقم الجوال </span>
            <input type="text" name="number" placeholder="ادخل رقم الجوال " required>
          </div>
          <div class="input-box">
            <span class="details">المنطقة</span>
            <input type="text" name="place" placeholder="ادخل المنطقة" required>
          </div>
          <div class="input-box">
            <span class="details"> الوزن</span>
            <input type="text" name="size" placeholder="ادخل الوزن" required>
          </div>
          <div class="input-box">
            <span class="details">الطول</span>
            <input type="text" name="length" placeholder="ادخل الطول" required>
          </div>
          <div class="input-box">
            <span class="details">ملاحظة</span>
            <input type="text" name="note" placeholder="ادخل ملاحظة" required>
          </div>
          <div class="input-box">
            <span class="details">الفترة ( مسائي او صباحي )</span>
            <input type="text" name="days" placeholder=" ادخل الفترة" required>
          </div>
          <div class="input-box">
            <span class="details">المدربة</span>
            <input type="text" name="name2" placeholder=" ادخل اسم المدربة" required>
          </div>
          <div class="input-box">
            <span class="details">متزوجة او عزباء ؟</span>
            <input type="text" name="status" placeholder=" الحالة الاجتماعية " required>
          </div>
          <div class="input-box">
            <span class="details">مدة الاشتراك</span>
            <input type="text" name="time" placeholder=" 6 - 3 - 1 شهر " required>
          </div>
        </div>
       
        
        <div class="button">
          <input type="submit"  name="done" value="done">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
