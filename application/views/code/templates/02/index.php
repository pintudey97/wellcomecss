<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wellcome CSS Framework Template 02</title>
<link href="<?php echo base_url() ?>temp/02/css/wellcome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>temp/02/css/wellcome.min-media.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>temp/02/css/template.css" rel="stylesheet" type="text/css">

<script src="<?php echo base_url() ?>temp/02/js/min.js"></script>
<script src="<?php echo base_url() ?>temp/02/js/wellcome.min.js"></script>
</head>

<body>
<!-- Side Menu -->
<div class="mobile_menu_left_overlay">
<a class="btn success-bg mobile_menu_left_overlay_close" href="javascript:void(0);">Close Menu</a>
	<ul>
    	<li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
<div class="clear"></div>
</div>
<!-- End Side Menu -->
<!-- Header & Banner -->
<div class="box padding-0 margin-0 no-border background_bg">
	<div class="container-par-80 no_bgbor">
        <div class="box-medium no_bgbor">
            <p class="mobile_menu_left_overlay_click btn btn-black text-uppercase">menu</p>
        </div>
        <div class="box-large-big no_bgbor">
            <h1 class="text-center text-size-40">Wellcome CSS Framework Template</h1>
            <div class="line"></div>
            <p class="text-center margin-top-40 margin-bottom-40">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br>industry's standard dummy 
text ever since the 1500s,</p>
			<a href="<?php echo base_url('home/download/' . base64_encode($this->encrypt->encode('temp/02.zip'))); ?>" class="btn btn-black custom_btn">Download Template</a>
        </div>
    </div>
</div>
<!-- End Header & Banner -->
<!-- Service -->
<div class="container-par-90 no_bgbor">
<h3 class="text-center text-size-30 padding-20">Service</h3>
    <div class="col-4">
    	<div class="imgeff">
            <img src="<?php echo base_url() ?>temp/02/image/1.jpg" class="img-responsive">
            <div class="black_layer">
            	<h4 class="img_heading">Image Caption</h4>
                <p class="text-white margin-50 padding-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
            </div>
        </div>
    </div>
    <div class="col-4">
    	<div class="imgeff">
            <img src="<?php echo base_url() ?>temp/02/image/1.jpg" class="img-responsive">
            <div class="black_layer">
            	<h4 class="img_heading">Image Caption</h4>
                <p class="text-white margin-50 padding-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
            </div>
        </div>
    </div>
    <div class="col-4">
    	<div class="imgeff">
            <img src="<?php echo base_url() ?>temp/02/image/1.jpg" class="img-responsive">
            <div class="black_layer">
            	<h4 class="img_heading">Image Caption</h4>
                <p class="text-white margin-50 padding-20">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
            </div>
        </div>
    </div>
</div>
<!-- End Service -->

<!-- Our Blog -->
<div class="container-par-90 padding-50 no_bgbor responsive_padding0">
	<h3 class="text-center text-size-30 padding-20">Our Blog</h3>
    <p class="text-center text-size-16">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <div class="expend">
	<div class="col-6">
    	<div class="box margin-top-20">
        	<img src="<?php echo base_url() ?>temp/02/image/1.jpg" class="img-responsive">
            <h3 class="text-size-20 pading-top-20">Your Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150s.</p>
            <a href="#" class="btn btn-success margin-top-10">Read More</a>
        </div>
    </div>
    <div class="col-6">
    	<div class="box margin-top-20">
        	<img src="<?php echo base_url() ?>temp/02/image/1.jpg" class="img-responsive">
            <h3 class="text-size-20 pading-top-20">Your Text</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150s.</p>
            <a href="#" class="btn btn-success margin-top-10">Download</a>
        </div>
    </div>
    </div>
</div>
<!-- End Our Blog -->

<!-- News Latter -->
<div class="container-par-100 no_bgbor padding-0">
	<div class="background_bg padding-50">
    	<div class="wrapper">
        	<h3 class="text-center text-size-30 padding-20">News Latter</h3>
            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <div class="expend">
                <div class="col-10"><input type="email" class="input" placeholder="Enter Your Email Adders....."></div>
                <div class="col-2"><input type="submit" class="btn btn-black sendbutton" value="Send"></div>
            </div>
        </div>
    </div>
</div>
<!-- End News Latter -->

<!-- Footer -->
<div class="container-par-100 no_bgbor padding-0">
	<div class="black-bg text-white padding-20 text-center">
    	Wellcome CSS Framework Template
    </div>
</div>
<!-- End Footer -->

</body>
</html>