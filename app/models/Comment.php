<?php
namespace app\models;
class Comment
{
    private int $id;
    private int $userId;
    private int $articleId;
    private string $content;
    private string $createdAt;
    private string $updated_at;

    public function __construct(
        int $id,
        int $userId,
        int $articleId,
        string $content,
        string $createdAt,
        string $updated_at
    ) {
        $this->id        = $id;
        $this->userId    = $userId;
        $this->articleId = $articleId;
        $this->content   = $content;
        $this->createdAt = $createdAt;
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
