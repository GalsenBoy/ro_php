<?php

class Employe{
    private $register;
    private $last_name;
    private $first_name;
    private $birthday;
    private $hirling_date;
    private $salary;

    public function __construct(int $register,
    string $last_name, string $first_name,int $birthday,int $hirling_data,int $salary){
        $this->register = $register;
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->birthday = DateTime::createFromFormat('d/m/Y', $birthday)->format('Y-m-d');
        $this->hirling_date = DateTime::createFromFormat('d/m/Y',$hirling_data)->format('Y-m-d');
        $this->salary = $salary;
    }

    public function age():?int{
        return $this->age();
    }

    public function seniority(): ?int {
        $currentDate = new DateTime(); // Obtenir la date actuelle
        $hirlingDate = new DateTime($this->hirling_date); // Convertir la date d'embauche en objet DateTime
        $diff = $currentDate->diff($hirlingDate); // Calculer la différence entre les deux dates
        return $diff->y; // Renvoyer le nombre d'années de différence (ancienneté)
    }

    public function salaraIncrease(){
        $getDate = new DateTime($this->hirling_date);
        $currentDate = new DateTime();
        $diff = $currentDate->diff($getDate);
        if ($diff->y < 5) {
            $this->salary += $this->salary * 0.02;
        }else if ($diff->y < 10) {
            $this->salary += $this->salary * 0.05;
        }else{
            $this->salary += $this->salary * 0.1;
        }
    }
    
}