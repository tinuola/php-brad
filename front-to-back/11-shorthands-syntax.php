<?php

// $loggedIn = true;
// if($loggedIn){
//     echo "You're logged in";
// } else {
//     echo "You're not logged in";
// }

// $loggedIn = false;
// echo ($loggedIn) ? "You're logged in" : "You're not logged in";

// $isRegistered = ($loggedIn == true) ? true : false;
// echo $isRegistered;

// $age = 5;
// $score = 15;
// echo "Your score is: ".($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible':'Average'));

$loggedIn = false;
$arr = [1, 2, 3, 4, 5];
?>

<div>

    <?php if($loggedIn) { ?>
        <h1> Welcome User </h1>
    <?php } else { ?>
        <h1> Welcome Guest </h1>
    <?php } ?>

</div>

<!-- Sligtly neater way -->

<div>
    <?php if($loggedIn): ?>
        <h1> Welcome User </h1>
    <?php else: ?>
        <h1> Welcome Guest </h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($arr as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>
<br>

<div>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>