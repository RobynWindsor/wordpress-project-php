<?php
function greet ($name, $colour){
    echo "<p> Hi my name is $name and my favourite color is $colour.</p>";
}
greet('John', 'blue');
greet('Jane', 'orange');
?>

<h1><?php bloginfo('name'); ?></h1>

<p><?php bloginfo('description'); ?></p>