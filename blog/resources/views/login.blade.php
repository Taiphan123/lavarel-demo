<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
        username: <input type="text" name="username"></input>
        pass: <input type="pass" name="password"></input>
        <button type="submit">Send</button>
    </form>
</body>
</html>