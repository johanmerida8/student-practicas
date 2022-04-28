<?php
    require 'dbutil.php';
    require 'person.php';

    class Professor extends Person {
        private $salary;
        
        /**
            Complete the Professor class implementation
            in a similar way to students
        */
        
        public function __construct($firstName = null, $lastName = null, $city = null, $salary = 0, $id = null) {
            parent::__construct($id, $firstName, $lastName, $city);
            $this->salary = $salary;
            $this->pdo = DBUtil::getConnection();
        }
        
        public function findAll() {
            // COMPLETE IMPLEMENTATION
            $result = $this->pdo->query("SELECT id, first_name AS firstName, last_name AS lastName, city, salary FROM professor");
            $professors = array();

            while($row = $result->fetch()):
                array_push($professors, $row);
            endwhile;

            return $professors;
        }
        
        public function findById($id) {
            // COMPLETE IMPLEMENTATION
            $stmt = $this->pdo->prepare("SELECT id, first_name AS firstName, last_name AS lastName, city, salary FROM professor WHERE id=:id");
            $stmt->execute(array("id" => $id));
            $professor = null;
            
            if ($row = $stmt->fetch()) {
                $professor = $row;
            }
            
            return $professor;
        }
        
        public function save() {
            // COMPLETE IMPLEMENTATION
            try {
                $stmt = $this->pdo->prepare("INSERT INTO professor(first_name, last_name, city, salary) VALUES (:first_name, :last_name, :city, :salary)");
                $stmt->execute(array(
                    "first_name" => $this->firstName,
                    "last_name" => $this->lastName,
                    "city" => $this->city,
                    "salary" => $this->salary
                ));
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
            return 0;

        }
        
        public function update() {
            // COMPLETE IMPLEMENTATION\
            try {
                $stmt = $this->pdo->prepare("UPDATE professor set first_name=:first_name, last_name=:last_name, city=:city, salary=:salary WHERE id=:id");
                $stmt->execute(array(
                    "id" => $this->id,
                    "first_name" => $this->firstName,
                    "last_name" => $this->lastName,
                    "city" => $this->city,
                    "salary" => $this->salary
                ));
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }

            return 0;
        }
        
        public function delete() {
            // COMPLETE IMPLEMENTATION
            try {
                $stmt = $this->pdo->prepare("DELETE FROM professor WHERE id=:id");
                $stmt->execute(array(
                    "id" => $this->id
                ));
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }

            return 0;
        }
    }
