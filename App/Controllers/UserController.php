<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\DAO\UsersDAO;
use App\Models\UserModel;

final class UserController
{
    public function getUsers(Request $request, Response $response, array $args): Response
    {
        $UsersDAO = new UsersDAO();
        $users = $UsersDAO->getAllUsers();

        $response = $response->withJson($users);

        return $response;
    }

    public function insertUser(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $UsersDAO = new UsersDAO();
        $user = new UserModel();
        $user->setUsername($data['username'])
            ->setEmail($data['email'])
            ->setFullname($data['fullname'])
            ->setPass($data['pass']);
    

        $UsersDAO->insertUsers($user);

        $response = $response->withJson([
            'message' => 'Usuário <b>' . $data['username'] . '</b> cadastrado com sucesso!'
        ]);
        return $response;
    }

    public function updateUser(Request $request, Response $response, array $args): Response
    {
        $data = $request->getParsedBody();

        $UsersDAO = new UsersDAO();
        $user = new UserModel();
        $user->setId((int) $data['id'])
            ->setUsername($data['username'])
            ->setEmail($data['email'])
            ->setFullname($data['fullname'])
            ->setPass($data['pass']);
        $UsersDAO->updateUser($user);

        $response = $response->withJson([
            'message' => 'Alterações realizadas com sucesso!'
        ]);
        return $response;
    }

    public function deleteUser(Request $request, Response $response, array $args): Response
    {
        $queryParams = $request->getQueryParams();

        $UsersDAO = new UsersDAO();
        $id = (int) $queryParams['id'];
        $UsersDAO->deleteUsers($id);

        $response = $response->withJson([
            'message' => 'Excluída com sucesso!'
        ]);
        return $response;
    }
}
