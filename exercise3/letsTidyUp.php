<?php
class CarController
{
    public function registerCar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $carMake = $_POST['make'] ?? null;
            $carModel = $_POST['model'] ?? null;
            $carYear = $_POST['year'] ?? null;
            $carColor = $_POST['color'] ?? null;
             
            //chek fields are not empty
            if ((strlen($carMake) > 3) && 
                (strlen($carModel) > 3) && 
                (strlen($carYear) > 3) && 
                (strlen($carColor) > 3))
            {
                //Create connection to db
                $connection = new PDO($dsn);
                
                //sql command 
                $sql = 'INSERT INTO dbname (make, model, year, color) VALUES (:make, :model, :year, :color)';
                //Prepare sql query to add datas to database
                $sqlStatement = $connection->prepare($sql);
                $sqlStatement->bindValue('make', $carMake);
                $sqlStatement->bindValue('model', $carModel);
                $sqlStatement->bindValue('year', $carYear);
                $sqlStatement->bindValue('color', $carColor);
                
                if ($sqlStatement->execute())
                {
                    echo 'The car is registered.';
                    return;
                }
                echo 'Problem with the connection.';
                return;
            }
            echo 'Please complete the form, before send!';
            return;
        }
    } 
} 