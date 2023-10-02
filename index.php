<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="heading">
        <h1>Marci PHPage</h1>
    </div>
    <div id="form-body">
        <form action="destination.php" method="post">
            <div class="form-input">
                <label for="username">Name</label>
                <input type="text" name = "username" id="username" required>
            </div>
            <div class="form-input">
                <label for="email_">Email</label>
                <input type="email" name="email" id="email_">
            </div>
            <div class="form-input">
                <label for="options">What is youe issue?</label>
                <select name="options" id="options">
                    <option value="friend">Friend</option>
                    <option value="foe">Foe</option>
                    <option value="antagonist">Antagonist</option>
                    <option value="protagonist">Protagonist</option>
                    <option value="side">Side Character</option>
                </select>
            </div>
            <div class="form-input">
                <label for="comment">Justify it!</label>
                <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            </div>
        </form>
    </div>
</body>

</html>