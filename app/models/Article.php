<?php

namespace app\models;

class Article
{
    private int $id;
    private int $user_id;
    private int $categorie_id;
    private string $title;
    private string $photo;
    private string $content;
    private string $createdAt;
    private string $updated_at;

    public function __construct(
        int $id,
        int $user_id,
        int $categorie_id,
        string $title,
        string $photo,
        string $content,
        string $createdAt,
        string $updated_at
    ) {
        $this->id        = $id;
        $this->user_id   = $user_id;
        $this->categorie_id = $categorie_id;
        $this->title     = $title;
        $this->photo     = $photo;
        $this->content   = $content;
        $this->createdAt = $createdAt;
        $this->updated_at  = $updated_at;
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
