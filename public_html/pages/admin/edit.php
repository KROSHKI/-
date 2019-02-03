<? AdminVerify(1); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Админка</title>
        <link href="https://пермьонлайн.рф/assets/libs/bootstrap/bootstrap.css" rel="stylesheet">
        <link href="https://пермьонлайн.рф/assets/css/admin.css" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src="https://пермьонлайн.рф/assets/js/jq.min.js"></script>
        <script src="https://пермьонлайн.рф/assets/libs/bootstrap/bootstrap.js"></script>
    </head>
    <body class="fixed-nav sticky-footer bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
                <a class="navbar-brand" href="/admin/posts">Панель Администратора</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/add">
                            <i class="fa fa-fw fa-plus"></i>
                            <span class="nav-link-text">Добавить пост</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/posts">
                            <i class="fa fa-fw fa-list"></i>
                            <span class="nav-link-text">Посты</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/logout">
                            <i class="fa fa-fw fa-sign-out"></i>
                            <span class="nav-link-text">Выход</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
    <?
    $Param1 = 'SELECT `id`, `name`, `description`,`comment_api`,`map_api`,`image_name`, `gd_from`, `gd_to` FROM `posts` WHERE `id` = '.$URL_Parts[0];
    $Result = mysqli_query($connection, $Param1);
    while($Row = mysqli_fetch_assoc($Result)) echo '
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">'.$Row['name'].'</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/edit/'.$Row['id'].'" method="post" >
                            <div class="form-group">
                                <label>Название</label>
                                <input class="form-control" type="text" value="'.$Row['name'].'" name="name">
                            </div>
                            <!--<div class="form-group">
                                <label>Описание</label>
                                <input class="form-control" type="text" value="$Row[text]" name="text">
                            </div>-->
                            <div class="form-group">
                                <label>Текст</label>
                                <textarea class="form-control" rows="3" name="description">'.$Row['description'].'</textarea>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" name="enter" class="btn btn-primary btn-block">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
?>
</body>
</html>