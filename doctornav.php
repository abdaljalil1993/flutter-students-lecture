 <nav class="navbar navbar-light" style="background-color: #00395d">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border: 1px solid white">
        <span class="icon-bar" style="background-color: white;color: white"></span>
        <span class="icon-bar" style="background-color: white;color: white"></span>
        <span class="icon-bar" style="background-color: white;color: white"></span>
      </button>
      <a class="navbar-brand" href="#">Doctor Panel</a>
    </div>
    <div id="myNavbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="doctor.php" style="color: #00aeef">Home</a></li>

      <li class="dropdown">
        <a style="color: #00aeef" class="dropdown-toggle" data-toggle="dropdown" href="#">Lecturs
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addlec.php">Add New Lecture</a></li>
          <li><a href="ml.php">Delete & Edit Lectures</a></li>
          
        </ul>
      </li>
     
       <li class="dropdown">
        <a style="color: #00aeef" class="dropdown-toggle" data-toggle="dropdown" href="#">Posts
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addpost.php">Add New Post</a></li>
          <li><a href="mp.php">Delete & Edit Posts </a></li>
          
        </ul>
      </li>

       <li class="dropdown">
        <a style="color: #00aeef" class="dropdown-toggle" data-toggle="dropdown" href="#">Messages
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addmsg.php">Send Message</a></li>
          <li><a href="mmsg.php">Show My Message</a></li>
          
        </ul>
      </li>


       <li class="dropdown">
        <a style="color: #00aeef" class="dropdown-toggle" data-toggle="dropdown" href="#">Marks
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addmark.php">Add Marks File</a></li>
          <li><a href="mmark.php">Manage MArk File</a></li>
          
        </ul>
      </li>




         
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.php"><span class="fa fa-user"></span> LogOut</a></li>
    </ul>
    </div>
  </div>
</nav>