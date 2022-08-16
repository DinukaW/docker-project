<!Doctype html>
<html>
    <head>
        <title> Hello World! </title>
    </head>

    <body>
        <?php
            echo "Hello World!<br/>"; //hello world message
        ?>
        <?php  // creating db connection using dbo driver
            $database ="company";  
            $user = "root";  
            $password = "secret";  
            $host = "database";  
            $port = "3306";

            //$connection = new PDO("mysql:host={$host};port=3309;dbname={$database};charset=utf8", $user, $password);
            //$query = $connection->query("SELECT * FROM employees");
            try{
                $conn = new PDO("mysql:host=$host;port=$port;dbname=$database",$user,$password);
                $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $query = $conn->query("SELECT * FROM employees");
                echo "DB Connected succesfully";
             } catch(PDOException $e){
                echo "Connection failed: " . $e -> getMessage();
             }
        
        ?>   
        <table> 
            <thead>
                <tr>
                 <th>First_Name</th> 
                 <th>Last_Name</th>
                 <th>Department</th>
                 <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $query->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['department']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table> 

    </body>
</html>