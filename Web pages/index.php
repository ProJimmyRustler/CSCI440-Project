<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check Me Out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      /*background-image: url("https://www.menshealth.com/sites/menshealth.com/files/most-americans-not-eating-enough-fruits-vegetables.jpg");
      background-position: center center;
      background-repeat: no-repeat;
      opacity: 0.3;
      filter: alpha(opacity=30); /* For IE8 and earlier */
      font-weight: bold;
      background-color: #e3eced;*/
    }

.tab {
		  float: left;
		  display: block;
		  color: black;
		  text-align: center;
		  padding:10px;
		  text-decoration: none;
		  font-size: 17px;
		  border: 1px solid #b7bbbd
		  border-radius:5px;
		}

   
    /* Add a background color and some padding to the footer */
    footer {
      background-color: #e3eced;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1><b>Check Me Out</b></h1>      
    <p>A Supermarket At Your Fingertips</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="https://github.com/ProJimmyRustler/CSCI440-Project">Git Hub</a></li>
	<li class="tab"><form action="product_test.php" method="get" id="searchform">
		<input type="text" placeholder="Search.." name = "itemID">
		<button type="submit"><i class="fa fa-search"></i></button></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">TOP TEN RECIPES</div>
        <div class="panel-body"><img src="http://cdn-image.myrecipes.com/sites/default/files/styles/4_3_horizontal_-_1200x900/public/1506120378/MR_0917170472.jpg?itok=KPTNrvis" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">START SHOPPING</div>
        <div class="panel-body"><img src="http://img1.cookinglight.timeinc.net/sites/default/files/styles/medium_2x/public/image/2017/05/main/summer-fruits-vegetables-1706p78.jpg?itok=8php1DrR" class="img-responsive" style="width:110%" alt="Image"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">NEW SERVICE: MEAL IN A BOX</div>
        <div class="panel-body"><img src="https://imagesvc.timeincapp.com/v3/mm/image?url=http%3A%2F%2Fcdn-image.foodandwine.com%2Fsites%2Fdefault%2Ffiles%2Fstyles%2Fmedium_2x%2Fpublic%2F1490801246%2Fred-velvet-company-FT-BLOG0317.jpg%3Fitok%3DUtwET-V_&w=700&q=85" class="img-responsive" style="width:100%" alt="Image"></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">FEBRUARY DEALS</div>
        <div class="panel-body"><img src="https://www.prlog.org/12302414-amazon-coupon-codes-february-2015-promo-code-and-deals.jpg" class="img-	 			responsive" style="width:64%" alt="Great Deals"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">COUPONS</div>
        <div class="panel-body"><img src="http://frugalfinders.com/wp-content/uploads/2011/04/Where-to-Find-Coupons.jpg" class="img-responsive" style="width:100%" alt="Coupons"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">MARCH DEALS</div>
        <div class="panel-body"><img src="https://www.prlog.org/12302414-amazon-coupon-codes-february-2015-promo-code-and-deals.jpg" class="img-responsive" style="width:64%" alt="Great Deals"></div>
        
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50%" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
