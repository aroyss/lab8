<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Students</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT s.pib, g.group_name,k.pib_kuratora FROM students AS s LEFT JOIN groups AS g ON s.grupa_id = g.id INNER JOIN kurators AS k ON g.kurator_id = k.id ORDER BY s.pib';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Список студентів, груп і кураторів: </h3><br>");   
        printf("<table><tr><th>ПІБ</th><th>Номер групи</th><th>Куратор</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['pib'], $row['group_name'], $row['pib_kuratora']);
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="showStudents.php">Таблиця Students</a><br></li>
        <li><a href="showGroups.php">Таблиця Groups</a><br></li>
        <li><a href="showKurators.php">Таблиця Kurators</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
