<?php
    include('./db.php');
    $errors = [];
    $sname = "";
    $saddress = "";
    $rname = "";
    $amount = "";
    if(isset($_POST["submit"])) {
        submit();
    }

    function submit() {
        global $sname, $saddress, $rname, $amount, $errors, $pdo;
        $sname = $_POST["sname"];
        $saddress = $_POST["saddress"];
        $amount = $_POST["amount"];
        $rname = $_POST["rname"];
        if($amount < 0) {
            $errors[] = "Enter a valid amount to transfer!";
        }
        $statement = $pdo->prepare("SELECT * FROM accounts WHERE name = '$rname'");
        $statement->execute();
        $account = $statement->fetch(PDO::FETCH_ASSOC);
        if(!$account) {
            $errors[] = "Please enter a valid account name!";
        }
        else {
            $statement = $pdo->prepare("SELECT * FROM accounts WHERE name = '$sname'");
            $statement->execute();
            $saccount = $statement->fetch(PDO::FETCH_ASSOC);
            if($saccount["balance"] < $amount) {
                $errors[] = "Insufficient Funds!!";
            }
            else {
                $statement = $pdo->prepare("UPDATE accounts SET balance = :bal WHERE address = :addr");
                $statement->bindValue(':bal', $saccount["balance"] - $amount);
                $statement->bindValue(':addr', $saddress);
                $statement->execute();
                $statement = $pdo->prepare("UPDATE accounts SET balance = :bal WHERE address = :addr");
                $statement->bindValue(':bal', $account["balance"] + $amount);
                $statement->bindValue(':addr', $account["address"]);
                $statement->execute();
                header("location: send.php");
            }
        }
    }

    function display_errors() {
        global $errors;

        if (count($errors) > 0){
            return $errors;
        }
        return null;
    }
?>