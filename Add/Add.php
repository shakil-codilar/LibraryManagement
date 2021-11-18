<?php

require_once __DIR__ . '/Connection.php';
?>
<htmL>
    <head>
        <title>Add Page</title>
        <link rel="stylesheet" href="PinVerify.css">
    </head>
    <body>
    <form class="form" action="Insert.php" method="POST">
        <div class="Separate">
            <label for="BookId"> Book ID:</label>
            <input type="text" name="BookId"/>
        </div>
        <div class="Separate">
        <label for="BookName"> Book Name:</label>
        <input type="text" name="BookName"/>
        </div>
        <div class="Separate">
        <label for="Publish">Publish Date:</label>
        <input type="text" name="Publish"/>
        </div>
        <div class="Separate">
        <label for="BookImage">Image of Book:</label>
        <input type="file" name ="BookImage">
        </div>
        <div class="AddButton">
            <button type="submit" name ="submit" class="AddClick">Add</button>
        </div>
    </form>
    </body>
</htmL>