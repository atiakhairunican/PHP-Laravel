<?php
include_once __DIR__.'/average.php';
include_once __DIR__.'/user.php';

use Users\User1;
use Users\User2;
use Users\User3;
use Score\Average;
use Score\Grade;

$user1 = new User1;
$user2 = new User2;
$user3 = new User3;
$average1 = new Average(85, 90, 87, 92);
$average2 = new Average(90, 92, 85, 97);
$average3 = new Average(80, 78, 85, 75);
$grade1 = new Grade(85, 90, 87, 92);
$grade2 = new Grade(90, 92, 85, 97);
$grade3 = new Grade(80, 78, 85, 75);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Introduction</title>
</head>
<body>
    <h2 style="text-align: center;">List of Student Grades</h2>
    <div>
        <table border=1 width="52%" style="border-collapse: collapse; float: left;">
            <thead align="center" style="font-weight:bold;">
                <tr>
                    <td width="20%">Name</td>
                    <td width="15%">Email</td>
                    <td width="17%">Address</td>
                </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <?php for ($i=0; $i<count($user1->biodata1()); $i++) { ?>
                        <td>
                            <?php echo $user1->biodata1()[$i]; ?>
                        </td>
                    <?php }; ?>
                </tr>
                <tr>
                    <?php for ($i=0; $i<count($user2->biodata2()); $i++) { ?>
                        <td>
                            <?php echo $user2->biodata2()[$i]; ?>
                        </td>
                    <?php }; ?>
                </tr>
                <tr>
                    <?php for ($i=0; $i<count($user3->biodata3()); $i++) { ?>
                        <td>
                            <?php echo $user3->biodata3()[$i]; ?>
                        </td>
                    <?php }; ?>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div>
        <table border=1 width="48%" style="border-collapse: collapse; float: left;">
            <thead align="center" style="font-weight:bold;">
                <tr>
                    <td width="8%">Mathematics</td>
                    <td width="8%">Indonesian</td>
                    <td width="8%">English</td>
                    <td width="8%">Science</td>
                    <td width="8%">Total</td>
                    <td width="8%">Grade</td>
                </tr>
            </thead>
            <tbody align="center">
                <tr>
                    <td><?php echo $grade1->average(85, 90, 87, 92)[1]; ?></td>
                    <td><?php echo $grade1->average(85, 90, 87, 92)[2]; ?></td>
                    <td><?php echo $grade1->average(85, 90, 87, 92)[3]; ?></td>
                    <td><?php echo $grade1->average(85, 90, 87, 92)[4]; ?></td>
                    <td><?php echo $grade1->average(85, 90, 87, 92)[0]; ?></td>
                    <td><?php echo $grade1->getGrade(85, 90, 87, 92); ?></td>
                </tr>
                <tr>
                    <td><?php echo $grade2->average(85, 90, 87, 92)[1]; ?></td>
                    <td><?php echo $grade2->average(85, 90, 87, 92)[2]; ?></td>
                    <td><?php echo $grade2->average(85, 90, 87, 92)[3]; ?></td>
                    <td><?php echo $grade2->average(85, 90, 87, 92)[4]; ?></td>
                    <td><?php echo $grade2->average(90, 92, 85, 97)[0]; ?></td>
                    <td><?php echo $grade2->getGrade(90, 92, 85, 97); ?></td>
                </tr>
                <tr>
                    <td><?php echo $grade3->average(85, 90, 87, 92)[1]; ?></td>
                    <td><?php echo $grade3->average(85, 90, 87, 92)[2]; ?></td>
                    <td><?php echo $grade3->average(85, 90, 87, 92)[3]; ?></td>
                    <td><?php echo $grade3->average(85, 90, 87, 92)[4]; ?></td>
                    <td><?php echo $grade3->average(80, 78, 85, 75)[0]; ?></td>
                    <td><?php echo $grade3->getGrade(80, 78, 85, 75); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>