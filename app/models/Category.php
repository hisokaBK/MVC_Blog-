<?php
namespace app\models ;

class Category
{
    private int $id;
    private string $name;
    private string $created_at;
    private string $updated_at;

    public function __construct(int $id, string $name ,string $created_at , string $updated_at)
    {
        $this->id   = $id;
        $this->name = $name;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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
