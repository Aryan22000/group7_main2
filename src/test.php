<?php include('header.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the answers or store them as needed
    echo "You selected the following answers:<br>";

    // Loop through each category and its questions
    for ($cat = 1; $cat <= 4; $cat++) {
        $categoryTotal = 0;
        for ($q = 1; $q <= 3; $q++) {
            $answerVar = "category{$cat}_question{$q}";
            $$answerVar = $_POST[$answerVar];
            echo "Category $cat - Question $q: " . $$answerVar . "<br>";
            $categoryTotal += $$answerVar;
        }
        echo "Avg. for Category $cat: " . $categoryTotal / 3 . "<br><br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Questionnaire Form</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php for ($cat = 1; $cat <= 4; $cat++): ?>
        <h2 style="color:aliceblue">Category <?php echo $cat; ?></h2>
        <?php for ($q = 1; $q <= 3; $q++): ?>
            <h3 style="color:aliceblue">Question <?php echo $q; ?></h3>
            <?php for($i=1; $i<=5; $i++): ?>
                <input type="radio" name="category<?php echo $cat; ?>_question<?php echo $q; ?>" value="<?php echo $i; ?>"><?php echo $i; ?>
            <?php endfor; ?>
            <br>
        <?php endfor; ?>
    <?php endfor; ?>

    <input type="submit" value="Submit">
</form>

</body>
<?php include('footer.php'); ?>

</html>
