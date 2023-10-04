<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div id="form-body">
        <form action="destination.php" method="post">
            <div class="heading">
                <h1>Report an issue</h1>
            </div>
            <div class="form-input">
                <label class="daLabels" for="username">Name</label>
                <br>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-input">
                <label class="daLabels" for="email_">Email</label>
                <br>
                <input type="email" name="email" id="email_" required>
            </div>
            <div class="form-input">
                <br>
                <select name="options" id="options" required>
                    <option value="friend">A feature is not working</option>
                    <option value="foe">Language setting not updating</option>
                    <option value="antagonist">Time stuck</option>
                    <option value="protagonist">Other</option>
                </select>
            </div>
            <div class="form-input">
                <label class="daLabels" for="comment">Tell us more</label>
                <br>
                <textarea name="comment" id="comment" cols="60" rows="10" required
                    placeholder="what else..."></textarea>
            </div>
            <div class="submit">
                <button type="submit" value="submit">Send</button>
            </div>
        </form>
    </div>
</body>

</html>