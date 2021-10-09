Grüezi <?php echo htmlspecialchars($_POST['clientName']); ?> <br/>
Thank you for your message: <br/><br/>
    <?php echo htmlspecialchars($_POST['message']); ?> .



 <!-- EXAMPLE - Sending a email
//     if (isset($_POST['submit'])){
//         $name = $_POST['clientName'];
//         $mail = $_POST['mailFrom'];
//         $content = $_POST['message'];

//         $mailTo = "ivan.tujkic@hftm.ch";
//         $headers = "From: ".$mailFrom;
//         $txt = "You have received an e-mail from ".$name.".\n\n".$content;

//         mail($mailTo, $name, $txt, $headers);
//         header("Location: index.php?mailsend");
//     }
// -->



 <!-- EXAMPLE - MySQL-Connection 
    
//     $name = $_POST['name'];
//     $mail = $_POST['mail'];
//     $content = $_POST['content'];

//     // connect to the database
//     $conn = new mysqli('localhost', 'root', '', 'test');

//     if($conn->connect_error){
//         die('Connection Feiled: '.$conn->connect_error);
//     } else {
//         $stmt = $conn->prepare("insert into client_information(name, mail, content)
//             values(?, ?, ?)");

//         $stmt->bind_param("sss", $name, $mail, $content);
//         $stmt->execute();
//         echo "hi";
//         $stmt->close();
//         $conn->close();
//     }
// -->