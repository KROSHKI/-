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

    $Param1 = 'SELECT `id`, `name`, `description`,`comment_api`,`map_api`,`image_name`, `gd_from`, `gd_to` FROM `posts`';
    $Result = mysqli_query($connection, $Param1);
    echo '
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">Посты</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                            <table class="table">
                                <tr>
                                    <th>Название</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>';

                                //Генерация-->
                                while($Row = mysqli_fetch_assoc($Result)) echo '
                                    <tr>
                                        <td>'.$Row['name'].'</td>
                                        <td><a href="/admin/edit/'.$Row['id'].'" class="btn btn-primary">Редактировать</a></td>
                                        <td><a href="/admin/delete/'.$Row['id'].'" class="btn btn-danger">Удалить</a></td>
                                    </tr>';
                                //<!-- -->    
                            echo '</table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>';
    ?>
</body>    
</html>