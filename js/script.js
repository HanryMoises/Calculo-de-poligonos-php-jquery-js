$(document).ready(() => {
    var aux;
    $("#btn").prop("disabled", true);
    // quad
    $("#quadrado").click(() => {
        aux = $("#quadrado").val();
        $("#circulo").prop('disabled', true);
        $("#trapezio").prop('disabled', true);
        alert("Sua fígura é o: " + aux);
        $("#btn").prop("disabled", false);
    })

    // circulo
    $("#circulo").click(() => {
        aux = $("#circulo").val();
        $("#quadrado").prop('disabled', true);
        $("#trapezio").prop('disabled', true);
        alert("Sua fígura é o: " + aux);
        $("#btn").prop("disabled", false);
    })

    // circulo
    $("#trapezio").click(() => {
        aux = $("#trapezio").val();
        $("#quadrado").prop('disabled', true);
        $("#circulo").prop('disabled', true);
        alert("Sua fígura é o:" + aux);
        $("#btn").prop("disabled", false);
    })


    // submit
    $("#btn").click(() => {
        // alert('ok');
        $("#btn").val(aux);
        // alert($("#btn").val());
        $("#btn").submit();
    })

    // página figura.php

    // circulo
    if ($("#tf").val() == "circulo") {
        $("#l2").hide();
        $("#f2").hide();
        $("#l3").hide();
        $("#f3").hide();
        $("#l4").hide();
        $("#f4").hide();
        $("#l5").hide();
        $("#f5").hide();
    } else if ($("#tf").val() == "quadrado") {
        // quadrado
        $("#f3").hide();
        $("#l3").hide();
        $("#f4").hide();
        $("#l4").hide();
        $("#f5").hide();
        $("#l5").hide();
        $("#l6").hide();
        $("#f6").hide();
    } else if ($("#tf").val() == "trapezio") {
        // // trapezio
        $("#f2").hide();
        $("#l2").hide();
        $("#f6").hide();
        $("#l6").hide();
    }

    // Página tabela
    $("#h_fig").click(() => {
        if(confirm("Sair dessa página ?")===true){
            window.location.href = "index.php";
        }else{
            return;
        }
    });
})