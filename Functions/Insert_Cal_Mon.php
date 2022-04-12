<div class="container-fluid">
    <div class="row text-center">
        <div class="card-body">
            <h4 class="card-title">Fuentes de incertidumbtres</h4>
        </div>
    </div>
    <table class="table table-responsive">
        <s>
            <tr>
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
                            '<th>'.$value[0].'</th>';
                    } 
                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    foreach ($incertidumbres as $key => $value) {
                        echo 
                            '<td>
                                <p><span>Símbolo: </span>'.$value[1].'</p>
                                <select class="form-control form-control-sm" name="" id="">
                                    <option disabled selected value="">TIPO de INCERT.</option>
                                    <option value = "Tipo A">Tipo A</option>
                                    <option value = "Tipo B">Tipo B</option>
                                </select>
                            </td>';
                    }
                ?> 
            </tr>
        </tbody>
    </table>
</div>

<div class="container" style="margin-bottom:45px;">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <div class="card-body">
                        <a class="btn btn-primary card-title" data-toggle="collapse" href="#collapseE1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Calibración 1
                        </a>
                    </div> 
                </th>
                <th>
                    <div class="card-body">
                        <a class="btn btn-primary card-title" data-toggle="collapse" href="#collapseE2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Calibración 2
                        </a>
                    </div>
                </th>
            </tr>
        </thead>
    </table>
</div>

<div class="container" style="margin-bottom:45px;">
    <div class="row text-center">      
        <div class="collapse" id="collapseE1">
            <div class="col-6 border">
                <div class="card-body">
                    <h6 class="card-title">Antes del ajuste</h6>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Tasa de dosis VCV (µSv/h)</td>
                                <td scope="row">25000.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura tasa de dosis del monitor (unidad del monitor)</td>
                                <td scope="row">2474.0000</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">D.S. lecturas monitor</td>
                                <td scope="row">0.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura mínima del monitor</td>
                                <td scope="row">1.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left"># Lecturas tomados del monitor</td>
                                <td scope="row">10</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distancia fuente - monitor(m)</td>
                                <td scope="row">1.224</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>a</th>
                                    <th>Unidad</th>
                                    <th>Distribución de prob.</th>
                                    <th>Valor distribución de prob.</th>
                                    <th>Valor incert. estándar</th>
                                    <th>Contribución % incert. estándar</th>
                                    <th>Unidad incert. estandar</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>                                        
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    
                                </tbody>
                        </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Incert. Comb = </td>
                                <td scope="row" class="text-left">548.2484358</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distribución de prob. =</td>
                                <td scope="row" class="text-left">normal (K=2)</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Factor de cobertura k =</td>
                                <td scope="row" class="text-left">2</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">1.10E+03</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">4.43%</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
            </div> 
            <div class="col-6 border">
                <div class="card-body">
                    <h6 class="card-title">Despues del ajuste</h6>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Tasa de dosis VCV (µSv/h)</td>
                                <td scope="row">25000.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura tasa de dosis del monitor (unidad del monitor)</td>
                                <td scope="row">2474.0000</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">D.S. lecturas monitor</td>
                                <td scope="row">0.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura mínima del monitor</td>
                                <td scope="row">1.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left"># Lecturas tomados del monitor</td>
                                <td scope="row">10</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distancia fuente - monitor(m)</td>
                                <td scope="row">1.224</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>a</th>
                                    <th>Unidad</th>
                                    <th>Distribución de prob.</th>
                                    <th>Valor distribución de prob.</th>
                                    <th>Valor incert. estándar</th>
                                    <th>Contribución % incert. estándar</th>
                                    <th>Unidad incert. estandar</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>                                        
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    
                                </tbody>
                        </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Incert. Comb = </td>
                                <td scope="row" class="text-left">548.2484358</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distribución de prob. =</td>
                                <td scope="row" class="text-left">normal (K=2)</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Factor de cobertura k =</td>
                                <td scope="row" class="text-left">2</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">1.10E+03</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">4.43%</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
            </div>
        </div>              
        <div class="collapse" id="collapseE2">
            <div class="col-6 border">
                <div class="card-body">
                    <h6 class="card-title">Antes del ajuste</h6>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Tasa de dosis VCV (µSv/h)</td>
                                <td scope="row">25000.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura tasa de dosis del monitor (unidad del monitor)</td>
                                <td scope="row">2474.0000</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">D.S. lecturas monitor</td>
                                <td scope="row">0.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura mínima del monitor</td>
                                <td scope="row">1.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left"># Lecturas tomados del monitor</td>
                                <td scope="row">10</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distancia fuente - monitor(m)</td>
                                <td scope="row">1.224</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>a</th>
                                    <th>Unidad</th>
                                    <th>Distribución de prob.</th>
                                    <th>Valor distribución de prob.</th>
                                    <th>Valor incert. estándar</th>
                                    <th>Contribución % incert. estándar</th>
                                    <th>Unidad incert. estandar</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>                                        
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    
                                </tbody>
                        </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Incert. Comb = </td>
                                <td scope="row" class="text-left">548.2484358</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distribución de prob. =</td>
                                <td scope="row" class="text-left">normal (K=2)</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Factor de cobertura k =</td>
                                <td scope="row" class="text-left">2</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">1.10E+03</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">4.43%</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
            </div> 
            <div class="col-6 border">
                <div class="card-body">
                    <h6 class="card-title">Despues del ajuste</h6>
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Tasa de dosis VCV (µSv/h)</td>
                                <td scope="row">25000.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura tasa de dosis del monitor (unidad del monitor)</td>
                                <td scope="row">2474.0000</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">D.S. lecturas monitor</td>
                                <td scope="row">0.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Lectura mínima del monitor</td>
                                <td scope="row">1.00</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left"># Lecturas tomados del monitor</td>
                                <td scope="row">10</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distancia fuente - monitor(m)</td>
                                <td scope="row">1.224</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>a</th>
                                    <th>Unidad</th>
                                    <th>Distribución de prob.</th>
                                    <th>Valor distribución de prob.</th>
                                    <th>Valor incert. estándar</th>
                                    <th>Contribución % incert. estándar</th>
                                    <th>Unidad incert. estandar</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>                                        
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    <tr>
                                        <td scope="row">1.79%</td>
                                        <td>-</td>
                                        <td>
                                        <select class="form-control">
                                            <option disabled value="" selected>Selected</option>
                                            <option value="normal (k=1)">normal (k=1)</option>
                                            <option value="normal (k=2)">normal (k=2)</option>
                                            <option value="normal (k=3)">normal (k=3)</option>
                                            <option value="rectagular">rectagular</option>
                                            <option value="triangular">triangular</option>
                                            <option value="Prob. U">Prob. U</option>
                                        </select>
                                        </td>
                                        <td>2.00</td>
                                        <td>221.864</td>
                                        <td>16.38%</td>
                                        <td>µSv/h</td>
                                    </tr>   
                                    
                                </tbody>
                        </table>
                    </div>                        
                </div>
                <div class="card-deck">
                    <div class="card">
                        <table class="table">
                            <tr>
                                <td scope="row" class="text-left">Incert. Comb = </td>
                                <td scope="row" class="text-left">548.2484358</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Distribución de prob. =</td>
                                <td scope="row" class="text-left">normal (K=2)</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Factor de cobertura k =</td>
                                <td scope="row" class="text-left">2</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">1.10E+03</td>
                                <td scope="row">µSv/h</td>
                            </tr>
                            <tr>
                                <td scope="row" class="text-left">Incert. expan. (95%) - U mon =</td>
                                <td scope="row" class="text-left">4.43%</td>
                            </tr>
                    </table>
                    </div>                        
                </div>
            </div>
        </div> 
    </div>
</div>

<style>
.show {
    display: inline-flex;
}
</style>
<script src="./Public/JS/Insert_Cal_Mon.js"></script>
