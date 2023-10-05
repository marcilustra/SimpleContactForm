<!DOCTYPE html>
<html lang="en" id="destin">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>destination</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <form id="destin-out">
        <div>
            <label>Name:
                <?php
                echo ($_POST['username']);
                ?>
            </label>
            <br>
            <label>Email:
                <?php
                echo ($_POST['email']);
                ?>
            </label>
            <br>
            <label>Issue:
                <?php
                echo ($_POST['options']);
                ?>
            </label>
            <br>
            <label>Additional Comment:
                <?php
                echo ($_POST['comment']);
                ?>
            </label>
        </div>
    </form>
</body>

</html>