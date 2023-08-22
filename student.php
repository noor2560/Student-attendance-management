<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
<style>
.a2{
text-align:center;
}
</style>
 <body>
   <!-- Fixed navbar -->




 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       
     
 </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Login/Sign up</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>

          
          </ul>
<u2 class="nav navbar-nav navbar-left">

<li><a href="home.php">Home</a></li>
</u2>
        </div><!--/.nav-collapse -->
      </div>

        
    </nav>
    </br></br></br></br>
<div class="a2">
<h2>STUDENT LOGIN</h2>
</div>
</br></br>


 <div class="container">
  <div id="output"></div>
  <form id="getAttendance">
    <div class="form-group">

      <label>Year of course</label>
      <select name="year" class="form-control">
        <?php foreach(range(date('Y',time()),1983) as $r) echo '<option>'.$r.'</option>'; ?>
      </select>
    </div>
    <div class="form-group">
      <label>Section</label>
      <select name="section" class="form-control">
      <option>1</option><option>2</option><option>3</option>	
    </select>
    </div>
    <div class="form-group">
      <label>Subject Code of Course</label>
      <input type="text" class="form-control" name="code" placeholder="Eg - CSE-216">
      <span class="help-block">DDD-NNN where D:Department, N: Number</span>
    </div>
    <div class="form-group">
      <label>Roll Number</label>
      <input type="text" class="form-control" name="roll" placeholder="Eg - 001/CS/19">
      <span class="help-block">NNN/DD/YY where N: Number, D: Department, Y: year</span>
    </div>
    <button class="btn btn-primary">Get Results</button>
  </form>
  </div>
  </div><!-- /.container -->
   <!-- FOOTER -->
      <footer style="background:; height:;">
        <p class="pull-right"><a href="#">Back to top</a></p>
  
      </footer>

    s
 </body>
</html>
