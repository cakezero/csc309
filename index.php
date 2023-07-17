<!DOCTYPE html>
<html>

<head>
    <title>CSC 309 DB Class</title>
</head>

<body>
    <h2>Registration Form</h2>

    <table cellpadding="12" cellspacing="2" border="1">
        <thead>
            <tr>
                <td>SN</td>
                <td>Last Name</td>
                <td>First Name</td>
                <td>Gender</td>
                <td>Date of Birth</td>
                <td>Email</td>
            </tr>
        </thead>

        <tbody>
            <?php
                $server = 'localhost'; // 127.0.0.1
                $username = 'root';
                $password = 'rootroot';
                $db = 'csc309';

                //Server Connection
                $conn = new mysqli($server, $username, $password, $db);
            
            //Check Server Connection
            if ($conn){
                //Select Query
                $sql = "SELECT * FROM users";
                
                //Query Result
                $result = $conn->query($sql);
                
                while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["lastname"];?></td>
                <td><?php echo $row["firstname"];?></td>
                <td><?php echo $row["gender"];?></td>
                <td><?php echo $row["date_of_birth"];?></td>
                <td><?php echo $row["email"];?></td>
            </tr>
            <?php 
                }
                }
                // Close Connection
                $conn->close();
             ?>
        </tbody>
    </table>
</body>
</html>
