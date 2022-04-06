<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:7%; box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3);">
        <form action="functions/F-LSCD-03.php" method="post">
            <div class="card-body" style="text-align: center;">
                <h4 class="card-title">Formulario</h4>
            </div>
            <div class="form-group">
                <label for="tasa_dosis1">Tasa de dosis 1</label><br>
                <input type="text" name="tasa_dosis1" id="tasa_dosis1" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis2">Tasa de dosis 2</label><br>
                <input type="text" name="tasa_dosis2" id="tasa_dosis2" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis3">Tasa de dosis 3</label><br>
                <input type="text" name="tasa_dosis3" id="tasa_dosis3" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 4</label><br>
                <input type="text" name="tasa_dosis4" id="tasa_dosis4" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br> 
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 5</label><br>
                <input type="text" name="tasa_dosis5" id="tasa_dosis5" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 6</label><br>
                <input type="text" name="tasa_dosis6" id="tasa_dosis6" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 7</label><br>
                <input type="text" name="tasa_dosis7" id="tasa_dosis7" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 8</label><br>
                <input type="text" name="tasa_dosis8" id="tasa_dosis8" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 9</label><br>
                <input type="text" name="tasa_dosis9" id="tasa_dosis9" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 10</label><br>
                <input type="text" name="tasa_dosis10" id="tasa_dosis10" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 11</label><br>
                <input type="text" name="tasa_dosis11" id="tasa_dosis11" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>
            <div class="form-group">
                <label for="tasa_dosis4">Tasa de dosis 12</label><br>
                <input type="text" name="tasa_dosis12" id="tasa_dosis12" class="form-control" placeholder="Tasa de dosis" aria-describedby="helpId" required>
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <br>                       
            <input type="hidden" name="consulta" value="tasa_dosis_requerida">
            <div class="text-center">
                <button type="submit" class="btn btn-submit">Enviar Data</button>
            </div>
        </form>
    </div>
</body>
    <?php include_once('../Layouts/Footer.php')?>
</html>