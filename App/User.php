<?php

class User
{
    public function __construct(private string $name,
                                private int    $age,
                                private string $email)
    {

    }

    public function __cal(string $email): void
    {
        try {
            if ($this->setEmail($email) == null) {
                throw new Exception('Invalid Email');
            }

        } catch (Exception $email) {
            echo $email->getMessage();
        }
    }

    private function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getAll($name, $age, $email)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setEmail($email);


    }

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }
}







