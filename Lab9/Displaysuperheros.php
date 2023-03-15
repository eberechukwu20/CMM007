<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Superhero System</title>
    <head>
    <body>
        <header>
            <h1> The Super-Superhero System</h1>
            <h2> Display all Superhero</h2>
            <p>a href="index.php">Return to Home...</a></p>
        </header>
        <main>
            <?
            include("db_connect.php");
            $sql_query = "SELECT * FROM superheros";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array())
            {
                $firstname = $row['firstName'];
                $lastname = $row['lastName'];
                $mainSuperpower = $row['mainSuperpower'];
                echo "<article>
                    <h3> {$firstname}{$lastname}</h3>
                    <p>This superheros main power is <stronger>{$mainSuperpower}</stronger></p>
                </article>"
            }
            ?>
        </main>
    </body>
    </head>
</html>