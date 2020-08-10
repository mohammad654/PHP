<?php

require_once ("header.php");?>

<div id="content">

  <a class="back-link" href="<?php echo 'subject.php'; ?>">&laquo; Back to List</a>

    <div class="page show">
<?php
$id = isset($_GET['id']) ? $_GET['id'] : '1';
$name = isset($_GET['name']);
htmlspecialchars($id);
if (!empty($_GET['id']) && is_numeric($_GET['id'])  && ctype_digit($_GET['id']) ) {

    echo ' The programming language  is : '.'<strong>'. $id.$name. '</strong>'."<br>" ;

    ?>
    </div>
</div>
<?php
} else {
   require_once('index.php'); //redirect is a function
}

require_once ("footer.php");