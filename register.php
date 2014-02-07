<?php
 
 if($_SERVER['REQUEST_METHOD']==='POST'){
     include("dbase.php");     
    $result=mysql_query("select max(id) as id from deven_perso_data");
    
    $id=0;
    if (!$result) {
      $message  = 'Invalid query: ' . mysql_error() . "\n";
      $message .= 'Whole query: ' . $query;
      //die($message);
      }
     else {
      while ($row = mysql_fetch_assoc($result)) {
        $id=$row['id'];
      
        }

     } 
     $id=$id+1;
    $query=mysql_query("insert into deven_perso_data(id)values('$id')");
    
      foreach ($_POST as $param_name => $param_val) {
       // echo "update deven_perso_data set $param_name=$param_val where id=$id";
        $query=mysql_query("update deven_perso_data set $param_name='$param_val' where id=$id");      
          

      }

 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Solution Box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li ><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>  
          <li class="active"><a href="training.html">Training</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          
        </ul>
        <h2 class="muted"><strong>Solution Box</strong> |<small> Lets Share It</small></h2>
      </div>

      <hr>

      
      

      <div class="row-fluid marketing">
        <?php 
             if(!($_SERVER['REQUEST_METHOD']==='POST')){


          ?>
        <div class="span1">
        </div >
        <div class="span8">
          <form class="form-horizontal" method="post" action="register.php">

  <div class="control-group">
    <label class="control-label" for="Name" >Name</label>
    <div class="controls">
      <input type="text" id="Name" placeholder="Name" name="name">
    </div>
  </div>
<div class="control-group">
    <label class="control-label" for="Name" >Select Training Program</label>
    <div class="controls ">
        <label class="checkbox">
            <input type="checkbox" value="1" id="inlineCheckbox1" checked="true" name="app"> Android and App Development
        </label>
        <label class="checkbox">
            <input type="checkbox" value="1" id="inlineCheckbox2" name="web"> Web Technologies
        </label>
        <label class="checkbox">
            <input type="checkbox" value="1" id="inlineCheckbox3" name="soft"> Software Development
        </label>
        <label class="checkbox">
            <input type="checkbox" value="1" id="inlineCheckbox3" name="cyber"> Cyber Security and Techniques
        </label>
    </div>
</div>
  <div class="control-group">
    <label class="control-label" for="College" >College</label>
    <div class="controls">
      <input type="text" id="College" placeholder="College" name="college">
    </div>
  </div>

  
  <div class="control-group">
    <label class="control-label" for="inputEmail" >Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email" name="email" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="ContactNumber" >Contact Number</label>
    <div class="controls">
      <input type="text" id="ContactNumber" placeholder="Contact Number" name="contact">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      
      <button type="submit" class="btn">Register</button>
    </div>
  </div>
</form>

         </div>

      </div>

      
      <?php

        }

        else {
         ?>
         

          <div class="jumbotron">
        
        <p class="lead">Thank you for registration. Our Team will contact you soon.</p>
        <br/>
        <br/>
        <br/>
        <br/>
                <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

<?php 
        }
        ?>

      <hr>

      <div class="footer">
        <p>&copy; Solution Box Education and Research (P) Limited, Jodhpur(India) 2014</p>
      </div>
 
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-transition.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-alert.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-modal.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tab.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-popover.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-button.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-carousel.js"></script>
    <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
