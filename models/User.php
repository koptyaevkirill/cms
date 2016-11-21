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
    protected $repeatPassword;
    
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
    /**
     * Set login
     * @param strign $email
     * @return this
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    /**
     * Get email
     * @return string
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
            $this->password = md5($password);
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
     * @return array
     */
    public function toArray() {
        return [
            //'id' => $this->getId(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            //'passwordRepeat' => $this->getRepeatPassword(),
        ];
    }
    
}

