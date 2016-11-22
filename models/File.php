<?php

class File {

    /** 
     * Id
     */
    protected $id;
    /**
     * Created at date. 
     */
    protected $createdAt;
    /**
     * Name file. 
     */
    protected $name;
    /**
     * User file. 
     */
    protected $userID;
    
    public function __construct() {
        $this->createdAt = new DateTime('now');
    }

    /**
     * Get id
     */
    public function getId() {
        return $this->id;
    }
    /**
     * Set id
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    /**
     * Get user id
     */
    public function getUserID() {
        return $this->userID;
    }
    /**
     * Set user id
     */
    public function setUserID($userID) {
        $this->userID = $userID;
        return $this;
    }
    /**
     * Get name
     */
    public function getName() {
        return $this->name;
    }
    /**
     * Set name
     */
    public function setName($name) {
        return  $this->name = $name;
    }
    /**
     * Get createdAt
     */
    public function getCreatedAt() {
        return $this->createdAt;
    }
    
    public function toArray() {
        $result = array_merge([
            //'id' => $this->getId(),
            'name' => $this->name,
            'userID' => $this->userID
        ]);
        if ($this->getCreatedAt() instanceof DateTime) {
            $result['createdAt'] = $this->getCreatedAt()->format('Y.m.d H:i:s');
        } else {
            $result['createdAt'] = null;
        }
        return $result;
    }
}

