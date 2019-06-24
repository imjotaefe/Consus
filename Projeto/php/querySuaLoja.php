<?php
$querySuaLoja = "SELECT d.*, c.debtor_name, s.store_social_name
            FROM Debt d
            INNER JOIN Debtor c ON d.debtor_id = c.debtor_cpf
            INNER JOIN Store s ON d.store_id = s.store_id
            WHERE s.store_id = '{$storeId}'
            ORDER BY d.debt_id";
$dadosSuaLoja = mysqli_query($con, $querySuaLoja) or die($mysqli->error);


