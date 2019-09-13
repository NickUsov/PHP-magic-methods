<?php
    class User
    {
        protected $name;
        protected $email;
        protected $password;
        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;
            $this->password = md5("1111");
        }

        public function __toString()
        {
            return "Name is $this->name and email is $this->email <br>";
        }

        public function __get($name)
        {
            if($name == 'Name'){
                return $this->name.'<br>';
            }
            else if($name == 'Email'){
                return $this->email;
            }
        }

        public function __set($name, $value)
        {
            if($name == 'Name'){
                $this->name = $value;
            }
            else if($name == 'Email'){
               $this->email = $value;
            }
        }

        public function __isset($property)
        {
            return isset($this->$property);
        }

        public function __sleep()
        {
            return ['name','email'];
        }
        public function __wakeup()
        {
            echo '<script>alert("Wakw Up!")</script>';
        }
        public function __call($name, $arguments)
        {
            if($name == 'getNameToUpperCase'){
                return strtoupper($arguments[0]);
            }
        }
    }
?>