<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wellcome CSS Framework</title>
<link href="<?php echo base_url() ?>temp/01/css/wellcome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>temp/01/css/wellcome.min-media.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>temp/01/css/template.css" rel="stylesheet" type="text/css">

<script src="js/min.js"></script>
<script src="js/wellcome.min.js"></script>
</head>

<body>
<header class="box no-border no-padding no-margin">
	<div class="container no-padding">
	<div class="navbar">
        	<div class="logo-sec"><h4><a href="#"><img src="<?php echo base_url() ?>temp/01/image/logo.png"></a></h4></div>
            <div class="r-menu">Menu</div>
            <div class="nav_menu">
            <div class="clear"></div>
            	<ul>
                	<li><a href="#" class="nav_menu-active">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li class="nav-dropdown"><a href="#">Service</a>
                        <ul>
                            <li><a href="#">Sub Menu 1</a></li>
                            <li><a href="#">Sub Menu 2</a></li>
                            <li><a href="#">Sub Menu 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>

<!-- Banner -->
<div class="banner">
	<div class="container">
		<div class="box-large-big">
			<h1 class="text-center">This is Banner Image</h1>
		</div>
	</div>
</div>
<!-- End Banner -->

<!-- Servive Section -->
<div class="container text-center margin-top-60 margin-bottom-60">
	<div class="col-4">
		<h2>HTML5</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
		<a href="#" class="btn btn-blue margin-top-20">Read More</a>
	</div>
	<div class="col-4">
		<h2>CSS3</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
		<a href="#" class="btn btn-blue margin-top-20">Read More</a>
	</div>
	<div class="col-4">
		<h2>JQUERY</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
		<a href="#" class="btn btn-blue margin-top-20">Read More</a>
	</div>
	<div class="clear"></div>
</div>
<!-- End Servive Section -->

<!-- About Section -->
<div class="container-par-100 bg padding-top-60 pading-bottom-60 no-border">
<div class="container">
	<h3 class="text-center text-uppercase padding-20">Our Latest Projects</h3>
    <p class="text-center margin-bottom-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the<br> industry's standard dummy text ever Lorem Ipsum has been the</p>
    <div class="col-6">
    	<div class="shadow">
        <img src="<?php echo base_url() ?>temp/01/image/about_img.png" class="img-responsive">
        <h4 class="padding-10 pading-bottom-0">Project Name</h4>
        <p class="padding-10">Lorem Ipsum is simply dummy text</p>
        </div>
    </div>
    <div class="col-6">
    	<div class="shadow">
        <img src="<?php echo base_url() ?>temp/01/image/2.png" class="img-responsive">
        <h4 class="padding-10 pading-bottom-0">Project Name</h4>
        <p class="padding-10">Lorem Ipsum is simply dummy text</p>
        </div>
    </div>
    <div class="clear"></div>
</div>
</div>
<!-- End About Section -->

<!-- Plan -->
<div class="container margin-top-60 margin-bottom-60">
<h3 class="text-center text-uppercase padding-20">Best Price</h3>
    <p class="text-center margin-bottom-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
	<div class="col-4">
    	<div class="plan">
        	<div class="box-large text-center text-white">Basic <p class="text-size-34 padding-10">$20</p> Monthly</div>
            <div class="list1 text-center">
                <ul>
                    <li>First List</li>
                    <li>Second List</li>
                    <li>Third List</li>
                    <li>Four List</li>
                    <li>Five List</li>
                    <li>Six List</li>
                    <li>Seven List</li>
                </ul>
            </div>
            <a href="#" class="btn btn-blue padding-20 full margin-top-20">Purchase Now</a>
        </div>
    </div>
    <div class="col-4">
    	<div class="plan">
        	<div class="box-large text-center text-white">Basic <p class="text-size-34 padding-10">$20</p> Monthly</div>
            <div class="list1 text-center">
                <ul>
                    <li>First List</li>
                    <li>Second List</li>
                    <li>Third List</li>
                    <li>Four List</li>
                    <li>Five List</li>
                    <li>Six List</li>
                    <li>Seven List</li>
                </ul>
            </div>
            <a href="#" class="btn btn-blue padding-20 full margin-top-20">Purchase Now</a>
        </div>
    </div>
    <div class="col-4">
    	<div class="plan">
        	<div class="box-large text-center text-white">Basic <p class="text-size-34 padding-10">$20</p> Monthly</div>
            <div class="list1 text-center">
                <ul>
                    <li>First List</li>
                    <li>Second List</li>
                    <li>Third List</li>
                    <li>Four List</li>
                    <li>Five List</li>
                    <li>Six List</li>
                    <li>Seven List</li>
                </ul>
            </div>
            <a href="#" class="btn btn-blue padding-20 full margin-top-20">Purchase Now</a>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- End Plan -->

<!-- Footer -->
<div class="box-medium text-center text-white footer margin-top-50">Footer</div>
<!-- End Footer -->


</body>
</html>