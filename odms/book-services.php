<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\ITicketingKenya\PHPMailer-master\PHPMailer-master\src\Exception.php';
require 'C:\xampp\htdocs\ITicketingKenya\PHPMailer-master\PHPMailer-master\src\PHPMailer.php';
require 'C:\xampp\htdocs\ITicketingKenya\PHPMailer-master\PHPMailer-master\src\SMTP.php';

function sendConfirmationEmail($to, $name, $bookingid)
{
    $mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'david.masai@students.jkuat.ac.ke'; // Your email address
	$mail->Password ='Mercywaki0.'; // Your email password
	$mail->SMTPSecure = '';
	$mail->Port = 587;
	$mail->setFrom('david.masai@students.jkuat.ac.ke', 'ITicketing Kenya');
	$mail->addAddress($to);			
	$mail->isHTML(true);
	$mail->Subject = 'Booking Confirmation';
	$mail->Body = $bookingid;
	$mail->send();

	// try {
    //     // Server settings for your email account
    //     $mail->isSMTP();
	// 	echo 
    //     $mail->Host       = 'smtp.gmail.com'; // Use your SMTP server, for Gmail, it is smtp.gmail.com
    //     $mail->SMTPAuth   = true;
    //     $mail->Username   = 'david.masai@students.jkuat.ac.ke'; // Your email address
    //     $mail->Password   = 'Mercywaki0.'; // Your email password
    //     $mail->SMTPSecure = false;
    //     $mail->Port       = 587;

    //     // Recipients
    //     $mail->setFrom('david.masai@students.jkuat.ac.ke');
    //     $mail->addAddress($to); // Add a recipient

    //     // Content
    //     $mail->isHTML(true);
    //     $mail->Subject = 'Booking Confirmation';
    //     $mail->Body    = "Dear $name, <br>Your booking with Booking ID: $bookingid has been confirmed. Thank you for choosing us.";

    //     $mail->send();
    //     echo 'Email has been sent';
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }



    }
session_start();
error_reporting(0);
include('includes/dbconnection.php');

    if(isset($_POST['submit']))
  {

	sendConfirmationEmail($email, $name, $bookingid);
  	$bid=$_GET['bookid'];
	
  	
 $name=$_POST['name'];
  $mobnum=$_POST['mobnum'];
 $email=$_POST['email'];
 $edate=$_POST['edate'];
 $est=$_POST['est'];
  $eetime=$_POST['eetime'];
 $vaddress=$_POST['vaddress'];
 $ticketCount=$_POST['ticketCount'];
 echo($ticketCount);
 $eventtype=$_POST['eventtype'];
 $addinfo=$_POST['addinfo'];
 $bookingid=mt_rand(100000000, 999999999);
 
$sql="insert into tblbooking(numberoftickets,BookingID,ServiceID,Name,MobileNumber,Email,EventDate,EventStartingtime,EventEndingtime,VenueAddress,EventType,AdditionalInformation)values(:ticketCount,:bookingid,:bid,:name,:mobnum,:email,:edate,:est,:eetime,:vaddress,:eventtype,:addinfo)";
$query=$dbh->prepare($sql);
$query->bindParam(':bookingid',$bookingid,PDO::PARAM_STR);
$query->bindParam(':bid',$bid,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobnum',$mobnum,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':edate',$edate,PDO::PARAM_STR);
$query->bindParam(':est',$est,PDO::PARAM_STR);
$query->bindParam(':eetime',$eetime,PDO::PARAM_STR);
$query->bindParam(':vaddress',$vaddress,PDO::PARAM_STR);
$query->bindParam(':eventtype',$eventtype,PDO::PARAM_STR);
$query->bindParam(':addinfo',$addinfo,PDO::PARAM_STR);
$query->bindParam(':ticketCount',$ticketCount,PDO::PARAM_STR);

 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Booking Request Has Been Send. We Will Contact You Soon")</script>';
echo "<script>window.location.href ='services.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!DOCTYPE html>
<html>
<head>
<title>ITicketingKenya || Contact Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<!---//End-css-style-switecher----->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	   <script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */

				$('.fancybox').fancybox();

			});
		</script>

</head>
<body>
<?php include_once('includes/header.php');?>

<div class="contact content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Book Event</li>
		 </ol>Welcome!!
		
		
			 <div class="contact-grids">
				 <div class="col-md-6 contact-left">
					 <p>Book Your Events now. <?php
					  $bid=$_GET['bookid'];
					  

					  
					  ?> </p>
					 
					 <form method="post">
					 	
						 <ul>
							 <li class="text-info">Name: </li>
							 <li><input type="text" class="form-control" name="name" required="true"></li>
						 </ul>

						 <ul>
							 <li class="text-info">Email: </li>
							 <li><input type="email" class="form-control" name="email" required="true"></li>
						 </ul>

						 <ul>
						 	 <ul>
								<li class="text-info">Mobile Number: </li>
								<li><input type="text" class="text" name="mobnum" required="true" maxlength="10" pattern="[0-9]+"></li>
						 	</ul>

												 
						<ul>
    <li class="text-info">Number of Tickets:</li>
    <li>
        <button type="button" onclick="decreaseCount()">-</button>
        <input type="text" id="ticketCount" name="ticketCount" value="1" readonly>
        <button type="button" onclick="increaseCount()">+</button>
    </li>
</ul>
						
						
						 <ul>
							 <li class="text-info">Type of Event:</li>
							 <li><select type="text" class="form-control" name="eventtype" required="true" >
							 	<option value="">Choose Event Type</option>
							 	<?php 

$sql2 = "SELECT * from   tbleventtype ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  k2
<option value="<?php echo htmlentities($row->EventType);?>"><?php echo htmlentities($row->EventType);?></option>
 <?php } ?>
							 </select></li>
						 </ul>	
						 				
						 <input type="submit" name="submit" value="Book">					 
					 </form>
				 </div>
				 <div class="col-md-6 contact-right">
			 	<div class="contact-map">
						<img src="images/eve/bookin.jpeg" class="img-responsive" height="900" width="500" alt=""/>
						</div>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->
<script>
    function increaseCount() {
        var countInput = document.getElementById('ticketCount');
        var count = parseInt(countInput.value, 10);
        countInput.value = count + 1;
    }

    function decreaseCount() {
        var countInput = document.getElementById('ticketCount');
        var count = parseInt(countInput.value, 10);
        if (count > 1) {
            countInput.value = count - 1;
        }
    }
</script>



<style>
.right-container{
  display: none;
  background-color: blue;
  width: 50%;
  height: 100%;
  max-height: 500px;
  max-width: 400px;
  position: fixed;
  bottom: 70px;
  right: 20px;
  background-color: #007bff; /* Adjust the background color */
  color: #fff; /* Adjust the text color */
  border: none;
  border-radius: 5px;
  cursor: pointer;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  z-index: 200;
}


* {
  box-sizing: border-box; }

.ct {
  min-height: 100vh;
  z-index: 10;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  background: url("g.jpg") no-repeat;
  background-size: cover;
  font-family: 'Roboto', sans-serif; 
  
}

strong {
  font-weight: bold; }

.ChatWindow {
  position:relative;
  width: 100%;
  height: 100%;
  margin-bottom: 100px;
  padding: 2.5rem;
  padding-bottom: 6.5rem;
  overflow: hidden;
  overflow-y: auto;
  align-self: flex-end;
  background: #c2b9b9;
  box-shadow: 0 0 12px rgba(0, 0, 0, 0.3);
  border-radius: 3px 3px 0 0; 
  right: 0;
}

.ChatItem {
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  width: 100%;
  margin-bottom: 2rem; }

.ChatItem--expert {
  flex-direction: row-reverse; }

.ChatItem-meta {
  display: flex;
  align-items: center;
  flex: 0 1 auto;
  margin-right: 1rem;
  margin-bottom: 0.5rem;
  width: 2.5rem; }
  .ChatItem--expert .ChatItem-meta {
    margin-right: 0;
    margin-left: 1rem; }

.ChatItem-chatContent {
  position: relative;
  flex: 1 0 auto;
  width: 100%; }

.ChatItem-avatar {
  width: 2.5rem;
  height: 2.5rem; }
  .ChatItem--expert .ChatItem-avatar {
    margin-right: 0; }

.ChatItem-avatarImage {
  max-width: 100%;
  border-radius: 100em; }

.ChatItem-avatarInitials {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2.5rem;
  height: 2.5rem;
  background: #ccc;
  color: #444;
  border-radius: 100em; }

.ChatItem-timeStamp {
  width: 70%;
  font-size: 0.875rem;
  color: #666; }
  .ChatItem--expert .ChatItem-timeStamp {
    margin-left: auto; }

.ChatItem-chatText {
  position: relative;
  width: 70%;
  margin-bottom: 0.5rem;
  padding: 1rem;
  background: #007FEF;
  color: #fff;
  border-radius: 3px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.175);
  line-height: 1.3; }
  .ChatItem-chatText:first-child::before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: -0.4rem;
    width: 1rem;
    height: 1rem;
    transform: scaleX(0.8) skew(45deg);
    background: #007FEF; }
    .ChatItem--expert .ChatItem-chatText:first-child::before {
      right: -0.4rem;
      left: auto;
      transform: skew(-40deg);
      background: #fff;
      background: #fff;
      box-shadow: 4px 0 4px -1px rgba(0, 0, 0, 0.1); }
  .ChatItem--expert .ChatItem-chatText {
    margin-left: auto;
    border: 1px solid #dbdbdb;
    background: white;
    color: #666; }

.ChatItem-chatText > div {
  display: inline; }

.ChatInput {
  position: absolute;
  bottom: 0;
  width: 100%;
  left: 0;
  height: 5rem;
  background: #eee;
}

.ChatInput-input {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 5rem;
  padding: 1rem 1.5rem;
  padding-right: 5.25rem;
  border: 0;
  border-top: 1px solid #ccc;
  overflow: hidden;
  overflow-y: auto;
  background: #fff;
  box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
  font-size: 1rem;
  resize: none; 
  color: #333;
}

[contenteditable]:empty:before {
  content: attr(placeholder);
  display: block;
  color: #999; }

[contenteditable]:active,
[contenteditable]:focus {
  border: 0;
  border-top: 1px solid #ccc;
  outline: 0;
  box-shadow: inherit; }

.ChatInput-btnSend {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  height: 100%;
  width: 50px;
  right: 0;
  border: none;
  border-radius: 3px;
  background: #007FEF;
  font-size: 1rem;
  padding: 0.5rem 1rem;
  font-weight: bold;
  color: white;
  cursor: pointer;
}

#start:hover{
  background-color: #021a2f;
}
#start{
  border: none;
  border-radius: 3px;
  background: #007FEF;
  font-size: 1rem;
  padding: 0.5rem 1rem;
  font-weight: bold;
  color: white;
  cursor: pointer;
}

.logo-cont{
  width: 100%;
  position: absolute;
  height: 100px;
  display: flex;
  justify-content: center;
}

.close-button{
  position:absolute;
  top: -35px;
  right: 0;
  height: 30px;
  width: 30px;
  border-radius: 50%;
  z-index: 50;
  color: white;
  background-color: #ff9000;
  display: flex;
  align-items: center;
  justify-content: center;
}

</style>

 



 <script src="jquery.min.js"></script>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="axios.min.js"></script>
    <script src="common.js"></script>
    <script src="send.js"></script>

 <script>
  function init_chat_area() {

    $('.ChatWindow').html(`

<div class="ChatItem ChatItem--customer">
<div class="ChatItem-meta">
  <div class="ChatItem-avatar">
    <img class="ChatItem-avatarImage" src="https://image.ibb.co/eTiXWa/avatarrobot.png">
  </div>
</div>
<div class="ChatItem-chatContent">
  <div class="ChatItem-chatText">Hi there!</div>
  <div class="ChatItem-chatText">I'd be happy to help you!</div>
  <div class="ChatItem-timeStamp"><strong>Chatbot</strong> • Today 05:49</div>
</div>
</div>



`)
}

var ChatInput;

ChatInput = $('.ChatInput-input');
ChatInputSend = $('.ChatInput-btnSend');

function getUser () {
  const userStr = sessionStorage.getItem('user');
  console.log(userStr)
  if (userStr) return JSON.parse(userStr);
  else return null;
};

// return the token from the session storage
function getToken(){
  return sessionStorage.getItem('token') || null;
};

function getRole(){
  return sessionStorage.getItem('role') || null;
};

// remove the token and user from the session storage
function removeUserSession() {
  sessionStorage.removeItem('token');
  sessionStorage.removeItem('role');
  sessionStorage.removeItem('user');
};

// set the token and user from the session storage
function setUserSession (token, role, user) {
  sessionStorage.setItem('token', token);
  sessionStorage.setItem('role', role);
  sessionStorage.setItem('user', JSON.stringify(user));
};



var _axios = axios.create({
  baseURL: 'http://localhost:8000',
  withCredentials: true
});

const _config = {
    headers: { Authorization: `Bearer ${getToken()}` }
};

function sendRequest(info, URL, callback) {
    //alter(info)
    $.ajax({
        type: "post",
        url: URL || "../../../server/serverRequests",
        data: info,
        xhrFields: {withCredentials: true},
        success: function f(e) {
            callback(e)
            // success();
            //reset()
        },
        error: function (e) {
            console.log(e)
            //Error();
        }
    })
}

function sendGet(URL, callback) {
    axios.get(URL, {
        withCredentials: true
    })
        .then(response => {
           callback(response.data);
        })
}

function sendPost(info, URL, callback) {

    axios.post(URL, info, {
    headers: { Authorization: `Bearer ${getToken()}` }
})
        .then(response => {
            callback(response.data);
        })
}

function sendFile(info, URL, callback) {
    axios.post(URL, info, { withCredentials: true, headers: {
          "Content-Type": "multipart/form-data",
        }, })
        .then(response => {
            const dt = response.data;
            console.log(dt)
        })
    /*$.ajax({
        type: "post",
        processData: false,
        xhrFields: { withCredentials: true },
        crossDomain: true,
        // cookies: document,
        contentType: "text/plain",
        url: URL||"../../../server/serverRequests",
        data:info,
        success: function f(e) {
            callback(e)
            // success();
            //reset()
        },
        error:function (e) {
            console.log(e)
            //Error();
        }
    })*/
}

function alter(info, URL, g) {
    $.ajax({
        type: "post",
        url: URL,
        data: info,
        success: function f(e) {
            let r = ($(".log tbody tr").length);
            // success(e,r,g);
        },
        error: function () {
            console.log("wrong")
        }
    })
}

function Error() {
    console.log("error", "red");
}

function success(w, y, g) {
    let p = w === "" ? "successful - nothing from the server" : w;
    if (g) {
        let len = y - 1;
        if ($.parseJSON(p).column === "error-id already exists") {
            let nodes = `<td class="err">Error!! repeated id</td>`;
            $("#logs .log tr:eq(" + len + ")").append(nodes);
        } else {
            cl(y, "blue");
            ($("#logs .log tr:eq(" + len + ")").remove());
            if (len === 0) {
                $("#logs").hide()
            }
            cl(p, "purple")
        }
    }
}




  function _close(e) {
    document.querySelector(".right-container").style.display = "none";
  }



  function handleButtonClick(params) {
    console.log("clicking, should open chat");

    document.querySelector(".right-container").style.display = "block";
    $('#start').click(function (e) {
    sendRequest({
      "username": "test_user",
      "email": "pk@gmail.com",
      "password": "test234"
    }, "http://localhost:8000/api/v1/auth/login/", (response) => {
      console.log(response)
      if (response.error) {
        alert(response.message)
      } else {
        console.log(response)
        setUserSession(response.access_token, "", response.data);
        init_chat_area();
      }
    })
  });


  $('.ChatInput-input').keyup(function(e) {
    let element, newText, txt;
    if (e.shiftKey && e.which === 13) {
      e.preventDefault();
      return false;
    }
    element = $(this);
    if (e.which === 13) {
      newText = element.val();
      txt = element.val()
      element.val('');
      $('.ChatWindow').append('<div class="ChatItem ChatItem--expert"> <div class="ChatItem-meta"> <div class="ChatItem-avatar"> <img class="ChatItem-avatarImage" src="https://randomuser.me/api/portraits/women/0.jpg"> </div> </div> <div class="ChatItem-chatContent"> <div class="ChatItem-chatText">' + newText + '</div> <div class="ChatItem-timeStamp"><strong>Me</strong> · Today 05:49</div> </div> </div>');
      askBot(txt)
      return $('.ChatWindow').animate({
        scrollTop: 6000
      }, 700);

    }
  });

  $('.ChatInput-btnSend').click(function (e) {
    console.log("sending...")
    let element, newText, txt;

    element = $('.ChatInput-input');

      newText = element.val();
      txt = element.val()
      console.log(newText, txt)
      element.value('');
      $('.ChatWindow').append(
          `<div class="ChatItem ChatItem--expert">
           <div class="ChatItem-meta"> 
           <div class="ChatItem-avatar"> 
           <img class="ChatItem-avatarImage" src="avatarrobot.png"> 
           </div> 
          </div> 
          <div class="ChatItem-chatContent"> 
          <div class="ChatItem-chatText">
          ${newText} 
          </div> 
          <div class="ChatItem-timeStamp">
          <strong>Customer</strong> · Today ${new Date().toLocaleTimeString()}
          </div> 
          </div> 
        </div>`
      );
      askBot(txt)
      return $('.ChatWindow').animate({
        scrollTop: $('.ChatWindow').prop("scrollHeight")
      }, 700);


  })


  function askBot(newText){
    sendPost({
      "name": newText
    }, "http://localhost:8000/api/v1/ask/", (response)=>{
      $('.ChatWindow').append(`
        <div class="ChatItem ChatItem--customer">
           <div class="ChatItem-meta"> 
           <div class="ChatItem-avatar"> 
           <img class="ChatItem-avatarImage" src="avatarrobot.png"> 
           </div> 
          </div> 
          <div class="ChatItem-chatContent"> 
          <div class="ChatItem-chatText">
          ${response} 
          </div> 
          <div class="ChatItem-timeStamp">
          <strong>Chatbot</strong> · Today ${new Date().toLocaleTimeString()}
          </div> 
          </div> 
        </div>`)
      console.log(response);
    })
  }


  }
  </script>

<div class="right-container">
  <div class="close-button" onclick="_close()">
    x
  </div>
<div class="ChatWindow">


<div class="start-cont">
  <button id="start">Start a conversation</button>
</div>



</div>
<div class="ChatInput is-hidey">
  <input class="ChatInput-input" placeholder="Type your message here..."></input>
  <div class="ChatInput-btnSend"> > </div>

</div>
</div>
 <button class="floating-button" style="
            position: fixed;
            bottom: 70px;
            right: 20px;
            background-color: #007bff; /* Adjust the background color */
            color: #fff; /* Adjust the text color */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        " onclick="handleButtonClick()">Chat with us</button>
                
<!---->
</body>
</html>