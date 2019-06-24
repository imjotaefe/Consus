<?php
    include_once("connection.php");   //estabelece conexão

    header ('Content-type: text/html; charset=utf-8');

    if(isset($_POST["id"]))     //verifica se a variável existe, ou tem valor diferente de null
    {   // select que vai consultar no banco
        $queryDeleteI = "DELETE FROM Debt
                WHERE debt_id= '".addslashes($_POST["id"])."'";   
        //fim do select----------------------
        $dados = mysqli_query($con, $queryDeleteI) or die($mysqli->error); //envia para o banco a query

        $recebeJson = [ok];  //estabelece como um array
        array_push($recebeJson,$data);
        echo json_encode($recebeJson, JSON_FORCE_OBJECT); //escreve na pagina um objeto json
    }
    // tira o resultado da busca da memória
    mysqli_close($con);
