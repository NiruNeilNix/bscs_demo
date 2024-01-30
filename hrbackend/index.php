<?php

require_once "C:/wamp64/www/hrbackend/get.php";
require_once "C:/wamp64/www/hrbackend/post.php";

$get = new Get();
$post = new Post();

if(isset($_REQUEST['request'])) {
    $request = explode('/', $_REQUEST['request']);
}
else {
    http_response_code(404);
    exit(); 
}

switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        switch($request[0]) {
            case 'getemployee':
                echo json_encode($get -> get_employees());
                break;

            case 'getjobs':
                 echo json_encode($get -> get_jobs());
                break;

            default:
                http_response_code(403);
                break;
        }
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"));
        switch($request[0]) {
            case 'addemployee':
                echo json_encode($post->add_employees($data));
                break;

            case 'postjobs':
                echo json_encode($post -> post_jobs());
                break;

            default:
                http_response_code(403);
                break;
        }
        break;

    default:
        http_response_code(403);
}

?>
