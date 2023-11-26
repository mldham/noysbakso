<?php
    session_start();
    include 'connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['Username'];
        $email = $_POST['Email'];
        $password = $_POST['Pw'];

        $query = "SELECT no_user, Username, Email FROM user_acc WHERE (Username = ? OR Email = ?) AND Pw = ?";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $email, $password);
        
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                $_SESSION['user_id'] = $user['no_user'];
                $_SESSION['username'] = $user['Username'];
                header('Location: index.html'); 
                exit();
            } else {
                echo "try again";
            }
        } else {
            echo "Error executing the query: " . $stmt->error;
        }

        $stmt->close();
    }
    ?>