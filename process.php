<?php include('include/header.php')?>
<?php
 if(isset($_SESSION['dept']))
 {
    $dept= $_SESSION['dept'] ;  
 }
?>
<?php
$sql="SELECT * FROM complaint where cdept='$dept' AND status='process' order by id desc" ;
$res=mysqli_query($conn,$sql);
?>        
<div class="msg">
<div   class="msg15">

    <?php
    while($row =mysqli_fetch_assoc($res))
    {

    ?>
    
    <div class="msg1 collapsem" > 
      <form action="action.php" method="post">
     <input type="hidden" name="msgid" value="<?php echo $row['id'];?>">
    <p><?php echo $row['date'];?><?php if($row['status']=='process')
    {
      ?>
      <span style="color:red;"> <?php echo $row['status'];?>  </span>
      <?php
    }
    ?>
    <?php if($row['status']=='pending')
    {
      ?>
      <span style="color:darkred;"> <?php echo $row['status'];?>  </span>
      <?php
    }
    ?>
     <?php if($row['status']=='completed')
    {
      ?>
      <span style="color:green;"> <?php echo $row['status'];?>  </span>
      <?php
    }
    ?></p>   
        <h4><?php echo $row['Student_Id'];?> <span><?php echo $row['dept'];?> </span></h4>
       
        </div>
        <div class="content_c">  <p>Complaint by - <?php echo $row['Student_Id'];?></p>
       
        <p style="font-weight:bold;">Detail :- <?php echo $row['complaint'];?></p>
   <p><?php echo $row['date'];?></p>
   
   <?php 
   if($row['status']=='process')
    {
      ?>
     <p style="color:red;"><?php echo $row['status'];?></p>
      <?php
    }
    ?>
      <?php if($row['status']=='pending')
    {
      ?>
     <p style="color:darkred;"><?php echo $row['status'];?></p>
      <?php
    }
    ?>
      <?php if($row['status']=='completed')
    {
      ?>
     <p style="color:green;"><?php echo $row['status'];?></p>
      <?php
    }
    ?>
    <input type="submit"class="btn-c"name="completedsubmit" value="Add in completed">
    
   </div> 
      
   </form> 
 <?php
    }
    ?>
     </div>
   
  
     <script>
var coll = document.getElementsByClassName("collapsem");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}


</script>


</div>
