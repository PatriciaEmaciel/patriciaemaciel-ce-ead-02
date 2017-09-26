<?php

    $banda = $_POST['nome'];
    $imagem =  $_POST['imagem'];
    $integ1 = $_POST['integ1'];
    $data1 =  $_POST['data1'];
    $instru1 = $_POST['instru1'];
    $integ2 = $_POST['integ2'];
    $data2 =  $_POST['data2'];
    $instru2 = $_POST['instru2'];
    $integ3 = $_POST['integ3'];
    $data3 =  $_POST['data3'];
    $instru3 = $_POST['instru3'];
    $biografia =  $_POST['biografia'];
    $corFundo = $_POST['corFundo'];
    $corTexto = $_POST['corTexto'];
    ?>
        
    <html>
         <head>
             <meta charset = 'utf-8'>
             <title> 
                 Trabalho EAD 02 PHP
             </title>
             
             <style>
                 .corpo{
                     
                     background : <?php echo $corFundo ?>;
                     color : <?php echo $corTexto ?>;
                        }
                 .titulo{
                     text-align : center;
                         }
                 #img {
                     display: block;
                     margin-left: auto;
                     margin-right: auto;
                         }
 
                 #tabela {
                     margin: 0 auto;
                 }
             </style>
         </head>
         <body class="corpo">
         
           
         <h1 class="titulo"><?php echo $banda ?></h1>
             <img id="img" src="<?php echo $imagem ?>" alt="<?php echo $banda ?>" title="<?php echo $banda ?>"> <br>
             
             
         </body>
         
         <hr>

<h1> Biografia </h1>


<?php echo $biografia ?>

<hr> 

<div>
    <table id="tabela" border="2px solid" >
        <th>Integrante(Nome)</th>
        <th>Data de Nascimento</th>
        <th>Instrumento</th>
        <tr>
            <td><?php echo $integ1?></td>
            <td><?php echo $data1 ?></td>
            <td><?php echo $instru1 ?></td>
        </tr>
        <tr>
            <td><?php echo $integ2 ?></td>
            <td><?php echo $data2 ?></td>
            <td><?php echo $instru2 ?></td>
        </tr>
        <tr>
            <td><?php echo $integ3?></td>
            <td><?php echo $data3?></td>
            <td><?php echo $instru3 ?></td>
        </tr>
    </table>
</div>
</html