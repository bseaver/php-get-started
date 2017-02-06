<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Create a greeting!</title>
</head>
<body>
    <div class="container">
        <h1>Fill in your name and your friend's name to create your custom greeting!</h1>

        <form action="letter.php">
            <div class="form-group">
                <label for="sender">Your name</label>
                <input id="sender" name="sender" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="recipient">Your friend's name</label>
                <input id="recipient" name="recipient" class="form-control" type="text">
            </div>
            <button type="submit" class="btn">Go!</button>
        </form>

    </div>
</body>
</html>
