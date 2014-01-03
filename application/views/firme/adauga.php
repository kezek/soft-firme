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
            <div class="jumbotron">
                <form action="adaugaPost" method="post">
                    <label for="nume">Nume firma: </label>
                    <input name="nume" type="text" />
                    <input type="submit" value="Adauga"/>
                </form>
            </div>
        </div>

        <p class="footer"></p>
    </body>
</html>