<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link href="https://пермьонлайн.рф/assets/libs/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="https://пермьонлайн.рф/assets/css/admin.css" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src="https://пермьонлайн.рф/assets/js/jq.min.js"></script>
        <script src="https://пермьонлайн.рф/assets/libs/bootstrap/bootstrap.js"></script>
    </head>
<body>    
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Вход в панель Администратора</div>
        <div class="card-body">
            <form action="/admin/login" method="post">
                <div class="form-group">
                    <label>Логин</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" name="enter" class="btn btn-primary btn-block">Вход</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>