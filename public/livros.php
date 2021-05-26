<!DOCTYPE html>

<head>
    <style>
        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>

<html>

<body>
    <div class="content">
        <h1>Bibliófilo's</h1>

        <h2>Livros</h2>
        <?php

        $CREATE = 'CREATE TABLE livros (id INT AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(30), autor VARCHAR(30),
classificacao VARCHAR(10), paginas INT NOT NULL)';


        $INSERT ="INSERT INTO livros (titulo, autor,classificacao) VALUES (
    'Alice no país das maravilhas', 'Charles Lutwidge Dodgson', 'infantil', 198),
('Diablo','Nate Kenyon','terror', 245)";


        $titulo = 'titulo';
        $autor = 'autor';
        $classificacao = 'classificacao';
        $paginas = 'paginas';

        $CABECALHO =
            '<table>' .
            '    <tr>' .
            '        <th>' . $titulo . '</th>' .
            '        <th>' . $autor . '</th>' .
            '        <th>' . $classificacao . '</th>' .
            '<th>' . $paginas . '</th>' .
            '    </tr>';

            $SQL =
            'SELECT ' . $titulo .
            '     , ' . $autor .
            '     , ' . $classificacao .
            '     , ' . $paginas.
            '  FROM `livros`';


        function executeQuery ($conexao,$query) {
            $resultado = mysqli_query($conexao, $query);
            if (!$resultado) {
                echo mysqli_error($conexao);
             }
             else return $resultado;
         }


        require 'mysql_server.php';

        $conexao = RetornaConexao();

        executeQuery($conexao, $CREATE);
        executeQuery($conexao, $INSERT);
        $resultado = executeQuery($conexao, $SQL);


        echo $CABECALHO;

        if (mysqli_num_rows($resultado) > 0) {

            while ($registro = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';

                echo '<td>' . $registro[$titulo] . '</td>' .
                    '<td>' . $registro[$autor] . '</td>' .
                    '<td>' . $registro[$classificacao] . '</td>';
                    '<td>' . $registro[$paginas] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '';
        }
        FecharConexao($conexao);
        ?>
    </div>
</body>
</html>