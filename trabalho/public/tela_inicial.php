<?php 
session_start();

// if($_SESSION['user'] == null) {
//     header("index.php");
// }

require_once "../src/views/header.php"; ?>
<?php require_once "../src/views/header_nav.php"; ?>


 
<br>
<br>
<br>
<div class="container">
  <div class="row">
    <h3 class="nomefoda">Seja bem vindo <?= $_SESSION['user']->nome ?></h3>
    <div class="col"><a href="https://static.fecam.net.br/uploads/342/arquivos/1751619_DIARIO_DE_UM_BANANA___DENTES_E_QUE_ERA_5161506256.pdf" target="blank"><img class="bananinhafoda" src="../public/assets/img/bananinhavela.jpg"><br></a>Diario de um banana</div>
    <div class="col"><a href="https://lelivros.love/book/baixar-livro-o-chamado-de-cthulhu-h-p-lovecraft-em-pdf-epub-e-mobi-ou-ler-online/" target="blank"><img class="polvofoda" src="../public/assets/img/chutulu.png"><br></a>polvinho do balacubaco</div>
    <div class="w-100"></div>
    <div class="col"><a href="https://www.pdfdrive.com/stalking-jack-the-ripper-e194631480.html" target="blank"><img class="jackfoda" src="../public/assets/img/jackfoda.jpg"><br></a>assassino broxa</div>
    <div class="col"><a href="https://doczz.com.br/doc/122346/livro-god-of-war-1-pdf-baixar" target="blank"><img class="claitonfoda" src="../public/assets/img/claiton.jpg"><br></a>claiton o brabo</div>
  </div>
</div>

<?php require_once "../src/views/footer.php"; ?>
    