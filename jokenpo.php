<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Davy Jone É O ESKEEEEEEEEEEEEERRRRRR</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <h1 align="center">Pablo, Papel e Obeso</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
            <legend> Opções </legend>
            <table align="center">
                <tr>
                    <td>
                        <button type="submit" name="jo" value="0">
                            <img src="img/jo.jpg" width="150" height="120">
                        </button>
                    </td>
                    <td>
                        <button type="submit" name="ken" value="1">
                            <img src="img/ken.jpg" width="150" height="120">
                        </button>
                    </td>
                    <td>
                        <button type="submit" name="po" value="2">
                            <img src="img/po.jpg" width="150" height="120">
                        </button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
        
    <?php
        //Pontuação

            if(isset($_POST["jo"])){
                jogar($_POST["jo"]);
            
            }else if(isset($_POST["ken"])){
                jogar($_POST["ken"]);
                        
            }else if(isset($_POST["po"])){
                jogar($_POST["po"]);
            }

            function jogar($op){
                //Número aleatório entre 0 e 2
                $lance = rand(0, 2);
                echo " <br> <br> <center> ";
                switch($lance){
                    case 0:
                        echo "<img src='img/jo.jpg' width='150' height='120'>";
                        break;
                    case 1:
                        echo "<img src='img/ken.jpg' width='150' height='120'>";
                        break;
                    case 2:
                        echo "<img src='img/po.jpg' width='150' height='120'>";
                }

                if($op == $lance){
                    echo "<h3> Empate </h3>";

                } else if($op == 0 and $lance == 2){
                    echo "<h3> Você venceu! </h3>";
                    
                }else if($op == 0 and $lance == 2){
                    echo "<h3> Você venceu! </h3>";

                }else if($op == 1 and $lance == 0){
                    echo "<h3> Você venceu! </h3>";
                    
                }else if($op == 2 and $lance == 1){
                    echo "<h3> Você venceu! </h3>";
                    
                }else{
                    echo "<h3> Você perdeu! </h3>";
                    
                }

                echo " </center>";

            } 

    ?>
          <href="https://www.youtube.com/watch?v=-cHSj-VCXAU&pp=ygUOcmluaGEgZGUgYW7Do28%3D"></href>      
</body>
</html>

<!--FIM!!!!-->