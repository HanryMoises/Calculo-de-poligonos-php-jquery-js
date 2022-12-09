<?php
include 'bootstrap/header.php';
?>
<div class="container">
    <div class="row d-flex ">
        <form action="figura.php" method="post">
            <div class="col mt-5 mb-5">
                <center>
                    <h1>Qual forma geométrica deseja representar ?</h1>

                </center>
            </div>
            <div class="col  col-sm-4 offset-sm-4 d-flex border border-dark p-2">
                <!-- quad -->
                <button style=" background:white;" class=" border border-0" w-50name="baum" type="button" id="quadrado" value="quadrado">
                    <img class="w-50" src="img/quadrado.png" alt="">
                </button><br>

                <!-- esf -->
                <button style=" background:white;" class=" border border-0" w-50name="baum" type="button" id="circulo" value="circulo">
                    <img class="w-100" src="img/bola.png" alt="">
                </button><br>

                <!-- trap -->
                <button style=" background:white;" class=" border border-0" w-50name="baum" type="button" id="trapezio" value="trapezio">
                    <img class="w-100" src="img/trapezio.png" alt="">
                </button><br>



            </div>
            <center>
                <button id="btn" class="btn btn-outline-danger mt-5" name="ok">Criar objeto</button>

            </center>



        </form>
    </div>
</div>

<script src="js/script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php
include 'bootstrap/footer.php';
?>