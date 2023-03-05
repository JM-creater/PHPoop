<?php

class SignupContr extends Signup
{
    private $uid;
    private $pwd;
    private $pwdRequest;
    private $email;

    public function __construct($uid, $pwd, $pwdRequest, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRequest = $pwdRequest;
        $this->email = $email;
    }

    public function signupUser() 
    {
        if($this->emptyInput() == false)
        {
            // echo "Empty Input";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidVid() == false)
        {
            // echo "Invalid username";
            header("location: ../index.php?error=username");
            exit();
        }
        if($this->invalidEmail() == false)
        {
            // echo "Invalid Email";
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false)
        {
            // echo "Invalid Email";
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false)
        {
            // echo "Invalid Email";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() 
    {
        $result = false;
        if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRequest) || empty($this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
            
        return $result;
    }
        
    private function invalidVid()
    {
        $result = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch()
    {
        $result = false;
        if ($this->pwd !== $this->pwdRequest)
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck()
    {
        $result = false;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

}

?>