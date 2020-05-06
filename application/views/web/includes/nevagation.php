<body>
<div class="body-inner">
<header id="header" class="fixed-top header" role="banner" style="background: red">
    <a class="navbar-brand navbar-bg" href="index.html"><img class="img-fluid float-right" src="<?php echo base_url();?>assest/images/weblogo.png" alt="logo"></a>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
                data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> 
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Company
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php?baseController/loadpage/about">About Us</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php?baseController/loadpage/service">Services</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php?baseController/loadpage/career">Career</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php?baseController/loadpage/testimonial">Testimonials</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>index.php?baseController/loadpage/faq">Faq</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php?baseController/loadpage/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php?baseController/loadpage/pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php?baseController/loadpage/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php?baseController/loadpage/contact">Contact</a>
                    </li>
                    <!----------
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php?baseController/loadpage/signup">Get Registred</a>
                    </li>---------------->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>index.php?baseController/loadpage/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
