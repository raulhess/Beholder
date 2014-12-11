<div id="content">
  <?php
  $page = $_GET['page'];
  if($page != false){
    include 'pages/'.$page.'.php';
  }else{
    echo "Página inicial do cenário <i>Coração de Pedra</i>.";
  }
  ?>
</div>
