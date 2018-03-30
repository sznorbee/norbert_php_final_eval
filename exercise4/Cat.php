<?php
class Cat
{
    private $firstName;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    public function __construct()
    {
        
        $this->firstName = 'Tiger';
        $this->setAge(1);
        $this->setColor('Yellow');
        $this->setSex('male');
        $this->setRace('cat');
    }
    
    public function setName(string $name)
    {
        if (strlen($name) < 3 or strlen($name) > 20 )
        {
            throw new Exception('Name between 3 and 20 characters');
        }
        $this->firstName = $name;
        return $this;
    }
    
    public function setAge(int $age)
    {
        $this->age =  $age;
        return $this;
    }
    
    public function setColor(string $color)
    {
        if (strlen($color) < 3 or strlen($color) > 10 )
        {
            throw new Exception('Color between 3 and 10 characters');
        }
        $this->color =  $color;
        return $this;
    }
    
    public function setSex(string $sex)
    {
        $arraySex = ['male', 'female'];
        if (!(in_array($sex, $arraySex)))
        {
            throw new Exception('male or female');
            
        }
        $this->sex =  $sex;
        return $this;
    }
    
    public function setRace(string $race)
    {
        if (strlen($race) < 3 or strlen($race) > 20 )
        {
            throw new Exception('Race between 3 and 20 characters');
        }
        $this->race =  $race;
        return $this;
    }
    
    public function getName()
    {
        return $this->firstName;
    }
    
    public function getAge()
    {
        return $this->age;
    }
    
    public function getColor()
    {
        return $this->color;
    }
    
    public function getSex()
    {
        return $this->sex;
    }
    
    public function getRace()
    {
        return $this->race;
    }
    
    public function getInfo()
    {
        $catArray = [
            'name' => $this->firstName,
            'age' => $this->age,
            'color' => $this->color,
            'sex' => $this->sex,
            'race' => $this->race
        ];
        return $catArray;
    }
    
}
