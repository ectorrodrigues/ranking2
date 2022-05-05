
<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Mova" />
    <meta http-equiv="cache-control" content="Public, max-age=31536000">
    <meta http-equiv="Pragma" content="Public">
    <meta http-equiv="Expires" content="Expires: Sat, 13 May 2020 07:00:00 GMT">
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="description" content="Mova Advertising Portfolio and services." />
    <meta name="DC.description" content="Mova Advertising Portfolio and services." />
    <meta name="keywords" content="mova, propaganda, publicidade, marketing, agencia, toledo, design, sites, comunicação, campanhas     " />
    <meta name="DC.subject" content="mova, propaganda, publicidade, marketing, agencia, toledo, design, sites, comunicação, campanhas     " />
    <meta name="robots" content="all" />
    <meta name="rating" content="general" />
    <meta name="DC.title" content="Mova Propaganda" />
    <meta name="theme-color" content="#000000"/>

    <!-- Jquery and Ajax Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="canonical" href="http://localhost:8888/cashbackranking"/>
    <link rel="stylesheet" href="/css/style.css">
    <style type="text/css">

      body{
        background-color:#eee;
      }

      .col-3{
        display: inline-block !important;
      }

      .col-4{
        display: inline-block !important;
      }

      form{
        appearance: none !important;
        -webkit-appearance: none !important;
      }

      textarea{
        appearance: none !important;
        -webkit-appearance: none !important;
        width: 300px !important;
        display: inline-block !important;
        background-color: #fff;
        resize: none;
        outline: none;
        border-radius: 8px;
        min-height: 300px;
        padding: 15px;
      }

      .titulo{
        width: 300px !important;
        min-height: 60px;
        padding: 15px;
      }

      .btn{
        padding: 15px 20px;
        border-radius: 12px;
        background-color: #64c832;
        border:none;
      }

      label{
        font-weight: 700;
      }

      input[type=text]{
        padding: 10px 20px;
        border-radius: 8px;
      }

    </style>

    <title>mova</title>
</head>

<body>

  <div class="container-fluid">
    <div class="row justify-content-center mt-5">
      <form class="col-12" action="result.php" method="post" enctype="multipart/form-data">

        <div class="row justify-content-center py-4">
          <div class="col-5 px-5">
            <label for="data">Data:</label><br>
            <input type="text" name="data" value="" placeholder="Digite a data do Ranking">
          </div>
          <div class="col-5 px-5">
            <label for="regional">Regional:</label><br>
            <input type="text" name="regional" value="" placeholder="Ex: Regional 1">
          </div>
        </div>

        <!--<div class="row justify-content-center py-4">

          <div class="col-10 px-5">
            <label for="data">1 lugar:</label><br>
            <input type="text" name="nome1" value="" placeholder="Nome">
            <input type="text" name="cargo1" value="" placeholder="Cargo">
            <input type="text" name="agencia1" value="" placeholder="Agencia">
            <input type="text" name="receber1" value="" placeholder="Total a Receber">
            <input type="text" name="recebido1" value="" placeholder="Tota Recebido"><br>
            <strong> Foto:</strong> <input type="file" name="foto1" value="" class="mt-2">
          </div>

          <div class="col-10 px-5 mt-3">
            <label for="data">2 lugar:</label><br>
            <input type="text" name="nome2" value="" placeholder="Nome">
            <input type="text" name="cargo2" value="" placeholder="Cargo">
            <input type="text" name="agencia2" value="" placeholder="Agencia">
            <input type="text" name="receber2" value="" placeholder="Total a Receber">
            <input type="text" name="recebido2" value="" placeholder="Total Recebido"><br>
            <strong> Foto:</strong> <input type="file" name="foto2" value="" class="mt-2">
          </div>

          <div class="col-10 px-5 my-3">
            <label for="data">3 lugar:</label><br>
            <input type="text" name="nome3" value="" placeholder="Nome">
            <input type="text" name="cargo3" value="" placeholder="Cargo">
            <input type="text" name="agencia3" value="" placeholder="Agencia">
            <input type="text" name="receber3" value="" placeholder="Total a Receber">
            <input type="text" name="recebido3" value="" placeholder="Total Recebido"><br>
            <strong> Foto:</strong> <input type="file" name="foto3" value="" class="mt-2">
          </div>
        </div>-->

        <div class="row justify-content-center">
          <div class="col-3 mx-2">
            <label for="cidades">COLUNA 1</label><br>
            <!--<textarea class="titulo" name="titulo1" rows="3" cols="60" placeholder="Cole aqui o título da coluna e subtítulo"></textarea>
            <br>-->
            <textarea name="cidades" rows="8" cols="60" placeholder="Cole aqui os itens da primeira coluna na ordem do Ranking"></textarea>

          </div>
          <div class="col-3 mx-2">
            <label for="totalreceber">COLUNA 2</label><br>
            <!--<textarea class="titulo" name="titulo2" rows="3" cols="60" placeholder="Cole aqui o título da coluna e subtítulo"></textarea>
            <br>-->
            <textarea name="totalreceber" rows="8" cols="60" placeholder="Cole aqui os itens da segunda coluna na ordem do Ranking"></textarea>
          </div>
          <div class="col-3 mx-2">
            <label for="totalrecebido">COLUNA 3</label><br>
            <!--<textarea class="titulo" name="titulo3" rows="3" cols="60" placeholder="Cole aqui o título da coluna e subtítulo"></textarea>
            <br>-->
            <textarea name="totalrecebido" rows="8" cols="60" placeholder="Cole aqui os itens da terceira coluna na ordem do Ranking"></textarea>
          </div>
          <div class="col-3 mx-2">
            <label for="porcentagem">COLUNA 4</label><br>
            <!--<textarea class="titulo" name="titulo4" rows="3" cols="60" placeholder="Cole aqui o título da coluna e subtítulo"></textarea>
            <br>-->
            <textarea name="porcentagem" rows="8" cols="60" placeholder="Cole aqui os itens da quarta coluna na ordem do Ranking"></textarea>
          </div>
          <div class="col-3 mx-2">
            <label for="coluna5">COLUNA 5</label><br>
          <!--  <textarea class="titulo" name="titulo5" rows="3" cols="60" placeholder="Cole aqui o título da coluna e subtítulo"></textarea>
            <br>-->
            <textarea name="coluna5" rows="8" cols="60" placeholder="Cole aqui os itens da quinta coluna na ordem do Ranking"></textarea>
          </div>
          <div class="col-3 mx-2">
            <label for="coluna6">COLUNA 6</label><br>
            <textarea name="coluna6" rows="8" cols="60" placeholder="Cole aqui os itens da sexta coluna na ordem do Ranking"></textarea>
          </div>
        </div>

        <div class="row justify-content-center mt-4">
          <input type="submit" name="submit" class="btn-primary btn" value="Gerar Ranking">
        </div>

      </form>
    </div>
  </div>







</body>

</html>
