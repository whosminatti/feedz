<?php

namespace App\DAO;

use App\Models\UserModel;

class UsersDAO extends Conexao
{
    public function __construct()
    {
        //chamar construtor da classe pai
        parent::__construct();

    }

    public function getAllUsers(): array
    {
        $users = $this->pdo
            ->query('SELECT
                    id,
                    username,
                    email,
                    fullname,
                    pass
                    FROM users;')
            ->fetchAll(\PDO::FETCH_ASSOC);

        return $users;
    }

    public function insertUsers(UserModel $user): void
    {
        $statment = $this->pdo
            ->prepare('INSERT INTO users VALUES(
                null,
                :username,
                :email,
                :fullname,
                :pass
            );');
        $statment->execute([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'fullname' => $user->getFullname(),
            'pass' => $user->getPass()
        ]);
    }

    public function updateUser(UserModel $user): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE users SET
                    username = :username,
                    email = :email,
                    fullname = :fullname,
                    pass = :pass
                WHERE
                    id = :id
            ;');
        $statement->execute([
            'username' => $user->getUsername(),
            'email' => $user->getEmail(),
            'fullname' => $user->getFullname(),
            'pass' => $user->getPass(),
            'id' => $user->getId()
        ]);
    }

    public function deleteUsers(int $id): void
    {
        $statement = $this->pdo
            ->prepare('DELETE FROM users 
                WHERE 
                    id = :id;
            ');
        $statement->execute([
            'id' => $id
        ]);
    }

}
