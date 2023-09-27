<?php
if (isset($_GET['ano']) && isset($_GET['mes'])) {
    $ano = $_GET['ano'];
    $mes = $_GET['mes'];
} else {
    $ano = date('Y');
    $mes = date('n');
}

// Calcula o primeiro e último dia do mês
$primeiro_dia = mktime(0, 0, 0, $mes, 1, $ano);
$ultimo_dia = mktime(0, 0, 0, $mes + 1, 0, $ano);

// Calcula o mês anterior e o próximo mês
$mes_anterior = date('n', strtotime("-1 month", $primeiro_dia));
$ano_anterior = date('Y', strtotime("-1 month", $primeiro_dia));
$mes_seguinte = date('n', strtotime("+1 month", $primeiro_dia));
$ano_seguinte = date('Y', strtotime("+1 month", $primeiro_dia));
?>

<!DOCTYPE html>
<html>
<head>
    <style>
         th, td {
            text-align: center;
            cursor: pointer;
            width: 40px; /* Defina a largura das células */
            height: 40px; /* Defina a altura das células */
            line-height: 40px; /* Define a altura da linha centralizada */

        }

        a {
            text-decoration: none;
        }
    </style>
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="text-center">
        <a href="?ano=<?php echo $ano_anterior; ?>&mes=<?php echo $mes_anterior; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
        </a>
        <?php echo date('F Y', $primeiro_dia); ?>
        <a href="?ano=<?php echo $ano_seguinte; ?>&mes=<?php echo $mes_seguinte; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </a>
    </div>
        
    <div class="table-responsive table-responsive-sm table-responsive-md justify-content-center"></div>
    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>Domingo</th>
                <th>Segunda-feira</th>
                <th>Terça-feira</th>
                <th>Quarta-feira</th>
                <th>Quinta-feira</th>
                <th>Sexta-feira</th>
                <th>Sábado</th>
            </tr>
        </thead>
        <tbody class='table-success'>
            <?php
            $dia_atual = 1;
            $primeira_semana = true;

            while ($primeiro_dia <= $ultimo_dia) {
                echo "<tr>";

                for ($i = 0; $i < 7; $i++) {
                    if ($primeira_semana && $i < date('w', $primeiro_dia)) {
                        echo "<td></td>";
                    } else {
                        echo "<td>";
                        echo "<a href='dia.php?data=" . date('Y-m-d', $primeiro_dia) . "'>" . date('j', $primeiro_dia) . "</a>";
                        echo "</td>";
                        $primeiro_dia += 86400;
                        $dia_atual++;
                    }
                }

                echo "</tr>";
                $primeira_semana = false;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
