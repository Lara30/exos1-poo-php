<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="./bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="./bootstrap-3.3.7-dist/fonts" rel="text/css">
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <title>La méthode orientée objet</title>
</head>
<body>
<h1>Exercices POO Solo</h1>
<nav class="navbar navbar-inverse navbar-fixed-top role=navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Contact</a>
        </div>
    </div>
</nav>
<div class="container">
    <div class="starter-template">
        <form action="#" method="post">
            <?php
            require 'form.php';
            $form=new Form ($_POST);
            ?>
            <?php
            echo $form->input('username');
            echo $form->input('password');
            echo $form->submit();
            ?>
        </form>
    </div>
</div>
</body>
</html>