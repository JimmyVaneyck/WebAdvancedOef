<?php

$value = $_GET["value"];

if (!ctype_digit($value) || $value < 0) {
    header("Location: ingave.html");
}
?>

<form action="statistiek.php" method="GET">
    <?php for ($i = 0; $i < $value; $i++) { ?>
        <input type="text" name="numbers[]"/><br/>
    <?php } ?>
    <input type="submit" value="bereken">
</form>
