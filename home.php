<?php
    require_once "controller/controllerCalc.php";

    if (!empty($_SESSION['resultado'])) {
        $value = $_SESSION['resultado']." Kg";
        session_unset();
    }else{
        $value = "";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cublog</title>
</head>
<body>
     
    <div class="container-logo">
        <img src="imgs/Cublog-removebg-preview 1.svg" id="logo" alt="Logo do site">   
    </div>   
    <main>
         <div class="cubo">

        </div>
        <form action="controller/controllerCalc.php" method="POST">
            
                <label for="altura" id="qtd">Quantidade</label>
                <input type="text" name="quantidade">
                <label for="altura" id="texte">Altura</label>
                <input type="text" name="alturaa">

                <label for="largura">Largura</label>
                <input type="text" name="largura">

                <label for="profundidade">Profundidade</label>
                <input type="text" name="profunfidadee">

                <label for="cubagem">Fator de Cubagem</label>
                <select name="fatorCub" id="">
                    <option value="300">Modal rodoviário</option>
                    <option value="250">Carga Fracionado</option>
                    <option value="166.7">Modal aeroviário</option>
                    <option value="1000">Modal hidroviário</option>
                </select>
            
                <label for="cubagem">Resultado</label>
                <input type="text" value="<?php echo $value?>">

                <input type="submit" name="env" value="Calcular" class="calc">
  
        </form>
    </main>
    <article class="copy">
        <section>
            <p>
            Com o objetivo de diminuir custos e evitar prejuízos o 
            cálculo de cubagem é usado para se obter o volume que os produtos ocupam dentro do veículo, 
            afinal os produtos podem até ter o mesmo valor porem o seu volume pode variar
            </p>
        </section>
    </article>
    <footer>
        <p>Desenvolvido por Anderson Alves</p>
    </footer>
</body>
</html>

<?php 
    
    
?>