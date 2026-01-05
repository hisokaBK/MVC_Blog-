<?php

class Comment
{
    private int $id;
    private string $content;
    private int $userId;
    private int $articleId;
    private string $createdAt;

    public function __construct(
        int $id,
        string $content,
        int $userId,
        int $articleId,
        string $createdAt
    ) {
        $this->id        = $id;
        $this->content   = $content;
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
