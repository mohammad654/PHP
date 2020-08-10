


<?php require_once('initialize.php'); ?>

<?php
$subjects = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'name' => 'PHP '],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'name' => 'MySQL'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'name' => 'JavaScript'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'name' => 'Bootstrap'],
];
?>


<?php require_once('header.php'); ?>

<?php $page_title = ' Subject'; ?>

<div id="content">
    <div class="subjects listing">
        <h1>Subjects</h1>

        <div class="actions">
            <a class="action" href="">Create New Subject</a>
        </div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach($subjects as $subject) { ?>
                <tr>
                    <td><?php echo $subject['id']; ?></td>
                    <td><?php echo $subject['position']; ?></td>
                    <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo $subject['name']; ?></td>

                    <td><a class="action" href="<?php echo 'show.php?id='.  $subject['id']?>">View</a></td>
                    <td><a class="action" href="<?php echo 'page.php?name='.  $subject['name']?>">Edit</a></td>
                    <td><a class="action" href="">Delete</a></td>
                </tr>
            <?php } ?>
        </table>

    </div>

</div>

<?php //include(SHARED_PATH . 'footer.php'); ?>

<?php require_once('footer.php'); ?>