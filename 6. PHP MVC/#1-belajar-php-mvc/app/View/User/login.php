<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $model['title_page']; ?></title>
</head>

<body>
    <h1><?= $model['page_content']; ?></h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required>
        <button type="submit" name="btnLogin">Submit</button>
    </form>
</body>

</html>