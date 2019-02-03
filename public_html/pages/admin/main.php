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
    </body>
</html>