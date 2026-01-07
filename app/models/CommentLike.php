<?php

class CommentLike
{
    private int $userId;
    private int $commentaireId;
    private int $articleId;
    private string $createdAt;

    public function __construct(
        int $userId,
        int $commentaireId,
        int $articleId,
        string $createdAt
    ) {
        $this->userId        = $userId;
        $this->commentaireId = $commentaireId;
        $this->articleId     = $articleId;
        $this->createdAt     = $createdAt;
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
