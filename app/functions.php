<?php

  function loadPage($page,$endung="html") {
    $templateFolder = "./pages/";
    //Pruefe ob die angeforderte Seite existiert
    if(file_exists($templateFolder.$page.".".$endung)) {
      $html = file_get_contents($templateFolder.$page.".".$endung);
      $html = str_replace('"', '\"', $html);
      return $html;
    } else {
      //Liefere einen 404 Error zurueck, da die Seite nicht existiert
      $html = file_get_contents($templateFolder.'404.html');
      $html = str_replace('"', '\"', $html);
      return $html;
    }
  }


?>
