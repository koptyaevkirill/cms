<?php

class User {

    /** 
     * Id
     */
    protected $id;
    
    /**
     * Email address 
     */
    protected $email = NULL;
    /** 
     * Password hash
     */
    protected $password;
    protected $sessionPassword;
    protected $repeatPassword;
    
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
     * Set email
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    /**
     * Get email
     */
    public function getEmail() {
        return $this->email;
    }
    /**
     * Set password
     */
    public function setPassword($password) {
        if (null == $password) {
            $this->password = null;
        } else {
            $this->password = $password;
        }
        return $this;
    }
    /**
     * Get password
     */
    public function getPassword() {
        return $this->password;
    }
    /**
     * Set session password
     */
    public function setSessionPassword($sessionPassword) {
        if (null == $sessionPassword) {
            $this->sessionPassword = null;
        } else {
            $this->sessionPassword  = md5($sessionPassword);
        }
        return $this;
    }
    /**
     * Set repeatPassword
     */
    public function setRepeatPassword($repeatPassword) {
        if (null == $repeatPassword) {
            $this->repeatPassword = null;
        } else {
            $this->repeatPassword = md5($repeatPassword);
        }
        return $this;
    }
    /**
     * Get repeatPassword
     */
    public function getRepeatPassword() {
        return $this->repeatPassword;
    }
    
    /**
     * Converts user to array
     */
    public function toArray() {
        return [
            //'id' => $this->getId(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            //'passwordRepeat' => $this->getRepeatPassword(),
        ];
    }
    public function isValid() {
        if($this->password === $this->sessionPassword) {
            return true;
        }
        return false;
    }
    
}

