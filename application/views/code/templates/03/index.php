<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wellcome CSS Framework Template 02</title>
<link href="<?php echo base_url() ?>temp/03/css/wellcome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>temp/03/css/wellcome.min-media.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>temp/03/css/template.css" rel="stylesheet" type="text/css">

<script src="<?php echo base_url() ?>temp/03/js/min.js"></script>
<script src="<?php echo base_url() ?>temp/03/js/wellcome.min.js"></script>
</head>

<body>
<header>
	<h1 class="text-size-34 text-uppercase margin-top-40 text-center"><a href="javascript:void(0);">My Blog</a></h1>
</header>
<nav class="margin-top-40">
	<ul>
    	<li><a href="#">Home</a></li>
        <li><a href="#">Aout</a></li>
        <li><a href="#">Content</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="<?php echo base_url('home/download/' . base64_encode($this->encrypt->encode('temp/03.zip'))); ?>">Download</a></li>
        
    </ul>
</nav>

<!-- Body Contant -->
<div class="bodycontant_bg">
	<div class="container">
    	<div class="expend">
        	<div class="col-8">
            	<!-- Blog Section -->
            	<aside class="box">
                	<img src="<?php echo base_url() ?>temp/03/image/blog.jpg" class="img-responsive">
                    <h2 class="margin-top-10 margin-bottom-10"><a href="#">Your Blog Heading</a></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    <div class="expend">
                    	<div class="col-6"><a href="#" class="btn btn-success margin-top-10 margin-bottom-10 readmore">Read More</a></div>
                        <div class="col-6"><p class="text-italic text-right margin-top-10">2 Day Ago</p></div>
                    </div>
                </aside>
                <!-- End Blog Section -->
                <!-- Blog Section -->
            	<aside class="box">
                	<img src="<?php echo base_url() ?>temp/03/image/blog.jpg" class="img-responsive">
                    <h2 class="margin-top-10 margin-bottom-10"><a href="#">Your Blog Heading</a></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    <div class="expend">
                    	<div class="col-6"><a href="#" class="btn btn-success margin-top-10 margin-bottom-10 readmore">Read More</a></div>
                        <div class="col-6"><p class="text-italic text-right margin-top-10">2 Day Ago</p></div>
                    </div>
                </aside>
                <!-- End Blog Section -->
                <!-- Blog Section -->
            	<aside class="box">
                	<img src="<?php echo base_url() ?>temp/03/image/blog.jpg" class="img-responsive">
                    <h2 class="margin-top-10 margin-bottom-10"><a href="#">Your Blog Heading</a></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    <div class="expend">
                    	<div class="col-6"><a href="#" class="btn btn-success margin-top-10 margin-bottom-10 readmore">Read More</a></div>
                        <div class="col-6"><p class="text-italic text-right margin-top-10">2 Day Ago</p></div>
                    </div>
                </aside>
                <!-- End Blog Section -->
                <!-- Blog Section -->
            	<aside class="box">
                	<img src="<?php echo base_url() ?>temp/03/image/blog.jpg" class="img-responsive">
                    <h2 class="margin-top-10 margin-bottom-10"><a href="#">Your Blog Heading</a></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                    <div class="expend">
                    	<div class="col-6"><a href="#" class="btn btn-success margin-top-10 margin-bottom-10 readmore">Read More</a></div>
                        <div class="col-6"><p class="text-italic text-right margin-top-10">2 Day Ago</p></div>
                    </div>
                </aside>
                <!-- End Blog Section -->
            </div>
            <div class="col-4">
            	<aside class="box">
                	<div class="inline-form">
                    	<input type="text" placeholder="Enter Keyword....." class="inline-form-input">
                        <input type="submit" class="btn inline-form-btn">
                    </div>
                </aside>
                <aside class="box">
                	<h3 class="text-uppercase text-size-18">Popular Posts</h3>
                    <div class="expend margin-top-10">
                    	<div class="col-3"><figure><img src="<?php echo base_url() ?>temp/03/image/default.jpg" alt="" class="img-responsive"></figure></div>
                        <div class="col-8">
                        	<h4><a href="#">Post Heading</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="expend margin-top-10">
                    	<div class="col-3"><figure><img src="<?php echo base_url() ?>temp/03/image/default.jpg" alt="" class="img-responsive"></figure></div>
                        <div class="col-8">
                        	<h4><a href="#">Post Heading</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <div class="expend margin-top-10">
                    	<div class="col-3"><figure><img src="<?php echo base_url() ?>temp/03/image/default.jpg" alt="" class="img-responsive"></figure></div>
                        <div class="col-8">
                        	<h4><a href="#">Post Heading</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-success margin-top-10 margin-bottom-10 readmore">All Popular Posts</a>
                </aside>
                <aside class="box">
                	<h3 class="text-uppercase text-size-18">Tags</h3>
                    <span class="badges"><span class="sq"><a href="#">Index</a></span></span>
                    <span class="badges"><span class="sq"><a href="#">Fashion</a></span></span>
                    <span class="badges"><span class="sq"><a href="#">Social</a></span></span>
                    <span class="badges"><span class="sq"><a href="#">Science</a></span></span>
                    <span class="badges"><span class="sq"><a href="#">Index</a></span></span>
                    <span class="badges"><span class="sq"><a href="#">Fashion</a></span></span>
                    <span class="badges"><span class="sq"><a href="#">Social</a></span></span>
                    <span class="badges"><span class="sq"><a href="#">Science</a></span></span>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Body Contant -->

<!-- Footer -->
<footer class="container-par-100 black-bg text-white text-center">
	<div class="container">
    	Wellcome CSS Framework Template {HTML5}
    </div>
</footer>
<!-- End Footer -->

</body>
</html>