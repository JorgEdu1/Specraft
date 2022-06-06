
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shorcut icon" href="S.png">
    <link rel="stylesheet" type="text/css" href="teste.css">
    <title>Valorant</title>
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
            <div> <img class="tr" src="vava persona.png" alt=""></div>
           <div> <form method="POST" action="vava_calc.php">
               <p>Duas equipes de cinco jogam uma contra a outra, e os jogadores<br> assumem o papel de "agentes" com habilidades únicas. No modo<br>   de jogo principal, a equipe atacante tem uma bomba, chamada Spike,<br> que eles precisam plantar em um local.</p><br>
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
        echo "CPU: Athlon 3000G <br>Memoria: 8GB de ram DDR4(Preferencia para 2x4gb)<br>GPU: Vega 3(Integrado do Processador)";
        break;
    case 'Moderado':
        echo "CPU: Ryzen 3 3200G <br>Memoria: 16GB de ram DDR4(Preferencia para 2x8GB)<br>GPU: Vega 8(Integrado do Processador)";
        break;
    case 'Avançado':
        echo "CPU: I3 10100F <br>Memoria: 16GB de ram DDR4(Preferencia para 2x8GB)<br>GPU: GEFORCE GTX 1050TI";
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
