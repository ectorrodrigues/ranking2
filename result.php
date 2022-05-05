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
        width:1100px; height: 1380px;
      }

      #canvas{
        margin-left:100px;
      }

      .btn{
        cursor:pointer
      }




      .col-1, .col-2, .col-3, .col-4, .col-5, .col-6{
        padding-top: 345.5px;
        font-weight: 400;
        display: inline-block !important;
        font-size: 13px;
        color:#fff;
        vertical-align: text-top;
        line-height: 27px;
        text-align: right;
      }


      .col-1{
        padding-top: 337px;
        width: 20%;
        margin-left: 20.8%;
        text-align: left;
      }

      .col-2{
        width: 8%;
      }

      .col-3{
        width: 8.3%;

      }

      .col-4{
        width: 5%;

      }

      .col-5{
        width: 9%;

      }

      .col-6{
        width: 4%;
        margin-left: 20px;
        text-align: center;
      }

      .titulo1{
        width: 30%;
        padding-left: 4.5%;
      }

      .titulo2{
        width: 16%;
      }

      .titulo3{
        width: 16%;

      }

      .titulo4{
        width: 7%;

      }

      .titulo{
        width: 16%;

      }

      .titulo{
        width: 7%;

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
        margin-left: 257px;
        font-size: 32px;
        color: #e1b66b;
        text-align: right;
        font-weight: 400;
      }

      .btn{
        padding: 25px 30px;
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
        margin-left: 1000px;
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

      .cores div{
        padding: 0 10px 0 10px;
        font-weight: bold;
        background-blend-mode: multiply;
      }

      .verde {
        background-color: #24a224;
      }

      .amarelo {
        background-color: #90a224;
      }

      .laranja {
        background-color: #8c6e31;
      }

      .vermelho {
        background-color: #902824;
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

    $coluna5 = $_POST['coluna5'];
    $coluna5 = nl2br($coluna5);

    $coluna6 = $_POST['coluna6'];
    $coluna6 = nl2br($coluna6);

    $data = $_POST['data'];

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

    <div id="capture" style="width:1080px; height: 1244px;">

      <div class="date">
        <?= $data ?>
      </div>


      <div class="col-1">
        <div class="label opacity-0">.</div><br>
        <?= $cidades ?>
      </div>


      <div class="col-2">
        <?= $totalreceber ?>
      </div>


      <div class="col-3">
        <?= $totalrecebido ?>
      </div>


      <div class="col-4" >
          <?= $porcentagem ?>
      </div>


      <div class="col-5" >
          <?= $coluna5?>
      </div>


      <div class="col-6 cores" >
          <?php
           $exploded = explode("\n",$coluna6);

           /* SORT
           rsort($exploded);
           $arrlength = count($exploded);
           for($x = 0; $x < $arrlength; $x++) {
             echo $exploded[$x].'<br>';
           }
           */

            foreach ($exploded as $exploded_val) {

              if ($exploded_val > 99){
                echo '<div class="verde">'.$exploded_val.'</div>';
              } else if($exploded_val > 49 AND $exploded_val < 100){
                echo '<div class="amarelo">'.$exploded_val.'</div>';
              } else if($exploded_val > -1 AND $exploded_val < 50){
                echo '<div class="laranja">'.$exploded_val.'</div>';
              } else if($exploded_val < 0){
                echo '<div class="vermelho">'.$exploded_val.'</div>';
              }

            }

          ?>
      </div>

    </div>




  </body>
</html>
