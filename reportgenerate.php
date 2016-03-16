<?php

$contents = "<table><tr><td>A</td><td>B</td></tr><tr><td>One</td><td>Two</td></tr><tr><td>Three</td><td>Four</td></tr></table>"; // Put here the source code of your table.

?>
<html>
    <head>
        <title>Save the file!</title>
    </head>
    <body>

        <?php echo $contents; ?>

        <form action="report.php" method="post">
            <!-- <input type="hidden" name="contents" value="<?php echo htmlspecialchars($contents); ?>"> -->
            <input type="submit" value="Save file" />
        </form>
        <div><a href ='reportgenerate.php'>Generate</a></div>
    </body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    header('Content-type: text/txt');
    header('Content-Disposition: attachment; filename="report.txt"');

    echo $_POST['contents'];
}

?>


?>
