<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <section>
        <h4>Hello <?php #echo $user->getName()?>,</h4>

        <a href="?page=student">To Student</a>
        <a href="?page=class">To Class</a>
        <a href="?page=teacher">To Teacher</a>

        <p>Put your content here.</p>
    </section>
<?php require 'includes/footer.php' ?>