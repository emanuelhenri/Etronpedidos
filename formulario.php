<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/function.js">
</head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div>
                <div id="menu">

                    <ul>
                        

                    </ul>
                </div></br>
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                        <div class="notification is-success">
                        </div>
                        <div class="box">
                            <form action="cadastrar.php" method="POST">
                                <div class="field">
                                    <div class="control">
                                        <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="email" type="text" class="input is-large" placeholder="Email" autofocus>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input name="celular" type="text" class="input is-large" placeholder="celular" autofocus>
                                    </div>
                                </div>
                                <button type="submit" class="btn">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <center>
        <div class="section footer">

    </center>
</body>

</html>