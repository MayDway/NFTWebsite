<?php

// action.php

include("connection/db.php");

session_start();

// if (isset($_POST['action']) || $_POST['action'] == 'fetch_chat') {
    $to_user_id = $_POST['to_user_id'];
    $from_user_id = $_POST['from_user_id'];
    $query = "SELECT a.username as from_user_name, b.username as to_user_name, chat_message, timestamp, chat_message.status, to_user_id, from_user_id 
                FROM `chat_message` 
                INNER JOIN `user` a 
                    ON chat_message.from_user_id = a.id 
                INNER JOIN  `user` b
                    ON chat_message.to_user_id = b.id       
                WHERE (chat_message.from_user_id = $from_user_id AND chat_message.to_user_id = $to_user_id)
                OR (chat_message.from_user_id = $to_user_id AND chat_message.to_user_id = $from_user_id)";

    $result = mysqli_query($conn, $query);
    // $rows = mysqli_num_rows($result);
    $response = array();
    while ($row = mysqli_fetch_array($result)) {
        $response[] = $row;
        // echo json_encode($response);
    }

    $query = "UPDATE `chat_message` SET status = 'Yes' WHERE from_user_id='$from_user_id' AND to_user_id='$to_user_id' AND status= 'No'";
    $res = mysqli_query($conn, $query);
    
    // Send the JSON response after fetching all the data.
    echo json_encode($response);
    // echo $rows;
// }
?>
