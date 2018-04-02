<?php
class Cat
{
    private $firstName;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    public function __construct($firstName, $age, $color, $sex, $race)
    {  
        $this->setName($firstName)->setAge($age)->setColor($color)->setSex($sex)->setRace($race);
        return $this;
    }
    
    public function setName(string $name)
    {
        try 
        {
            if (strlen($name) < 3 or strlen($name) > 20 )
            {
                throw new Exception();
            }
            $this->firstName = $name;
            return $this;
            
        }catch (Exception $e)
        {
            echo 'Name between 3 and 20 characters';
            die();
        }
        
    }
    
    public function setAge($age)
    {
        try 
        {
            if (!is_int($age))
            {
                throw new Exception();
            }
            $this->age =  $age;
            return $this;
        }catch (Exception $e)
        {
            echo 'Please use a number';
            die();
        }
    }
    
    public function setColor(string $color)
    {
        try 
        {
            if (strlen($color) < 3 or strlen($color) > 10 )
            {
                throw new Exception();
            }
            $this->color =  $color;
            return $this;
        }catch (Exception $e)
        {
            echo 'Color between 3 and 10 characters';
            die();
        }
    }
    
    public function setSex(string $sex)
    {
        try 
        {
            $arraySex = ['male', 'female'];
            if (!(in_array($sex, $arraySex)))
            {
                throw new Exception();
                
            }
            $this->sex =  $sex;
            return $this;
        }catch (Exception $e)
        {
            echo 'male or female';
            die();
        }
    }
    
    public function setRace(string $race)
    {
        try 
        {
            if (strlen($race) < 3 or strlen($race) > 20 )
            {
                throw new Exception();
            }
            $this->race =  $race;
            return $this;
        }catch (Exception $e)
        {
            echo 'Race between 3 and 20 characters';
            die();
        }
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
