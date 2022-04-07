
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F-LSD3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/> 
</head>
<body>
    <div class="container" style="margin-top:7%;">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-inverse">
                <tr>
                    <th>Nº Item</th>
                    <th>Tasa de dosis</th>
                    <th>Unidad</th>
                    <th>Combinación de atenuadores</th>
                    <th>Distancia (m)</th>
                </tr>
            </thead>
            <tbody>  
                <?php include('../Functions/F-LSCD-03.php');
                ?>
            </tbody>
        </table>
    </div>
    <?php include_once('../Layouts/Footer.php')?>
</body>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>
