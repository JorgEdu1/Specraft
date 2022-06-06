
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="S.png">
    <link rel="stylesheet" type="text/css" href="teste.css">
    <title>Elden Ring</title>
</head>
<body class="cor">
<header class="cabeca">
        <a href="index.html"><img class="cabeca-img" src="SPECRAFT.png" alt="Logo do Wego"></a>
        <nav class="cabeca-menu">
            <a class="cabeca-it-menu" href="">Sobre o Site</a>
        </nav>
    </header>
    <div class="cont"></div>
        <nav class="guia">
            <div> <img class="tr" src="elden persona.webp" alt=""></div>
           <div> <form method="POST" action="elden_calc.php">
               <p>League of Legends é um jogo de estratégia em que duas equipes de<br> cinco poderosos Campeões se enfrentam para destruir a base uma da<br>    outra. Escolha entre mais de 140 Campeões para realizar jogadas épicas,<br> assegurar abates e destruir torres conforme você luta até a vitória.</p><br>
                <p>Qual vai ser o seu tipo de computador?(<a style="background= blue" href="sobre.html ">Clique aqui</a> e saiba mais)</p><br>
                <center><select name="op" >
                    <option>Basico</option>
                    <option>Moderado</option>
                    <option>Avançado</option>
                </select>
                </center>
                <br>
             <center>   <input class="neon-btn" type="submit" value="Proximo"></center>
            </form>
            <br>
            <p style="color: white;">
<?php



if($_POST){
    $nome = $_POST['op'];
}

switch ($nome) {
    case 'Basico':
        echo "CPU: I3 9100F <br>Memoria: 16GB de ram DDR4(Preferencia para 2x8GB)<br>GPU: GEFORCE GTX 1050TI";
        break;
    case 'Moderado':
        echo "CPU: i3 10100F <br>Memoria: 16GB de ram DDR4(Preferencia para 2x8GB)<br>GPU: GEFORCE GTX 1650";
        break;
    case 'Avançado':
        echo "CPU: Rizen 5 5600X <br>Memoria: 16GB de ram DDR4(Preferencia para 2x8GB)<br>GPU: GEFORCE RTX 2060 ";
        break;
}


?>
</p>
        </div>
        </nav>
        



<footer class="rodape">
<div class="cont"></div>
        <img class="rodape-img" src="SPECRAFT.png" alt="Logo Fina do WEGO">
    </footer>
</html>
</body>
</html>
