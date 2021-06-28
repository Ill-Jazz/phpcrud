<?php
require 'View/includes/header.php' ?>
<section>
    <form action="" method="post">
        <p>Name: <input type="text" name="name" value="<?php echo $chosenStudent->getName(); ?>" ></p>
        <p>Email student: <input type="text" name="email" value="<?php echo $chosenStudent->getEmail(); ?>"></p>
        <p>Class ID: <input type="number" name="classId" value="<?php echo $chosenStudent->getClassId(); ?>"></p>
        <input type="number" name="id" hidden value ="<?php echo $chosenStudent->getId(); ?>">
        <button type="submit" name="studentUpdate">Submit</button>
    </form>
</section>
<?php require 'View/includes/footer.php'?>
