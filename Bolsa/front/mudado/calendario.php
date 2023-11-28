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
        th,
        td {
            text-align: center;
            cursor: pointer;
            width: 100px;
            height: 80px;
        }

        td a {
            text-decoration: none;
            color: black;
        }
    </style>
    <script>
        var currentBlueCell = null; // Variável para rastrear a célula atualmente azul
        var currentDate = new Date(); // Obtém a data atual

        function toggleCellColor(cell) {
            if (currentBlueCell !== null) {
                currentBlueCell.style.backgroundColor = ''; // Limpa a célula anterior
            }

            if (cell.style.backgroundColor !== 'blue') {
                cell.style.backgroundColor = 'blue'; // Define a nova célula como azul
                currentBlueCell = cell; // Atualiza a célula atualmente azul
            } else {
                currentBlueCell = null; // Se a célula já estiver azul, limpa a célula atualmente azul
            }
        }
    </script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="text-center">
        <a href="?ano=<?php echo $ano_anterior; ?>&mes=<?php echo $mes_anterior; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
            </svg>
        </a>
        <?php echo date('F Y', $primeiro_dia); ?>
        <a href="?ano=<?php echo $ano_seguinte; ?>&mes=<?php echo $mes_seguinte; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </a>
    </div>
    <div class="container">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th class="align-middle text-center">Domingo</th>
                    <th class="align-middle text-center">Segunda-feira</th>
                    <th class="align-middle text-center">Terça-feira</th>
                    <th class="align-middle text-center">Quarta-feira</th>
                    <th class="align-middle text-center">Quinta-feira</th>
                    <th class="align-middle text-center">Sexta-feira</th>
                    <th class="align-middle text-center">Sábado</th>
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
                            echo "<td onclick=\"toggleCellColor(this);\">";
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

        <div class="row justify-content-center">
            <div class="col-8">
                <button id="visualizarDataSelecionada" class="form-control bg-success" style="display: none;">Visualizar Data Selecionada</button>
            </div>
        </div>
        <script>
            // Selecione o botão "Visualizar Data Selecionada"
            var btnVisualizarData = document.getElementById('visualizarDataSelecionada');

            // Função para redirecionar para "dia.php" com a data selecionada
            function redirecionarParaDiaPHP() {
                if (currentBlueCell !== null) {
                    var dataSelecionada = currentBlueCell.firstChild.innerHTML; // Obtém o dia selecionado
                    var dataFormatada = "<?php echo $ano ?>" + "-" + "<?php echo $mes ?>" + "-" + dataSelecionada;
                    window.location.href = "dia.php?data=" + dataFormatada;
                }
            }

            // Quando uma célula é selecionada, mostre o botão "Visualizar Data Selecionada"
            function toggleCellColor(cell) {
                if (currentBlueCell !== null) {
                    currentBlueCell.style.backgroundColor = ''; // Limpa a célula anterior
                }

                if (cell.style.backgroundColor !== 'blue') {
                    cell.style.backgroundColor = 'blue'; // Define a nova célula como azul
                    currentBlueCell = cell; // Atualiza a célula atualmente azul
                    btnVisualizarData.style.display = 'block'; // Mostra o botão
                } else {
                    currentBlueCell = null; // Se a célula já estiver azul, limpa a célula atualmente azul
                    btnVisualizarData.style.display = 'none'; // Oculta o botão
                }
            }

            // Adicione um ouvinte de evento ao botão "Visualizar Data Selecionada"
            btnVisualizarData.addEventListener('click', redirecionarParaDiaPHP);
        </script>
    </div>
</body>

</html>