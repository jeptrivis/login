<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INDEX</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">

        <style type="text/css" media="screen">
            /*RESET*/
            * {
                margin:0;
                padding: 0;
            }
            a {
                color:#000;
                text-decoration: none;
                display: block;
            }
            h1, h2, h3, h4, h5, h6 {
                font-weight: normal;
                font-size: 14px;
            }
            ul, ol {
                list-style: none;
            }
            .clearfix {
                clear:both;
            }

            /*HEADER*/
            body {
                font-family: Verdana, Geneva, sans-serif;
                font-size: 12px;
            }
            .top-bar  {
                width: 100%;
                min-height: 50px;
                background-color: #ccc;
            }
            .logo {
                width: 100px;
                float: left;
            }
            nav {
                float: right;
            }
            nav li {
                float: left;
                margin-right: 20px;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
    <?php include "header.php"; ?>
    <!-- /header -->
        <div style="height:50vh;">
        <h1>INDEX</h1>
        <p><a href="login.php">Accedi all'area riservata</a></p>
        </div>
       <?php include "footer.php"; ?>
        <script src="js/main.js"></script>
    </body>
</html>