<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>ITicketingKenya || About Us</title>
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
<!---->
<?php include_once('includes/header.php');?>
<div class="about content">
	 <div class="container"> 		 
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Events</li>	  
		 </ol>
		 <?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
		 <h2><?php  echo htmlentities($row->PageTitle);?></h2>
		 <div class="about-main">
			 <div class="col-md-6 abt-pic">
				 <img src="images/eve/about.jpeg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-6 abt-pic-info">
				 
				 <p style="color:#fff"><?php  echo $row->PageDescription;?>.</p>
				
			 </div>
			 <?php $cnt=$cnt+1;}} ?>
			 <div class="clearfix"></div>
		 </div>
	
		 <div class="latest">
			 <h3>LATEST EVENTS</h3>		
			 <div class="pic start">
				 <a class="fancybox" href="images/eve/bonfire.png" data-fancybox-group="gallery" ><img src="images/eve/bonfire.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">Bonfire & Sunset</a></h4>
				 <p>Scenic Views, Board games, Bonfires, Good Vibes, Great Music..</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/book.png" data-fancybox-group="gallery" ><img src="images/eve/book.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">Book Launch</a></h4>
				 <p>BOOK LAUNCH - THE REWARD IS GREATER THAN THE TEST</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/hunters.png" data-fancybox-group="gallery" ><img src="images/eve/hunters.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">Hunter's</a></h4>
				 <p>The Tour is back In Nairobi this December</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/ziijam.png" data-fancybox-group="gallery" ><img src="images/eve/ziijam.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">Ziijam</a></h4>
				 <p>ZiiJam is an exciting outdoor festival to celebrate East African culture through music, food, fashion, and great vibes.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/isukuti.png" data-fancybox-group="gallery" ><img src="images/eve/isukuti.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">Isukuti Festival</a></h4>
				 <p>Isukuti is a festival that looks to bring together the Luhya community alongside with other communities in the celebration of culture and diversity .</p>
			 </div>
			 <div class="pic start">
				 <a class="fancybox" href="images/eve/toes.png" data-fancybox-group="gallery"><img src="images/eve/toes.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">10 TOES DOWN</a></h4>
				 <p>Celebrating a decade of laughter and comic excellence.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/thrift.png" data-fancybox-group="gallery" ><img src="images/eve/thrift.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">Thrift Event</a></h4>
				 <p>Guess Our Special Guest </p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/carols.png" data-fancybox-group="gallery" ><img src="images/eve/carols.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">CAROLS IN THE BUSH</a></h4>
				 <p>It’s that time of season when we start preparing for our Christmas and New Year holidays.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/safari.png" data-fancybox-group="gallery" ><img src="images/eve/safari.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">THE SAFARI RUNWAY FASHION SHOW.</a></h4>
				 <p>The kenya and International Fashion Show (KIFS) is a 10-hour fashion and cultural festival extravaganza.</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/tsavo.png" data-fancybox-group="gallery" ><img src="images/eve/tsavo.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">AMAPIANO SHENANIGANS -December Edition</a></h4>
				 <p>Amapiano Shenanigans - December Edition</p>
			 </div>
			 <div class="pic start">
				 <a class="fancybox" href="images/eve/sotet.png" data-fancybox-group="gallery" ><img src="images/eve/sotet.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">SOTET NIGHT</a></h4>
				 <p>Mombasa Sotet Night</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/fivestar.png" data-fancybox-group="gallery" ><img src="images/eve/fivestar.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">FIVESTAR ENTERTAINMENT 2ND ANNIVERSARY</a></h4>
				 <p>2ND ANNIVERSARY</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/gordon.png" data-fancybox-group="gallery" ><img src="images/eve/gordon.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">GORDON KOANG UNITY TOUR CONCERT</a></h4>
				 <p>GORDON KOANG UNITY TOUR CONCERT</p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/brass.png" data-fancybox-group="gallery" ><img src="images/eve/brass.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">Mackinlay's Christmas in Brass</a></h4>
				 <p>Mackinlay's Christmas in Brass is a live production bringing together some of Nairobi’s most exciting performers. </p>
			 </div>
			 <div class="pic">
				 <a class="fancybox" href="images/eve/biryani.png" data-fancybox-group="gallery" ><img src="images/eve/biryani.png" class="img-style row6" alt=""><span> </span></a>	
				 <h4><a href="services.php">BIRYANI AND SAMOSA FESTIVAL</a></h4>
				 <p>A CELEBRATION OF SOMALI CULTURE.</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		<?php include_once('includes/footer.php');?>
	 </div>
</div>
<!---->



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
  resize: none; }

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