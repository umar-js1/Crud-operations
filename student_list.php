<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <title>records</title>
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
button{
    padding: 5px;
    margin:10px;
    border-radius:12px;
    cursor:pointer;
    border:2px solid blue;
    color : pink;
    background:black;
    font-weight:bolder;
}
 button:hover{
    background :green;
    color: black;
}
#a{
    text-decoration:none;
    color:yellow;
    padding:5px;
}
#del{
    color : red;
    padding:5px;
}
#del:hover{
    color : black;
    background:red;
}
#a:hover{
    color : black;
    background:yellow;
}
table td,th{
   
    border:1px solid lightgreen;
    border:collapse;
    padding: 10px;
}
th{
    color:orange;
}
table td){
color:lightgrey;
}
h2{
    font-weight:bolder;
    background:#fff;
    color:black;
    text-shadow:2px 4px 3px 6px solid lightgrey;
    margin:20px;
    padding:10px;
}
    </style>
</head>
<body>
    <h2> ALL RECORDS </h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Actions</th>
    </tr>
    <?php $i=1;
    foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $student->name; ?></td>
            <td><?php echo $student->email; ?></td>
            <td><?php echo $student->mobile_no; ?></td>
            <td>
                <a id="a" href="<?=base_url('student/edit/' . $student->id); ?>">Update</a>
                <a id="del" href="<?=base_url('student/delete/' . $student->id); ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>
<a href="<?=base_url('student')?>">
     <button>return to form</button></a>

   
</body>
</html>











