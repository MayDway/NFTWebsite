<?php
namespace MyApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;



global $conn;
class Chat implements MessageComponentInterface {
    protected $clients;
    private $conn;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        // Establish a database connection in the constructor
        $this->conn = mysqli_connect('localhost', 'root', '', 'nft_db');
        if (!$this->conn) {
            echo mysqli_connect_error();
        }
    }

    public function onOpen(ConnectionInterface $con) {
        // Store the new connection to send messages to later
        $this->clients->attach($con);

        $querystring = $con->httpRequest->getUri()->getQuery();
        parse_str($querystring, $queryarray);
        $tokens = mysqli_real_escape_string($this->conn, $queryarray["token"]);
        $Id = $con->resourceId;

        // Insert or update database records
        // $sql = "INSERT INTO `user` (user_token, user_connection_id) VALUES ('$tokens', '$Id')";
        // $run = mysqli_query($this->conn, $sql);
        
        // if (!$run) {
        //     echo mysqli_error($this->conn);
        // }

        $sqll = "UPDATE `user` SET user_connection_id = '$Id' WHERE user_token = '$tokens'";
        $result = mysqli_query($this->conn, $sqll);

        if (!$result) {
            echo mysqli_error($this->conn);
        }

        echo "New connection! ({$con->resourceId})\n";
    }



    public function onMessage(ConnectionInterface $from, $msg) {
        $data = json_decode($msg, true);
    
        if ($data['command'] == 'Private') {
            $receiver_userid = $data['receiver_userid'];
            $user_id = $data['userId'];
            $message = $data['msg'];
            $timestamp = date('Y-m-d H:i:s');
            $status = 'Yes';
    
            $sql = "INSERT INTO `chat_message` (to_user_id, from_user_id, chat_message, timestamp, status) 
                    VALUES ('$receiver_userid', '$user_id', '$message', '$timestamp', '$status')";
    
            $result = mysqli_query($this->conn, $sql);
    
            if (!$result) {
                echo mysqli_error($this->conn);
            } else {
                $chat_message_id = $this->conn->insert_id;
    
                $query1 = "SELECT * FROM `user` WHERE id='$user_id'";
                $res1 = mysqli_query($this->conn, $query1);
                $result1 = mysqli_fetch_assoc($res1);
    
                $query2 = "SELECT * FROM `user` WHERE id='$receiver_userid'";
                $res2 = mysqli_query($this->conn, $query2);
                $result2 = mysqli_fetch_assoc($res2);
    
                $sender_user_name = $result1['username'];
                $data['datetime'] = $timestamp;
                $receiver_user_connection_id = $result2['user_connection_id'];
    
                foreach ($this->clients as $client) {
                    if ($client->resourceId == $receiver_user_connection_id) {
                        $data['from'] = $sender_user_name;
                        $client->send(json_encode($data));
                    }
                }
    
                // Send a confirmation message to the sender
                $data['from'] = 'Me';
                $from->send(json_encode($data));
            }
        }
    }
    
    

    

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}