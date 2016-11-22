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
     * Url file. 
     */
    protected $url;


    /**
     * Get id
     * @return integer
     */
    public function getId() {
        return $this->id;
    }
    /**
     * Set id
     * @param integer $id id
     * @return this
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    
    
}

