<?php
include 'components/connect.php';

if(isset($_GET['email']) && isset($_GET['v_code']))
{
    $query = "SELECT * FROM `users` WHERE `email`=:email AND `verification_code`=:v_code LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->execute(['email' => $_GET['email'], 'v_code' => $_GET['v_code']]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result)
    {
        if($result['is_verified'] == 0)
        {
            $update = "UPDATE `users` SET `is_verified`='1' WHERE `email`=:email";
            $stmt = $conn->prepare($update);
            $stmt->execute(['email' => $result['email']]);
            echo "
                <script>
                alert('Email verification successful');
                window.location.href='login.php';
                </script>
            "; 
        }
    }
    else{
        echo "
            <script>
            alert('cannot run query');
            window.location.href='login.php';
            </script>
        ";
    }
}
?>
