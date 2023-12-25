<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login of idbi Bank</title>
    <link rel="stylesheet" href="gfstyle.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*{
box-sizing: border-box;
}


.wrapper{
margin: 0 auto;
width: 100%;
max-width: 1140px;
min-height: 100vh;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
}

.container{
position: relative;
width: 100%;
max-width: 600px;
height: auto;
display: flex;
background: #ffffff;
box-shadow: 0 0 5px #999999;
}



.login .col-left,
.login .col-right{
padding: 30px;
display: flex;
}


.login .col-left{
    width: 60%;
    clip-path: polygon(0 0, 0% 100%, 100% 0 );
    background: #2aa15f;
    }

    .login .col-right{
    padding: 60px 30px;
    width: 50%;
    margin-left: -10%;
    }
    
    
    @media(max-width: 575px){
        .login .container{
        flex-direction: column;
        box-shadow: none;
        }
        .login .col-left,
        .login .col-right{
        width: 100%;
        margin: 0;
        clip-path: none;
        }
        .login .col-right{
        padding: 30px;
        }
    }
        
        

        
        .login .login-text{
        position: relative;
        width: 100%;
        color: #ffffff;
        }

        .login .login-text h2{
        margin: 0 0 15px 0;
        font-size: 30px;
        font-weight: 700;
        }

        .login .login-text p{
        margin: 0 0 20px 0;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        }
        
        .login .login-text .btn{
        display: inline-block;
        font-family: poppins;
        padding: 7px 20px;
        font-size: 16px;
        letter-spacing: 1px;
        text-decoration: none;
        border-radius: 30px;
        color: #ffffff;
        outline: none;
        border: 1px solid #ffffff;
        box-shadow: inset 0 0 0 0 #ffffff;
        transition: .3s;
        }
        
        .login .login-text .btn:hover{
        color: #2aa15f;
        box-shadow: inset 150px 0 0 0 #ffffff;
        }
        
        .login .login-form{
        position: relative;
        width: 100%;
        }
        .login .login-form h2{
        margin: 0 0 15px 0;
        font-size: 22px;
        font-weight: 700;
        }
        .login .login-form p{
        margin: 0 0 10px 0;
        text-align: left;
        color: #666666;
        font-size: 15px;
        }
        .login .login-form p:last-child{
        margin: 0;
        padding-top: 3px;
        }
        .login .login-form p a{
        color: #2aa15f;
        font-size: 14px;
        text-decoration: none;
        }
        .login .login-form label {
        display: block;
        width: 100%;
        margin-bottom: 2px;
        letter-spacing: .5px;
        }
        .login .login-form p:last-child label{
        width: 60%;
        float: left;
        }
        .login .login-form label span{
        color: #ff574e;
        padding-left: 2px;
        }
        .login .login-form input{
        display: block;
        width: 100%;
        height: 35px;
        padding: 0 10px;
        outline: none;
        border: 1px solid #cccccc;
        border-radius: 30px;
        }
        .login .login-form input:focus{
        border-color: #ff574e;
        }
        .login .login-form button,
        .login .login-form input[type=submit] {
        display: inline-block;
        width: 100%;
        margin-top: 5px;
        color: #2aa15f;
        font-size: 16px;
        letter-spacing: 1px;
        cursor: pointer;
        background: transparent;
        border: 1px solid #2aa15f;
        border-radius: 30px;
        box-shadow: inset 0 0 0 0 #2aa15f;
        transition: .3s;
        }
        .login .login-form button:hover,
        .login .login-form input[type=submit]:hover{
        color: #ffffff;
        box-shadow: inset 250px 0 0 0 #2aa15f;
        }

    </style>

    
    <link rel="stylesheet" href="lab1ass1.css">
</head>
<body>
    <div class="intro" style="display: flex;" >
        <div >
            <a herf="ass1.html" class="logo"><img src="idbi logo.png"></a> 
        </div>
      <div class="heading"> 
          <div>  <h1> IDBI BANK </h1>
          </div>
          
        </div>
       
    </div> 
    <div class="menu"> 
        <a href="ass1.html" vlink = green> Home </a> 
    
          <a href="." vlink = green> About us  </a>         
     
          <a href="loginbank.html" vlink = green> login </a>
          <a href="dashboard.php" vlink = green> dashboard </a>   
    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    
                    <a href="" class="btn">find your entered details</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Login details</h2>
                   <?php 
                       $d=date("d  D M Y " );
                        echo ("
                           <span <b> Name:</b> $_POST[Username]<br/>                         
                           <span <b> password</b> $_POST[Password]<br/>
                         
                             details of login is $d <br/>
                        ")
                       ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>