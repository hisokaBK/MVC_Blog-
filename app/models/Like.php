<?php

class Like
{
    private int $id;
    private int $userId;
    private int $articleId;
    private string $createdAt;

    public function __construct(
        int $id,
        int $userId,
        int $articleId,
        string $createdAt
    ) {
        $this->id        = $id;
        $this->userId    = $userId;
        $this->articleId = $articleId;
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
