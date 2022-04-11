<div class="container-fluid">
    <table class="table table-striped table-inverse table-responsive">
        <thead>
            <?php 
            $incertidumbres = array(
                '0' => ["Dosimetría C.I patrón de aleph SAC","U Dos"],
                '1'=>["Homogeneidad del campo","U hom"],
                '2'=>["Repetibilida de las mediciones","U rep"],
                '3'=>["Posicionamiento longitudinal de la distancia fuente - monitor","U pos-l"],
                '4'=>["Posición de la fuente en el irradiador","U f-ir"],
                '5'=>["Calibración de la cinta métrica","U cm"],
                '6'=>["Resolución de la cinta métrica","U res-cm"],
                '7'=>["Resolución del monitor de radiación","U res-mon"],
                '8'=>["Coeficiente de conversión","U coef"],
                '9'=>["Ajuste de la curva de dosimetría","U curv"]                    
            );
            foreach ($incertidumbres as $key => $value) {
                echo 
                '<tr>
                    <th>FUENTES DE INCERTIDUMBRES</th>
                    <td>'.$value[0].'</td>
                    <th>Símbolos</th>
                    <td>'.$value[1].'</td>  
                </tr>
                <tr>
                    <th>Símbolos</th>
                    <td>'.$value[1].'</td>  
                </tr>
                <tr>
                    <th>TIPO de INCERT.</th>
                    <td>
                        <select class="form-control form-control-sm" name="" id="">
                            <option value = "Tipo A">Tipo A</option>
                            <option value = "Tipo B">Tipo B</option>
                        </select>
                    </td>
                </tr>';
            } 
            ?>
        </thead>
    </table>
</div>

<?php for ($i=0; $i < 9; $i++) { 
    echo 
    '<div class="container-fluid" style="margin-bottom:45px;">
        <div class="row text-center">
            <div class="card-body">
                <h4 class="card-title">Calibración '.($i+1).'</h4>
            </div>
            <div class="col-6 border">
                <div class="card-body">
                    <h6 class="card-title">Antes del ajuste</h6>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <img src="https://i.ytimg.com/vi/9elukFIYFvQ/maxresdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 border">
                <div class="card-body">
                    <h6 class="card-title">Despues del ajuste</h6>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <img src="https://i.ytimg.com/vi/9elukFIYFvQ/maxresdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
} ?>



<link rel="stylesheet" href="./Public/Css/card.css">

<script src="./Public/JS/Insert_Cal_Mon.js"></script>
