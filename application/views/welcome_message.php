<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Soft-Firme</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="http://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="alert"><?php echo $this->session->flashdata('message');?></div>
            <div class="jumbotron">
                <h1>Soft Firme</h1>
                <h3>Bine ati venit !</h3>
                <p>
                    <a class="btn btn-lg btn-success" href="<?php echo site_url("firme/adauga");?>" role="button">Adauga firma</a>
                </p>
            </div>
            <div class="row">
                <ul>
                    <li>Altfactor</li>
                    <li>Google</li>
                    <li>Microsoft</li>
                    <li>Selir</li>
                    <li>Yahoo</li>
                </ul>
            </div>
            <div class="jumbotron">
                <form>
                    <input type="text" class="search"/>
                    <input type="submit" value="Cauta"/>
                </form>
            </div>
        </div>

        <p class="footer"></p>
    </body>
</html>