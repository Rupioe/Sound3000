<?php
/**
 * php/request.php/tweets/ Récupération des tweets
 * php/request.php/tweets/?login=... Récupération des tweets d’un user
 * php/request.php/tweets/ login=...&text=... Ajout d’un tweet
 * php/request.php/tweets/i login=...&text=... Modification du tweet
 * php/request.php/tweets/i?login=... Suppression du tweet
 * 
 * 
 * $requestMethod = $_SERVER['REQUEST_METHOD'];
 * $request = $_SERVER['PATH_INFO'];
 * $request = explode('/', $request);
 */

  require_once('database.php');

  // Database connexion.
  $db = dbConnect();
  if (!$db)
  {
    header('HTTP/1.1 503 Service Unavailable');
    exit;
  }

  // Check the request.
  $requestMethod = $_SERVER['REQUEST_METHOD'];
  $request = substr($_SERVER['PATH_INFO'], 1);
  $request = explode('/', $request);
  $requestRessource = array_shift($request);
  $id = array_shift($request);
  // Polls request.
  // function dbDeleteTweet($db, $id, $login)
  // function dbModifyTweet($db, $id, $login, $text)
  // function dbAddTweet($db, $login, $text)
  // function dbRequestTweets($db, $login = '')
  if ($requestRessource == 'tweets')
  {
    if($requestMethod == 'GET')
    if(isset($_GET['login'])) $data = dbRequestTweets($db, $_GET['login']);
  
    if($requestMethod == 'POST'){
      if(isset($_POST['login'])) $data = dbAddTweet($db, $_POST['login'], $_POST['text']);
    }
    else if ($requestMethod == 'PUT'){
      parse_str(file_get_contents('php://input'), $_PUT); // on doit créer le tableau nous meme, PUT n'est pas implémenté de base
    if(isset($_PUT['login'])) $data = dbModifyTweet($db, $id, $_PUT['login'],$_PUT['text']);
    }
    else if ($requestMethod == 'DELETE'){
    if(isset($_GET['login'])) $data = dbDeleteTweet($db,$id, $_GET['login']);
    }
    else
    $data = dbRequestTweets($db);
  
}
 // [{"id":"1","text":"Un premier tweet !!","login":"cir2"},{"id":"2","text":"Un second tweet !!","login":"cir3"}]

  // Send data to the client.
  header('Content-Type: application/json; charset=utf-8');
  header('Cache-control: no-store, no-cache, must-revalidate');
  header('Pragma: no-cache');
  if ($data !== false)
  {
    if($requestMethod == 'POST'){
    header('HTTP/1.1 201 OK');
    } else
    header('HTTP/1.1 200 OK');
    echo json_encode($data);
  }
  else
    header('HTTP/1.1 400 Bad Request');
  exit;
?>
