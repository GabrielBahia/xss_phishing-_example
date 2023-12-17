<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Image Viewer</title>
</head>

<body style="background-color: #141d2b; font-family: sans-serif; color: white;">
    <center>
        <h1>Online Image Viewer</h1>
        <div class="form-group">
            <form role="form" action="index.php" method="GET" id='urlform'>
                <input type="text" placeholder="Image URL" name="url">
            </form>
            <br>
            <?php if (isset($_GET['url'])) { ?>
                <img src='<?= $_GET['url'] ?>'>
            <?php } ?>
        </div>
    </center>
</body>

</html>