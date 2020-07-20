<!doctype html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>
            Bot
        </title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
        <!-- Bootstrap core CSS -->
        <link href="SRC/css/bootstrap.css" rel="stylesheet">
        <style>
            .bd-placeholder-img { font-size: 1.125rem; text-anchor: middle; -webkit-user-select:
            none; -moz-user-select: none; -ms-user-select: none; user-select: none;
            } @media (min-width: 768px) { .bd-placeholder-img-lg { font-size: 3.5rem;
            } }
            .news {
                font-size: 16px;
                font-weight: bold;
            }
            #button {
                display: inline-block;
                background-color: #FF9800;
                width: 50px;
                height: 50px;
                text-align: center;
                border-radius: 4px;
                position: fixed;
                bottom: 30px;
                right: 30px;
                transition: background-color .3s,
                  opacity .5s, visibility .5s;
                opacity: 0;
                visibility: hidden;
                z-index: 1000;
            }
            #button::after {
                content: "\f077";
                font-family: FontAwesome;
                font-weight: normal;
                font-style: normal;
                font-size: 2em;
                line-height: 50px;
                color: #fff;
            }
            #button:hover {
                cursor: pointer;
                background-color: #333;
            }
            #button:active {
                background-color: #555;
            }
            #button.show {
                opacity: 1;
                visibility: visible;
            }
        </style>
        <!-- Custom styles for this template -->
        <link href="SRC/css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="SRC/js/jquery-ui-1.12.1/jquery-ui.css">
    </head>
    <a id="button" data-feather="chevron-up"></a>
    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-1 mr-0 px-3" href="#">
                機器人資料採集台
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
            data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu"
            aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
        </nav>