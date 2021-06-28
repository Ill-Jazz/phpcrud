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
                    <th scope="col">Name</th>
                    <th scope="col">Email </th>
                    <th scope="col">Class id</th>
                </tr>
                </thead>
                <?php
                foreach ($students as $student):?>
                    <tbody>
                    <tr>
                        <th scope="row"><?php echo $student->getId()?></th>
                        <th scope="row"><?php echo $student->getName()?></th>
                        <th scope="row"><?php echo $student->getEmail()?></th>
                        <th scope="row"><?php echo $student->getClassId()?></th>

                        <th><button name="update" value="<?php echo $student->getId()?>">Update</button>
                        </th>
                        <th><button name="delete" value="<?php echo $student->getId()?>">Delete</button>
                        </th>
                    </tr>
                    </tbody>
                <?php endforeach;?>
            </table>
        </form>
        <form action="" method="post">
        <button type="submit" name="create">Create student</button>
        </form>
    </section>
    <br>
<?php endif;?>
<?php require 'View/includes/footer.php' ?>
