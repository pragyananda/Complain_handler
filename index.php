<?php include('include/header.php')?>

 <?php
 if(isset($_SESSION['dept']))
 {
    $dept= $_SESSION['dept'] ; 
 }
 
?>
<?php
$sql="SELECT * FROM complaint where cdept='$dept' " ;
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);

$sql2=mysqli_query($conn,"SELECT * FROM complaint where status ='pending' AND cdept='$dept'  ") ;
$count2=mysqli_num_rows($sql2);

$sql3=mysqli_query($conn,"SELECT * FROM complaint where status ='process' AND cdept='$dept' ") ;
$count3=mysqli_num_rows($sql3);

$sql4=mysqli_query($conn,"SELECT * FROM complaint where status ='completed' AND cdept='$dept' ") ;
$count4=mysqli_num_rows($sql4);

?>

<div class="frt_card"><div class="crd crd2">

    <h1><?php echo $count?></h1>
    <h4>Complaints</h4> 
    </div>
    <div class="crd crd4">
    <h1><?php echo $count2?></h1>
    <h4>Pending</h4> 
    </div>
    <div class="crd crd1">
    <h1><?php echo $count3?></h1>
 
       <h4>process</h4>
    </div>
   
    <div class="crd crd3">
    <h1><?php echo $count4?></h1>
    <h4>Completed</h4>
    </div>
   
   
   
</div>


