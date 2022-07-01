
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
                <?php   
                    $ATENUAD = ["SA","V","III","III+V","II+V","II+III","IV","IV+V","III+IV","I+IV","II+IV+V","II+III+IV+V","I+II+III+IV+V"];
                    $DISTANCIA = [0.0374544366961017,0.0139340011717121,0.00596478244898521,0.0022995558436898,0.000928735344622004,0.000400689187922865,0.000245503830168261,0.0000966764175111964,0.0000420792970707922,0.0000187569283718711];
                    
                    for ($i=1; $i <= 12; $i++) { 
                        echo '<form method="post"> <tr> <td>'.$i.'</td>'
                                ?>
                                    <td>
                                        <input type="text" name="tasa_dosis<?php echo $i ?>" id="tasa_dosis<?php echo $i ?>" class="form-control" placeholder="Tasa de dosis" value="-" aria-describedby="helpId" required>
                                        <input type="hidden" name="consulta" value="tasa_dosis_requerida">
                                    </td>
                                <?php 
                                    echo '<td>Sv/h</td>';
                                    $_POST['tasa_dosis'.$i]=0;
                                    $TD = $_POST['tasa_dosis'.$i];
                                    switch ($_POST['consulta']) {
                                        case 'tasa_dosis_requerida':
                                            if ($TD>=number_format("4.16E-03",5) and $TD<=number_format("3.75E02",5)) {  
                                                echo '<td>'.$ATENUAD[0].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[0]/$TD),3).'</td>';
                                            }
                                            elseif ($TD>=number_format("2.13E-03",5) and $TD<=number_format("6.19E-03",5)) {  
                                                echo '<td>'.$ATENUAD[1].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[1]/$TD),3).'</td>'; 
                                            }                            
                                            elseif ($TD>=number_format("9.54E-04",5) and $TD<=number_format("2.65E-03",5)) {   
                                                echo '<td>'.$ATENUAD[2].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[2]/$TD),3).'</td>';                                    
                                            } 
                                            elseif ($TD>=number_format("3.68E-04",5) and $TD<=number_format("1.02E-03",5)) {     
                                                echo '<td>'.$ATENUAD[3].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[3]/$TD),3).'</td>';
                                            } 
                                            elseif ($TD>=number_format("1.49E-04",5) and $TD<=number_format("4.13E-04",5)) { 
                                                echo '<td>'.$ATENUAD[4].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[4]/$TD),3).'</td>';                                    
                                            } 
                                            elseif ($TD>=number_format("6.41E-05",5) and $TD<=number_format("1.78E-04",5)) {  
                                                echo '<td>'.$ATENUAD[5].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[5]/$TD),3).'</td>';                           
                                            } 
                                            elseif ($TD>=number_format("3.93E-05",5) and $TD<=number_format("1.09E-04",5)) {  
                                                echo '<td>'.$ATENUAD[6].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[6]/$TD),3).'</td>';
                                            } 
                                            elseif ($TD>=number_format("1.55E-05",5) and $TD<=number_format("4.30E-05",5)) {  
                                                echo '<td>'.$ATENUAD[7].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[7]/$TD),3).'</td>';
                                            } 
                                            elseif ($TD>=number_format("6.73E-06",5) and $TD<=number_format("1.87E-05",5)) {  
                                                echo '<td>'.$ATENUAD[8].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[8]/$TD),3).'</td>';
                                            } 
                                            elseif ($TD>=number_format("3.00E-06",5) and $TD<=number_format("8.34E-06",5)) { 
                                                echo '<td>'.$ATENUAD[9].'</td>';
                                                echo '<td>'.number_format(sqrt($DISTANCIA[9]/$TD),3).'</td>';
                                            } 
                                            // elseif ($TD>=number_format("0.00e+00",5) and $TD<=number_format("0.00e+00",5)) {    
                                            //     echo '<th>'.$TD.'</th>'; 
                                            //     echo '<td>Sv/h</td>';
                                            //     echo '<td>'.$ATENUAD[10].'</td>';
                                            //     echo '<td></td>';
                                            // } 
                                            // elseif ($TD>=number_format("0.00e+00",5) and $TD<=number_format("0.00e+00",5)) {    
                                            //     echo '<th>'.$TD.'</th>'; 
                                            //     echo '<td>Sv/h</td>';
                                            //     echo '<td>'.$ATENUAD[11].'</td>';
                                            //     echo '<td></td>';
                                            // } 
                                            // elseif ($TD>=number_format("0.00e+00",5) and $TD<=number_format("0.00e+00",5)) {    
                                            //     echo '<th>'.$TD.'</th>'; 
                                            //     echo '<td>Sv/h</td>';
                                            //     echo '<td>'.$ATENUAD[12].'</td>';
                                            //     echo '<td></td>';
                                            // } 
                                            else {
                                                echo '<td>Tasa de dosis fuera de rango</td>';
                                                echo '<td>Tasa de dosis fuera de rango</td>';
                                            }
                                        break;
                                    };
                                ?>
                            }
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









