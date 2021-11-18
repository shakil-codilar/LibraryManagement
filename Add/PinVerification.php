<?php
    require_once __DIR__ . '/PinGenerate.php';

    class PinVerification{

        public $errorsname;

        public $pin = '1234';
        public function pinVerification($pin){
            if($pin===$this->pin){
                header('Location:Add.php');
            }
            else{
                $this->errorsname =1;
                header('Location:PinGenerate.php?errorsname_=' . $this->errorsname);
                exit(0);
            }
        }
    }

$pin = $_POST['pin'] ?? null;



if (!$pin) {
    $errorname =1;
    header('Location:PinGenerate.php?errorname_=' . $errorname);
    exit(0);
}
else{

    $PinVerify = new PinVerification();

    $PinVerify->pinVerification($pin);
}
