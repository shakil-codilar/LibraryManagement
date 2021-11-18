
<html>
    <head>
        <link rel="stylesheet" href="PinVerify.css">
    </head>
    <body>
    <form action="PinVerification.php" method="POST">
    <div class="form">
        <label for="pin">Enter Pin to Add:</label>
        <input type="number" name="pin" class="pin"/>
            <span class="alertNotification">
            <?php
            if ($_GET['errorname_']) {
                $_GET['errorname_'] = "*PIN Is Required";
                echo $_GET['errorname_'];
            }
            ?>
            </span>
        <span class="alertNotification">
            <?php
            if ($_GET['errorsname_']) {
                $_GET['errorsname_'] = "*Enter Correct PIN";
                echo $_GET['errorsname_'];
            }
            ?>
            </span>
        <div class="button">
            <button type="submit">Verify</button>
        </div>
    </form>
    </body>
</html>