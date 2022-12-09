<?php
include 'bootstrap/header.php';

?>
<div class="container">
    <div class="row justiy-content-center">
        <center>
            <h1 class="mt-5 mb-5">Defina os parametros</h1>
        </center>
        <div class="col col-sm-4 offset-sm-4 ">
            <div class="card " style="width:25rem;">
                <div class="card-body">
                    <p class="card-text">
                    <form action="tabela.php" method="post">
                        <input id="tf" type="hidden" name="tabelaf" class="form-control  mt-3" value="<?php echo $_POST['ok']; ?>">
                        
                        <label id="l1" for="f1" class="form-label">Apelido</label>
                        <input id="f1" class="form-control mb-3" type="text" min=1 name="apelido" placeholder="Nome">

                        <label id="l2" for="f2" class="form-label">Largura</label>
                        <input id="f2" class="form-control " type="number" min=1 name="largura" placeholder="cm">

                        <label id="l3" for="f3" class="form-label">Altura</label>
                        <input id="f3" class="form-control  mb-3" type="number" min=1 name="altura" placeholder="cm">

                        <label id="l4" for="f4" class="form-label">Base Maior</label>
                        <input id="f4" class="form-control  mb-3" type="number" min=1 name="base_maior" placeholder="cm">

                        <label id="l5"for="f5" class="form-label">Base Menor</label>
                        <input id="f5" class="form-control  mb-3" type="number" min=1 name="base_menor" placeholder="cm">

                        <label id="l6" for="f6" class="form-label">Raio</label>
                        <input id="f6" class="form-control  mb-3" type="number" min=1 name="raio" placeholder="cm">
                        <hr>
                        <center>
                            <button class="btn btn-outline-danger" type="submit">Salvar</button>
                        </center>
                    </form>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="js/script.js"></script>
<?php
include 'bootstrap/footer.php';
?>