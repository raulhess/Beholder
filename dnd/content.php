<div id="content">
  <?php
    $page = $_GET['page'];
    if($page != false){
      include 'pages/'.$page.'.php';
    }else{
      echo "Página inicial de <i>Dungeons and Dragons</i> 5ª Edição";
    }
  ?>
</div>
