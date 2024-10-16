<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("Employee.php");
    include("Salesman.php");
    $paco=new Employee("Paco Martin",2000,22/03/2021);
    $ana=new Salesman ("Ana Belen",2300,23/04/2020,20);

    $salaryPaco=$paco->calculateSalary();
    echo"<p>El salario de Paco es $salaryPaco</p>";

    $ana -> sell(2000);
    $salaryAna=$ana->calculateSalary();
    echo "<p>El salario de Ana es:";
    ?>
</body>
</html>