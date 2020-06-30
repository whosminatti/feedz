<?php

namespace App\Models;

final class UserModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $fullname;

    /**
     * @var string
     */
    private $pass;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    // Métodos encadeados
    /**
     * @param string $id
     * @return UserModel
     */
    public function setId(int $id): UserModel
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    
    public function setUsername(string $username): UserModel
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     * @return UserModel
     */
    public function setEmail(string $email): UserModel
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullname(): string
    {
        return $this->fullname;
    }
    /**
     * @param string $fullname
     * @return UserModel
     */
    public function setFullname(string $fullname): UserModel
    {
        $this->fullname = $fullname;
        return $this;
    }

    /**
     * @return string
     */
    public function getPass(): string
    {
        return $this->pass;
    }
    /**
     * @param string $pass
     * @return UserModel
     */
    public function setPass(string $pass): UserModel
    {
        $this->pass = $pass;
        return $this;
    }
    

}
