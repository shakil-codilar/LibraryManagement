<html>
    <head>
        <title>Library Management</title>
        <link rel="stylesheet" href="Index.css">
    </head>
    <body>

    <div class="display">
        <div class="heading">
            <h3>Library management System</h3>
        </div>
        <div class="anchor">
            <a href="./Add/PinGenerate.php">Add new</a>
        </div>
    </div>

    <div>
        <table>
            <tr>
                <th>
                    Book Id
                </th>
                <th>
                    Book Name
                </th>
                <th>
                    Publish Date
                </th>
                <th>
                    Book Image
                </th>
            </tr>
        <?php
        require_once __DIR__ . '/Add/Connection.php';


            $connection = new Connection();
            $conn=$connection->connect();
            $query = $conn->prepare("SELECT * FROM BOOK");

            $query->execute();
            $users = $query->fetchAll();

            foreach ($users as $user){
               ?>
        <tr>
            <td class="RowData">
                <?php echo $user[0]; ?>
            </td>
            <td class="RowData">
                <?php echo $user[1]; ?>
            </td>
            <td class="RowData">
                <?php echo $user[2]; ?>
            </td>
            <td>
                <img src="./upload/<?php echo $user[3]; ?>" class="image">

            </td>
        </tr>
            <?php } ?>
        </table>
    </div>
    </body>
</html>