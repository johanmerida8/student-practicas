<?php
    header('Content-Type: application/json');

    require 'professor.php';
    $request_method = $_SERVER['REQUEST_METHOD'];

    /**
     * TO DO:
     * You must complete the router implementation in a similar way to students_router.php
     * Please check .htaccess for further reference.
     */


     switch($request_method){
        case 'GET':
            $professor = new Professor();
            if (empty($_GET['id'])) {
                echo json_encode($professor->findAll());
            } else {
                echo json_encode($professor->findById($_GET['id']));
            }
            break;
            case 'POST':
                $jsonProfessor = json_decode(file_get_contents("php://input"), true);
                $professor = new Professor(
                $jsonProfessor['firstName'],
                $jsonProfessor['lastName'],
                $jsonProfessor['city'],
                $jsonProfessor['salary']
            );
            echo json_encode(['result' => $professor->save()]);
            break;
            case 'PUT':
                $jsonProfessor = json_decode(file_get_contents("php://input"), true);
                $professor = new Professor(
                    $jsonProfessor['firstName'],
                    $jsonProfessor['lastName'],
                    $jsonProfessor['city'],
                    $jsonProfessor['salary'],
                    $jsonProfessor['id']
                );
                echo json_encode(['result' => $professor->update()]);
                break;
                case 'DELETE':
                    $query = $_SERVER['QUERY_STRING'];
                    list($key, $value) = explode('=', $query);
                    $professor = new Professor(
                             
                    );
        
                    $professor->setId($value);
        
                    echo json_encode(['result' => $professor->delete()]);
                    break;
     }
