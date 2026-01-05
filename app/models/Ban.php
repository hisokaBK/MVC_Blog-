<?php 

class Ban
{
    private int $id;
    private int $userId;
    private string $reason;
    private string $bannedAt;

  public function __construct(int $id,int $userId,string $reason,string $bannedAt){
        $this->id          = $id;
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