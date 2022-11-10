<h1>Hello view main index</h1>

<---?= $test ?>--->

<?php if (!empty($names)) : ?>
   <?php foreach ($names as $name) {
        echo $name->name.'<hr>';
    } ?>
<?php endif; ?>

