<?php

    session_start();
    if (!isset($_SESSION['url'])) {
      $_SESSION['url'] = "http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1129&tvmode=horizontal";
    }

    //Diferencio en que boton estoy clicando
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'video':
                video();
                break;
            case 'image':
                image();
                break;
            case 'api':
                api();
                break;
            case 'WD_CH_1':
                change1();
                break;
            case 'WD_CH_2':
                change2();
                break;
            case 'WD_CH_3':
                change3();
                break;
        }
    }

    //Div con el video.
    function video() {
      echo json_encode(array('element' => '<video controls autoplay> <source src="vendor/skysignagelight.1564484463.mp4" type="video/mp4"></video>'));
      exit;
    }

    //Div con la imagen.
    function image() {
      echo json_encode(array('element' => '<img src="vendor/msbienvenuebackground.png" alt="Welcome">'));
      exit;
    }

    //Paso el Json y diferencio si me viene un XML o un JSON
    function api() {

      $url = "http://www.ngine.co/test/api/index.php";
      $file = file_get_contents($url);
      $result = "";

      if (strpos($file, 'xml') == 2) {
        $xml = simplexml_load_string($file);
        $json = json_encode($xml);
        $result = $json;

      } else {
        $fichero = file_get_contents('prueba.json', true);
        $json = json_encode($fichero);
        $result = $fichero;

      }

      echo $result;
      exit;

    }

    //Diferentes botones del REMOTE.PHP para cambiar el video de la home.
    function change1() {
      $_SESSION['url'] = "http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1129&tvmode=horizontal";
      exit;
    }

    function change2() {
      $_SESSION['url'] = "http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1130&tvmode=horizontal";
      exit;
    }

    function change3() {
      $_SESSION['url'] = "http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1131&tvmode=horizontal";
      exit;
    }

?>
