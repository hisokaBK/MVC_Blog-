<?php

abstract class User
{
    protected int $id;
    protected string $name;
    protected string $email;
    protected string $photo;
    protected string $password;
    protected string $role;
    protected string $createdAt;
    
    public function __construct(int $id,string $name,string $email,string $photo,string $password,string $role,string $createdAt ) {
        $this->id        = $id;
        $this->name      = $name;
        $this->email     = $email;
        $this->photo     = $photo;
        $this->password  = $password;
        $this->role      = $role;
        $this->createdAt = $createdAt;
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
