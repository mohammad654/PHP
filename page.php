

<?php
//require_once('initialize.php');
//include( 'header.php');
require_once ("header.php");
?>
<div id="content">

  <a class="back-link" href="<?php echo 'subject.php'; ?>">&laquo; Back to List</a>
</strong>
  <div class="page show">
<!--      --><?php //  echo '  Page ID  : '.$id."<br>"; ?>
   <?php
//   $id = isset($_GET['id']) ? $_GET['id'] : '1';
//   echo '  ID : '.$id."<br>";
   $name = isset($_GET['name']) ? $_GET['name'] : 'Mo';

   echo '  you chose the programming language   : '.'<strong>'. $name.'</strong>'."<br>" ;
   ?>


  </div>

</div>

<?php require_once ("footer.php");   ?>