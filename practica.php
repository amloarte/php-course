<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Ejemplos PHP</title>
</head>

<body>
    <div class="container text-center">
        <h1>Practica PHP arrays </h1>
        <hr>
        <p>Accel Loarte</p>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                         <h3 class="card-title text-center">Array Multidimensional <small>(for)</small></h3>
                        <?php 
                            $personas = array (
                                array("ACCEL",22,"LOJA"),
                                array("JULIO",52,"LOJA"),
                                array("JOSE",56,"LOJA"),
                                array("MANUEL",22,"LOJA"),
                            );
                            $size_row =  count($personas);
                            for ($row = 0; $row < $size_row; $row++) {
                                echo "<b>Persona $row</b>";
                                echo "<ul>";
                                $size_col =  count($personas[$row]);
                                for ($col = 0; $col < $size_col ; $col++) {
                                    echo "<li>".$personas[$row][$col]."</li>";
                                }
                                echo "</ul>";
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                         <h3 class="card-title text-center">Array Multidimensional <small>(foreach)</small></h3>
                        <?php 

                            $peliculas = array(
                                array(
                                    "TITULO" => "AVENGERS",
                                    "DIRECTOR" => "Alfred ",
                                    "AÑO" => 2017
                                ),
                                array(
                                    "TITULO" => "LA VIDA ES BELLA",
                                    "DIRECTOR" => " Kubrick",
                                    "AÑO" => 1999
                                ),
                                array(
                                    "TITULO" => "COVID-19",
                                    "DIRECTOR" => "CHINA",
                                    "AÑO" => 2019
                                )
                            );

                            foreach ( $peliculas as $pelicula ) {
                                echo '<div class="mb-4">';
                                foreach ( $pelicula as $key => $value ) {
                                    echo "<li><b>$key</b>: $value</li>";
                                }
                                 echo '</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-center card-body">Función que recibe un array como parametro</h3>
                    <?php 
                        $semana = array("LUNES", "MARTES", "MIERCOLES", "JUEVES", "VIERNES");
                        semana($semana);
                        function semana($semana){
                            foreach($semana as $dias){
                                echo "$dias<br>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>