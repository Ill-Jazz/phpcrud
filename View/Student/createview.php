<?php
require 'View/includes/header.php' ?>
<section>
    <form action="" method="post">
    <p>Name: <input type="text" name="name" ></p>
    <p>Email student: <input type="text" name="email"></p>
    <p>Class ID: <input type="number" name="classId"></p>
        <button type="submit" name="studentSubmit">Submit</button>
    </form>
</section>
<?php require 'View/includes/footer.php'?>
