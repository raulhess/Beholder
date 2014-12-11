<div id="content">
  <?php
  $page = $_GET['page'];
  if($page != false){
    include 'pages/'.$page.'.php';
  }else{
    echo "<div class='section'>";
    echo "<h1>Coração de Pedra</h1>";
    echo "Bem-vindo ao resumo do cenário Coração de Pedra para <i>Dungeons and Dragons</i> 5ª Edição.";
    echo "</div>";
  }
  ?>
</div>
