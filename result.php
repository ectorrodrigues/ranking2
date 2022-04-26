<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="html2canvas.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Jquery and Ajax Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style type="text/css">

      @import url('inc/Exo2-BoldItalic.ttf');

      body{
        background-color: #ddd;
      }

      #capture{
        background-image: url('inc/bg.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        font-family: 'Exo 2', sans-serif;
        font-style: italic;
        font-weight: 700;
        margin-left:100px;
      }

      #canvas{
        margin-left:100px;
      }

      .btn{
        cursor:pointer
      }

      .col-1, .col-2, .col-3, .col-4{
        padding-top: 350px;
        display: inline-block !important;
      }

      .col-1{
        padding-top: 340px;
      }


      .col-1{
        width: 24%;
        margin-left: 8%;
        color: #fff;
        font-weight: 700;
        font-size: 18px;
        vertical-align: text-top;
        line-height: 30px;
      }

      .col-2{
        width: 15%;
        color:#fff;
        font-size: 18px;
        vertical-align: text-top;
        line-height: 30px;
        padding-left:10px;
        text-align: right;
      }

      .col-3{
        width: 20%;
        color: #fff;
        font-size: 18px;
        vertical-align: text-top;
        line-height: 30px;
        text-align: right;

      }

      .col-4{
        width: 18%;
        color: #fff;
        font-size: 18px;
        vertical-align: text-top;
        line-height: 30px;
        text-align: right;

      }

      .label{
        font-size:18px;
        font-weight: 400;
        color:#fff !important;
        line-height: 1px;
        margin-bottom: -20px;
      }

      .opacity-0{
        opacity: 0;
      }

      .date{
        position: absolute;
        margin-top: 1150px;
        margin-left: 65px;
        font-size: 32px;
        color: #e1b66b;
        text-align: right;
      }

      .btn{
        padding: 25px 35px;
        float: left;
        position: absolute;
        border-radius: 40px;
        background-color: #64c832;
        border:none;
        color:#fff;
        font-family: 'Exo 2', sans-serif;
        font-style: italic;
        font-size: 20px;
        font-weight: 400;
        width: 300px;
        text-align: center;
        margin-top:330px;
        margin-left: 950px;
      }

      .btn:hover{
        color:#000;
      }

      .fa{
        margin-right: 5px;
      }

      /*.col-1 .first{
        display: block;
        height: 50px;
        line-height: 60px;
        background-color: #146E37;
        margin: 10px 0;
        padding: 8px 5px 10px 5px;
        border-radius: 5px;
      }*/

      .foto {
        display: inline-block;
        background-position: center;
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 10px;

      }

      .texto {
        display: inline-block;
        /*width: 130px;*/
        height: 50px;
        padding-left: 10px;
        color:#fff;
      }

      .texto p {
        font-size: 16px;
        line-height: 18px;
        margin: 0;
        padding: 0;
      }
      .texto span {
        font-size: 12px;
      }

      .nometitulo{
        color:#fff;
        font-size: 16px !important;
      }

      .receber{
        line-height: 76px;
        font-size: 17px;
        margin-bottom:13px;
      }
      .recebido{
        line-height: 75px;
        margin-bottom:13px;
      }
    </style>

  </head>
  <body>

    <?php

    $cidades = $_POST['cidades'];
    $cidades = nl2br($cidades);

    $totalreceber = $_POST['totalreceber'];
    $totalreceber = nl2br($totalreceber);

    $totalrecebido = $_POST['totalrecebido'];
    $totalrecebido = nl2br($totalrecebido);

    $porcentagem = $_POST['porcentagem'];
    $porcentagem = nl2br($porcentagem);

    $data = $_POST['data'];

    /*$nome1    = $_POST['nome1'];
    $cargo1   = $_POST['cargo1'];
    $agencia1 = $_POST['agencia1'];
    $receber1 = $_POST['receber1'];
    $recebido1 = $_POST['recebido1'];

    $nome2    = $_POST['nome2'];
    $cargo2   = $_POST['cargo2'];
    $agencia2 = $_POST['agencia2'];
    $receber2 = $_POST['receber2'];
    $recebido2 = $_POST['recebido2'];

    $nome3    = $_POST['nome3'];
    $cargo3   = $_POST['cargo3'];
    $agencia3 = $_POST['agencia3'];
    $receber3 = $_POST['receber3'];
    $recebido3 = $_POST['recebido3'];*/

    $_UP['folder']	= 'img/';

    /*$foto1		= $_FILES['foto1']['name'];
		$foto1		= uniqid().'_'.$foto1;
		move_uploaded_file($_FILES['foto1']['tmp_name'], $_UP['folder'] . $foto1);

    $foto2		= $_FILES['foto2']['name'];
		$foto2		= uniqid().'_'.$foto2;
		move_uploaded_file($_FILES['foto2']['tmp_name'], $_UP['folder'] . $foto2);

    $foto3		= $_FILES['foto3']['name'];
		$foto3		= uniqid().'_'.$foto3;
		move_uploaded_file($_FILES['foto3']['tmp_name'], $_UP['folder'] . $foto3);*/

     ?>

    <script type="text/javascript">
    function createimg(){
      html2canvas(document.querySelector("#capture")).then(canvas => {
          document.body.appendChild(canvas);
      });

      var delayInMilliseconds = 300; //1 second

        setTimeout(function() {
          var elementocap = document.getElementById("capture");
          elementocap.style.display = 'none';

          var link = document.createElement('a');
          link.download = 'ranking.png';
          link.href = document.getElementById('canvas').toDataURL()
          link.click();

        }, delayInMilliseconds);



    }
    </script>

    <button type="button" name="button" class="btn" onclick="createimg()"><i class="fa fa-arrow-down" aria-hidden="true"></i> Baixar Imagem</button>

    <div id="capture" style="width:700px; height: 1244px;">

      <div class="date">
        <?= $data ?>
      </div>

      <div class="col-1">
        <div class="label opacity-0">.</div><br>
        <!--<div class="first">
                  <div class=" foto" style="background-image: url('img/ //$foto1 ');">
                  </div>
                  <div class="texto">
                    <p class="nome"><span class="nometitulo"> //$nome1 </span><br>
                      <span class="cargo"> //$cargo1 </span><br>
                      <span class="agencia">// $agencia1 </span>
                    </p>
                  </div>
              </div>

              <div class="first">
                  <div class=" foto" style="background-image: url('img/ //$foto2 ');">
                  </div>
                  <div class="texto">
                    <p class="nome"><span class="nometitulo">//$nome2 </span><br>
                      <span class="cargo"> //$cargo2 </span><br>
                      <span class="agencia">//$agencia2 </span>
                    </p>
                  </div>
              </div>

              <div class="first">
                  <div class=" foto" style="background-image: url('img/// $foto3 ');">
                  </div>
                  <div class="texto">
                    <p class="nome"><span class="nometitulo">// $nome3 </span><br>
                    <span class="cargo"> //$cargo3 </span><br>
                    <span class="agencia">// $agencia3 </span></p>
                  </div>
              </div>-->
        <?= $cidades ?>
      </div>

      <div class="col-2">
        <!--<div class="label" style="margin-top: 0px !important;">Incremento Realizado</div><br>-->
        <!--<div class="receber">
          //$receber1 ?><br>
           //$receber2 ?><br>
          // $receber3 ?><br>
        </div>-->
        <?= $totalreceber ?>
      </div>

      <div class="col-3">
        <!--<div class="label">Meta Incremento</div><br>-->
        <!--<div class="recebido">
           //$recebido1 ?><br>
           //$recebido2 ?><br>
         //$recebido3 ?><br>
        </div>-->
        <?= $totalrecebido ?>
      </div>
      <?php $bg_color= ''; ?>
      <div class="col-4"  style="background-color:<?=$bg_color?>" >
          <?= $porcentagem ?>
      </div>

    </div>


    <?php
        $quantidade = '19';


          for ($i=0; $i<$quantidade; $i++):

            if ($porcentagem >= 100){
              $bg_color= "8cc63f";

            }else if ($porcentagem < 100 && $porcentagem >= 50) {
              $bg_color= "ffff00";

            } else if ($porcentagem < 50 && $porcentagem > 0) {
              $bg_color= "fbb03b";

            } else if ($porcentagem <= 0) {
              $bg_color= "ff0000";
            }


          endfor;
     ?>





<!--
  <div class="btn" onclick="createimg()">Gerar Imagem</div>
  </div>
-->


  </body>
</html>
