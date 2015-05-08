<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li> 
            <li><a href="#">Page 3</a></li> 
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
    </nav>

 <div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/sunset.jpg" alt="sunset" width="460" height="345">
    </div>

    <div class="item">
      <img src="images/bird.jpg" alt="bird" width="460" height="345">
    </div>

    <div class="item">
      <img src="images/member.jpg" alt="member" width="460" height="345">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<br>

    <div class="row">
      <div class="col-md-8" style="background-color:lavenderblush;">
        <div class="row">
          <div class="col-md-8"><img src="images/oth.png" width="100" height="70"></div>
          <div class="col-md-4"><h3>Over the Horizon Project</h3></div>
        </div><!--end row-->
        <a href="#">over-the-horizon-consumption.org</a>
        <p>This analysis is based on the human footprint map. The human footprint map shows 
          the combined effect of human land use, population density, access, and electrical 
          power, derived from satellite imagery and other sources (Sanderson et al. 2002.) 
          The metric of combined human influence is called the "human influence index," 
          which varies from 0 (no influence from the factors above) to 64 (all factors influence 
          a location).</p>
      </div><!--end col-md-8-->

      <div class="col-md-4">
        <div class="row">
          <div class="cl-md-12">
            <div class="panel panel-default">
              <div class="panel-body">A Basic Panel</div>
            </div><!--end panel-->
            <div class="panel panel-default">
              <div class="panel-body">A Basic Panel</div>
            </div><!--end panel-->
          </div><!--end cl-md-12-->
        </div><!--end row-->
      </div><!--end col-md-4-->
    </div>
  </div>

</body>
</html>