<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Кількість студентів в групах</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Кількість студентів в групі</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT g.group_name, COUNT(s.grupa_id) as "kilk_stud" FROM groups AS g LEFT JOIN students AS s ON g.id = s.grupa_id GROUP BY s.grupa_id';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Кількість студентів в групах: </h3><br>");   
        printf("<table><tr><th>Номер групи</th><th>Кількість студентів</th></tr>"); 
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['group_name'], $row['kilk_stud']);
        };
        printf("</table>");
        $result->close();
    };

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
