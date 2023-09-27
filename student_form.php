<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <?php
    if(isset($value)){ ?>
<title>update form</title>
    <?php } else { ?>

    <title>Register form</title>
    <?php } ?>
    <style>
        *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
body
{
    background-color: black;
    color: #fff;
    text-align: center;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
}
form{
    display: flex;
   margin:20px;
    flex-direction: column;


}
form label{
    margin:10px;
    font-weight:bolder;
}
form  input{
    padding: 5px;
    margin:10px;
    border-radius:12px;
}
form  button{
    padding: 5px;
    margin:10px;
    border-radius:12px;
    cursor:pointer;
    border:2px solid blue;
    color : pink;
    background:black;
    font-weight:bolder;
}
form  button:hover{
    background :red;
    color: black;
}
#dis{
    text-decoration:none;
    padding:10px;
    color:yellowgreen;
}
#dis:hover{
    color:black;
    background:yellowgreen;
    font-weight:bolder;
    border-radius:20px;
}
        </style>
</head>
<body>
   
<?php
if (isset($value)){
   ?>
   <h2> UPDATE FORM </H2>
   <form method="post" action="<?=base_url('student/update/' . $value->id); ?>">    
    <label for="name"   >Name</label>
    <input type="text" value="<?= $value->name ?>" name="name" required>
    <label for="email" >Email:</label>
    <input type="email" value="<?= $value->email ?>" name="email" required>
    <label for="mobile_no">Mobile No:</label>
    <input type="number"  value="<?= $value->mobile_no ?>" name="mobile_no" required>
    <button type="submit">Update</button>

</form>
<a href="<?= base_url('student/read') ?>">show rec6rd</a>
<?php
}else {
?>
 <h2> REGISTER FORM </H2>
<form method="post" action="<?=base_url('student/create'); ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="mobile_no">Mobile No:</label>
    <input type="text" name="mobile_no" required>
    <button type="submit">Register</button>
    <?php

if(isset($register)){
   ?>
   <h4>register success !!<h4><br>
       <?php
       $register =false;

}?>
</form>
<a id="dis" href="<?= base_url('student/read') ?>">show record</a>

<?php
}
?>

</body>
</html>


















