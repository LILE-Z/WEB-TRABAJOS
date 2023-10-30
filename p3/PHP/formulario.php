<DOCTYPE html>
    <html>

    <head>
        <title>Formulario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>

        <div class="container">
            <div class="principal">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h2 class="text-center">Ejemplo Formulario</h2>
                        <form action="procesar.php" method="GET">
                            <h5>******Text Box******</h5>
                            <div>
                                <label class="email">Email</label>
                                <input class="form-control" type="text" name="email" placeholder="Email">
                            </div>
                            <div>
                                <label class="form-label">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                            <div>
                                <input class="form-control" type="hidden" name="oculto" value="1234"></input>
                            </div>


                            <hr>
                            <h5>******Check Box******</h5>
                            <div>
                                <input class="form-check-input" type="checkbox" name="genero" value="Mujer">Mujer</input>
                                <input class="form-check-input" type="checkbox" name="genero" value="Hombre">Hombre</input>
                            </div>
                            <p>Lenguajes de progrmacion</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lenguajes[]" value="PHP">PHP</input>
                                <label class="form-check form-check-inline">PHP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lenguajes[]" value="Java">Java</input>
                                <label class="form-check form-check-inline">Java</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lenguajes[]" value="Python">Python</input>
                                <label class="form-check form-check-inline">Python</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lenguajes[]" value="C#">C#</input>
                                <label class="form-check form-check-inline">C#</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lenguajes[]" value="JavaScript">JavaScript</input>
                                <label class="form-check form-check-inline">JavaScript</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="lenguajes[]" value="C++">C++</input>
                                <label class="form-check form-check-inline">C++</label>
                                <input type="submit" name="submit" value="procesar" class="btn btn-primary">
                            </div>
                            <hr>
                            <p>Construccion dinamica de checkbox</p>
                            <?php
                            $lenguajes = array('PHP', 'Java', 'Python', 'C#', 'JavaScript', 'C++');
                            foreach ($lenguajes as $lenguaje) {
                            ?>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="lenguajes[]" value="<?php echo $lenguaje; ?>"><?php echo $lenguaje; ?></input>
                                    <label class="form-check form-check-inline"><?php echo $lenguaje; ?></label>
                                </div>
                            <?php
                            }
                            ?>
                            <h5>Radio Button</h5>
                            <div>
                                <input type="radio" name="numeros" value="uno" checked>UNO</input>

                                <input type="radio" name="numeros" value="dos">Dos</input>

                                <input type="radio" name="numeros" value="uno">Tres</input>
                            </div>
                            <hr>
                            <p> <strong>Seleccone una moneda</strong></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="moneda" value="mx" checked>
                                <label class="form-check-input form-check-inline">Peso MX</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="moneda" value="AM">
                                <label class="form-check-input form-check-inline">Dolar</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="moneda" value="can">
                                <label class="form-check-input form-check-inline">Dolar Can</label>
                            </div>
                            <br>
                            <hr>
                            <h5>ChckeBox/Radio Button</h5>
                            <div>
                                <div class="form-check form-switch">
                                    <input class=" form-check-input" type="checkbox" name="ser[]" value="limp" checked>
                                    <label class="form-check form-check-inline">Servicio de limpieza</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class=" form-check-input" type="checkbox" name="ser[]" value="dd">
                                    <label class="form-check form-check-inline">Disco Duro</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class=" form-check-input" type="checkbox" name="ser[]" value="res">
                                    <label class="form-check form-check-inline">Respaldo</label>
                                </div>

                                <hr>

                                <div class="form-check form-switch">
                                    <input class=" form-check-input" type="radio" name="num" value="1" checked>
                                    <label class="form-check form-check-inline">Uno</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class=" form-check-input" type="radio" name="num" value="limp">
                                    <label class="form-check form-check-inline">Dos</label>
                                </div>
                                <hr>
                                <h5>Text Area</h5>
                                <div>
                                    <label class="form-label">Eemplo de Text Area</label>
                                    <textarea class="form-control" name="comentarios" rows="5"></textarea>
                                </div>
                                <hr>
                                <h5>Select</h5>
                                <div>
                                    <select class="form-select" name="valores">
                                        <option value="1">Opcion 1</option>

                                        <option value="2">Opcion 2</option>
                                        <option value="3">Opcion 3</option>
                                        <option value="4">Opcion 4</option>
                                        <option value="5">Opcion 5</option>
                                    </select>
                                </div>

                            </div>
                        </form>







                    </div>
                    <div class="col-1"></div>


                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    </html>
