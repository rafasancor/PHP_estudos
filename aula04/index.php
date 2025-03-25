<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Aula 04 - Home</h1>
    <p>
        <a href="exemplo.php">Mais Exemplos de Array</a>
    </p>
    
    <h2>Exemplos de Array em PHP</h2>
    
    <?php 

        //Criando array usando a função 'array'
        $frutas = array("Maçâ", "Pera", "Laranja"); // array inicializado 
        //indices         0        1        2

        $cidades =  [
                    "Curitiba", 
                    "São Paulo", 
                    "Porto Alegre", 
                    "Florianópolis"
                    ];

        //criando array usando [] para indicar indices automáticos
        $idades [] = 18; // 0
        $idades [] = 38; // 1
        $idades [] = 33; // 2
        $idades [] = 19; // 3
        $idades [] = 25; // 4

        //utilizando o laço for para salvar novas idades no array
        for ($i=10; $i<=20; $i++) {

            //a cada interação do laço for, iremos adicionar o valor de $i como
            //uma nova idade para o array 'idades'
            $idades[] = $i;

        }

        //mostrar valor da posição 1 do array 'frutas'
        echo "<p>Fruta salva na posição 1 do array 'frutas': " . $frutas[1] . "</p>";

        //utilizando o laço 'for' para percorrer o array 'cidades':

        echo"<h3>Mostrando valores do array 'cidades' usando o FOR:</h3>";

        $tamanho = count($cidades); //armazenar o tamanho do array 'cidades'
        for ($i=0; $i<$tamanho; $i++) {

            echo $cidades[$i] . "<br>";
        }

        //criando array associativo $cliente
        $cliente =  [
                        "nome"  => "Rafael dos Santos",
                        "idade" => 21,
                        "email" => "rcorreia@cs.up.edu.br"
                    ];

        echo "<h3>Mostrando valores do array 'idades' usando o FOREACH</h3>";

        //forma simples do FOREACH
        foreach($idades as $idade_atual){
            echo "Idade: " . $idade_atual . "<br>";
        }

        //utilizando o laço FOREACH na sua forma completa

        echo "<h3>Mostrando valores do array 'cliente' usando o FOREACH completo</h3>";

        foreach($cliente as $chave => $valor) {
            //ucfirst = torna a inicial da string maiúscula
            echo ucfirst($chave) . ": " . $valor . "<br>";
        }


    ?>
    
    <footer>
        <p>&copy; 2025 Aula de PHP - Todos os direitos reservados.</p>
    </footer>
</body>
</html>