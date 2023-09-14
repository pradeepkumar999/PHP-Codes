<!DOCTYPE html>
<html>
<body>
<?php
$names = ['pratham', 'simon', 'amir', 'vitto', 'oliver'];
?>
<h1>My First Heading</h1>
<p>My first paragraph.</p>
<ul>
<?php foreach ($names as $name) : ?>
    <li><?php echo $name; ?></li>
<?php endforeach; ?>
</ul>
</body>
</html>
