<?php
// echo $_POST['tabelaf'];

include 'class.php';
include 'bootstrap/header.php';
session_start();

// array das figuras e seus dados
if (!isset($_SESSION['figuras'])) {
    $_SESSION['figuras'] = array();
}

if(isset($_POST['tabelaf'])){
    switch ($_POST['tabelaf']) {
        case "quadrado":
            $q = new Quadrado($_POST['tabelaf'], $_POST['apelido'], $_POST['largura']);
            number_format($q->SetArea(), 0, ".", ".");
            array_push($_SESSION['figuras'], $q);
            break;
    
        case "circulo":
            $q = new Circulo($_POST['tabelaf'], $_POST['apelido'], $_POST['raio']);
            number_format($q->SetArea(), 2, ".", ".");
            array_push($_SESSION['figuras'], $q);
            break;
    
        case "trapezio":
            $q = new Trapezio($_POST['tabelaf'], $_POST['apelido'], $_POST['base_maior'], $_POST['base_menor'], $_POST['altura']);
            number_format($q->SetArea(), 0, ".", ".");
            array_push($_SESSION['figuras'], $q);
            break;
    }
}


// echo "<pre>";
// print_r($_SESSION['figuras'])


?>

    <div class="container">
        <div class="row">
            <center>
                <h1 class=" justify-content-center mt-5 mb-5">
                    Lista de Objetos Criados
                </h1>
            </center>
            <div class="col col-sm-4 offset-sm-4">

                <div class="card overflow-auto" style="height: 20rem;">
                    <div class="card-body">

                        <table class="table table-outline  table-bordered">
                            <thead>
                                <tr>

                                    <th scope="col">Tipo</th>
                                    <th scope="col">Apelido</th>
                                    <th scope="col">Área</th>
                                </tr>
                            </thead>
                            <?php foreach ($_SESSION['figuras'] as $f) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $f->Tipo; ?></td>
                                        <td><?php echo $f->Apelido; ?></td>
                                        <td><?php echo $f->Area; ?></td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <center>
                    <button id="h_fig" class="btn btn-outline-danger mt-3 mb-3">
                        Outras fíguras
                    </button>
                </center>
            </div>
        </div>
    </div>

    </div>

    <script src="js/script.js"></script>
<?php
    include 'bootstrap/footer.php';
?>