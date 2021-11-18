<?php

require_once __DIR__ . '/Connection.php';



class Insert {
    /**
     * @var null
     */

    public $BookId;
    public $BookName;
    public $Publish;
    public $BookImage;
    public $conn;



    public function insert(int $BookId, string $BookName,string $Publish, string $BookImage)
    {
        $connection = new Connection();

        $this->conn=$connection->connect();
        $this->BookId = $BookId;
        $this->BookName = $BookName;
        $this->Publish = $Publish;
        $this->BookImage = $BookImage;


            try {
                $query = $this->conn->prepare("INSERT INTO BOOK(BookId,BookName,Publish,BookImage) VALUES 
                ('$BookId','$BookName','$Publish','$BookImage')");

                if($query->execute()){
                    echo "<script>alert('Book Details are Added')</script>";
                    header('Location:../Index.php');
                    exit(0);
                }
                else{
                    echo "Failed";
                }
           } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

    }

if (isset($_POST["submit"])) {
    $BookId = $_POST["BookId"];
    $BookName = $_POST["BookName"];
    $Publish = $_POST["Publish"];
    $BookImage = $_POST ["BookImage"];


        $insertion = new Insert();

    $insertion->insert($BookId,$BookName,$Publish,$BookImage);
}


