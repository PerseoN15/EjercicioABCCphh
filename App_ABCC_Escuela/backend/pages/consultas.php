<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .table-container {
            width: 90%;
            margin: 20px auto;
        }
        .table {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .table th {
            background-color: #776dfc;
            color: #fff;
            font-weight: bold;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-search {
            background-color: #000;
            color: #fff;
            border-radius: 20px;
        }
        .btn-search:hover {
            background-color: #00fbff;
            color: #000;
        }
        h3 {
            display: inline-block;
            padding: 8px 15px;
            border: 2px solid #776dfc;
            border-radius: 20px;
            background-color: #000;
            color: #776dfc;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php require_once('menu_principal.php'); ?>

<div class="text-center my-4">
    <h3>Listado de ALUMNOS</h3>
</div>

<div class="table-container">
    <form action="#" method="GET" class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Num. Control</th>
                    <th>Nombre</th>
                    <th>Primer Ap</th>
                    <th>Segundo Ap</th>
                    <th>Edad</th>
                    <th>Semestre</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="buscar_num_control" class="form-control" placeholder="Buscar..."></td>
                    <td><input type="text" name="buscar_nombre" class="form-control" placeholder="Buscar..."></td>
                    <td><input type="text" name="buscar_primer_ap" class="form-control" placeholder="Buscar..."></td>
                    <td><input type="text" name="buscar_segundo_ap" class="form-control" placeholder="Buscar..."></td>
                    <td><input type="text" name="buscar_edad" class="form-control" placeholder="Buscar..."></td>
                    <td><input type="text" name="buscar_semestre" class="form-control" placeholder="Buscar..."></td>
                    <td><input type="text" name="buscar_carrera" class="form-control" placeholder="Buscar..."></td>
                    <td><button type="submit" class="btn btn-search">Buscar</button></td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

<div class="table-container">
    <?php
    include('../controllers/controller_alumno.php');
    $alumnoDAO = new AlumnoDAO();

    $filtro = "";
    if ($_GET) {
        $filtro = " WHERE 1=1";
        if (!empty($_GET['buscar_num_control'])) {
            $filtro .= " AND Num_Control LIKE '%".$_GET['buscar_num_control']."%'";
        }
        if (!empty($_GET['buscar_nombre'])) {
            $filtro .= " AND Nombre LIKE '%".$_GET['buscar_nombre']."%'";
        }
        if (!empty($_GET['buscar_primer_ap'])) {
            $filtro .= " AND Primer_Ap LIKE '%".$_GET['buscar_primer_ap']."%'";
        }
        if (!empty($_GET['buscar_segundo_ap'])) {
            $filtro .= " AND Segundo_Ap LIKE '%".$_GET['buscar_segundo_ap']."%'";
        }
        if (!empty($_GET['buscar_edad'])) {
            $filtro .= " AND Edad LIKE '%".$_GET['buscar_edad']."%'";
        }
        if (!empty($_GET['buscar_semestre'])) {
            $filtro .= " AND Semestre LIKE '%".$_GET['buscar_semestre']."%'";
        }
        if (!empty($_GET['buscar_carrera'])) {
            $filtro .= " AND Carrera LIKE '%".$_GET['buscar_carrera']."%'";
        }
    }

    $datos = $alumnoDAO->mostrarAlumnos($filtro);
    if (mysqli_num_rows($datos) > 0) {
        echo '<table class="table table-striped table-hover">';
        echo '<thead>
                <tr>
                    <th>Num. Control</th>
                    <th>Nombre</th>
                    <th>Primer Ap</th>
                    <th>Segundo Ap</th>
                    <th>Edad</th>
                    <th>Semestre</th>
                    <th>Carrera</th>
                </tr>
              </thead>
              <tbody>';

        while ($fila = mysqli_fetch_assoc($datos)) {
            printf(
                "<tr>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                </tr>",
                $fila['Num_Control'],
                $fila['Nombre'],
                $fila['Primer_Ap'],
                $fila['Segundo_Ap'],
                $fila['Edad'],
                $fila['Semestre'],
                $fila['Carrera']
            );
        }

        echo '</tbody></table>';
    } else {
        echo "<p class='text-center' style='color: #776dfc;'>No se encontraron resultados</p>";
    }
    ?>
</div>

</body>
</html>
