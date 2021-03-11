<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="shortcut icon" href="/www/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <?php include("../blocks/header.php"); ?>
    <div id="page">
        <div id="content">
            <div id="main">
                <form class="form-horizontal" action='' method="POST">
                    <fieldset>
                        <div id="legend">
                            <legend class="">Войти в систему</legend>
                        </div>
                        <div class="control-group">
                            <!-- E-mail -->
                            <label class="control-label" for="email">E-mail:</label>
                            <div class="controls">
                                <!-- <p class="help-block">Ваш E-mail:</p> -->
                                <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Пароль:</label>
                            <div class="controls">
                                <!-- <p class="help-block">Ваш пароль:</p> -->
                                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success">Войти</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <?php include("../blocks/catalog.php"); ?>
</body>

</html>