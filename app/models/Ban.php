<?php 
namespace app\models;
class Ban
{
    private int $userId;
    private string $reason;
    private string $bannedAt;

  public function __construct(int $userId,string $reason,string $bannedAt){
        $this->userId      = $userId;
        $this->reason      = $reason;
        $this->bannedAt    = $bannedAt;
   }

    public function __get($property){
        return $this->$property;
    }

    public function __set($property, $value){
           $this->$property = $value;
    }
}