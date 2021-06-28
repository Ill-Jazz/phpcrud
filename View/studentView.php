<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'View/includes/header.php';
?>

<?php

if (isset($_POST['submit'])): ?>
<?php
    echo 'Your form is submitted';?>

<?php else: ?>
<section class="container-fluid">
    <h1 class="text-center mb-5">Create student</h1>
    <form action="" method="post">
<table class="table">
    <thead>
    <tr>
        <th scope="col">Student id</th>
        <th scope="col">Last Name</th>
        <th scope="col">First Name</th>
        <th scope="col">Email </th>
        <th scope="col">Teacher id</th>
        <th scope="col">Class id</th>
    </tr>
    </thead>
    <?php
    foreach ($students as $student){?>
    <tbody>
    <tr>
        <th scope="row"><?php echo $student->getIdStudent()?></th>
        <th scope="row"><?php echo $student->getLastNameStudent()?></th>
        <th scope="row"><?php echo $student->getFirstNameStudent()?></th>
        <th scope="row"><?php echo $student->getEmailStudent()?></th>
        <th scope="row"><?php echo $student->getTeacherId()?></th>
        <th scope="row"><?php echo $student->getClassId()?></th>

        <th><button name="update" value="<?php echo $student->getIdStudent()?>">Update</button>
        </th>
        <th><button name="delete" value="<?php echo $student->getIdStudent()?>">Delete</button>
        </th>
    </tr>
    </tbody>
    <?php }?>
</table>
        <p>Last Name: <input type="text" name="LastNameStudent" id="lastname"></p>
        <p>First Name: <input type="text" name="FirstNameStudent" id="firstname"></p>
        <p>Email student: <input type="text" name="emailStudent" id="lastname"></p>
        <p>Teacher ID: <input type="number" name="teacherId" id="teacherid"></p>
        <p>Class ID: <input type="number" name="classId" id="classid"></p>
</form>
    <button type="submit" form="studentform" name="create" value="Create Student"></button>
</section>
    <br>
<?php endif;?>
<?php require 'includes/footer.php' ?>


