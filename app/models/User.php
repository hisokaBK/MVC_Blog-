<?php

namespace app\models;

abstract class User
{
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $photo;
    protected string $password;
    protected string $role;
    protected bool $is_active;
    protected string $created_at;
    protected string $updated_at;

    
    
    public function __construct(
    int $id,
    string $name,
    string $email,
    string $photo,
    string $password,
    string $role,
    bool $is_active,
    string $created_at,
) {
    $this->id         = $id;
    $this->name       = $name;
    $this->email      = $email;
    $this->photo      = $photo;
    $this->password   = $password;
    $this->role       = $role;
    $this->is_active  = $is_active;
    $this->created_at = $created_at;
}


    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
}
