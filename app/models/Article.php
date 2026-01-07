<?php

class Article
{
    private int $id;
    private string $title;
    private string $photo;
    private string $content;
    private int $authorId;
    private string $createdAt;

    public function __construct(
        int $id,
        string $title,
        string $photo,
        string $content,
        int $authorId,
        string $createdAt
    ) {
        $this->id        = $id;
        $this->title     = $title;
        $this->photo     = $photo;
        $this->content   = $content;
        $this->authorId  = $authorId;
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
