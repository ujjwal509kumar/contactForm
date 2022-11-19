<?php
require "connect.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){

  //Collecting all the fields to post in databse 

  $name = $_POST['name'];
  $email = $_POST['email']; 
  $phone = $_POST['phone']; 
  $subject = $_POST['subject'];  
  $message = $_POST['message'];

  //Posting the data in database   
  
  $sql = "INSERT INTO `testing` (`name`, `email`, `phone`, `subject`, `message`) VALUES('$name','$email','$phone','$subject','$message');";
if($conn->query($sql)){
  echo '
  <html>
<style>
fieldset{
   width:80%;
   margin:auto;
   opacity: 100%;
   padding: 5px;
   background-color: #bcdce2ce;
} 
#id{
  font-size:20px ;
  font-style: bold;
}
legend{
  text-align: center;
  font-family: Times New Roman;
}
#print{
  width:100%;
  text-align: center;
  padding: 10px;
}
input{
  float: center;
  background-color: white;
  color: #653d20;
  outline: none;
  border: 1px solid green;
}
input:hover{
  color: red;
  background-color: #6434d74a;
}
#head{
 text-align:center;
 font-family:courier;
 font-size:45px;
 font-weight:10px;
 color:#2334a9b9;
}
</style>
<body>
<div id="head">FORM SUBMITION DETAILS</div><br/>
<fieldset>
    <legend>
      Confirmation Slip
    </legend>
    <span>Name  : '.$Name.'</span><br />
    <span>Email  : '.$Email.'</span><br />
    <span>DATE OF ADMISSION : '.date("d/m/Y").'</span>
  </fieldset>
  <div id="print"><input value="Print" type="button" onclick="print()"> </div>
  </body></html>';
}else {
  echo "an error occured";
}
  mysqli_close($conn);
}
?>