<?php
require_once ('classes/Employee.php');


$user1 = new Employee('Олег', 25, 2000);
$user2 = new Employee('Мария', 26, 3000);
$user3 = new Employee('Петя', 38, 4000);

echo "<pre>";
print_r($user1);
print_r($user2);
print_r($user3);
echo Employee::getSummSalary() . PHP_EOL;

$user1->setSalaryEmloyee(5000);
$user1->setNameEmloyee('Иван');
echo PHP_EOL . $user1->getNameEmloyee() . PHP_EOL;


print_r($user1);
print_r($user2);

echo "Самому старшему сотруднику: " . Employee::getOlduser();
echo "<pre>";
