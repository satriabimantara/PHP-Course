<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $model['title_page']; ?></title>
</head>

<body>
    <h2><?= $model['page_content']; ?></h2>
    <form action="" method="post">
        <label for="logout">Are you sure want to logout?</label>
        <button type="submit" name="btnLogout" id='logout'>Logout</button>
    </form>
</body>

</html>