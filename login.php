<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login Form</title>
</head>
<body background="images/1e.jpg" class="body_deg">
    <center>
        <div class="form_deg">
            <center class="title_deg">
                Login Form
            </center>
            <form action="login_check.php" method="POST" class="login_form">
                <div>
                    <label class="label_deg">User Name</label>
                    <input type="text" name="username"/>
                </div>
                <div>
                    <label class="label_deg">Email</label>
                    <input type="mailto" name="email" />
                </div>
                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password"/>
                </div>
                <div>
                    <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>