<?php

class Employee
{
    private string $nameEmloyee;
    private int $ageEmloyee;
    private int $salaryEmloyee;
    private static int $sumSalaryEmloyee = 0;
    private static int $count = 0;

    private static int $veryOldUser = 0;


    public function __construct(string $nameEmloyee, int $ageEmloyee, int $salaryEmloyee)
    {
        $this->nameEmloyee = $nameEmloyee;
        $this->ageEmloyee = $ageEmloyee;
        $this->salaryEmloyee = $salaryEmloyee;

        self::$sumSalaryEmloyee += $salaryEmloyee;
        self::$count++;

        if ($ageEmloyee > self::$veryOldUser) {
            self::$veryOldUser = $ageEmloyee;
        }
    }


    public static function getSummSalary()
    {
        return "Общая сумма зарплат: " . self::$sumSalaryEmloyee;
    }


    public static function getOlduser()
    {
        return self::$veryOldUser;
    }

    public function getNameEmloyee(): string
    {
        return $this->nameEmloyee;
    }

    public function getAgeEmloyee(): string
    {
        return $this->ageEmloyee;
    }

    public function getSalaryEmloyee(): string
    {
        return $this->salaryEmloyee;
    }

    public function setNameEmloyee(string $nameEmloyee): void
    {
        $this->nameEmloyee = $nameEmloyee;
    }

    public function setAgeEmloyee(string $ageEmloyee): void
    {
        $this->ageEmloyee = $ageEmloyee;
    }

    public function setSalaryEmloyee(int $salaryEmloyee): void
    {
        $this->salaryEmloyee = $salaryEmloyee;
    }


}