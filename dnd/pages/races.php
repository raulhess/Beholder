<?php
  $races = json_decode(file_get_contents('dnd/data/races.json'),true);
  foreach($races as $race => $data){
    echo "<div class='info-window'>";
    echo "<h1>".$race."</h1>";
    echo "<h2>\"".$data['intro']."\"</h2>";
    echo "<hr>";
    foreach($data['caracteristicas'] as $nome => $desc){
      echo "<p>";
      echo "<b>".$nome."</b> : ";
      echo $desc;
      echo "</p>";
    }
    echo "</div>";
  }
?>
