
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    $this->load->view('web/includes/header.php');
?> 
<body class="">
  <?php $this->load->view('web/includes/nevagation.php'); ?> 
  <div id="mainpublicContent">
<section id="main-container">
	<div class="container">
		<div class="row">
			<!-- Blog start -->
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<!-- Blog post start -->
				<div class="post-content">
					<!-- post image start -->
					<div class="post-image-wrapper">
						<img src="images/blog/blog1.jpg" class="img-fluid" alt="" />
						<span class="blog-date"><a href="#"> May 03, 2015</a></span>
					</div><!-- post image end -->
					<div class="post-header clearfix">
						<h2 class="post-title">
							<a href="blog-item.html">Over the year we have lots of experience in our field</a>
						</h2>
						<div class="post-meta">
							<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
							<span class="post-meta-cats">in <a href="#"> News</a></span>
							<div class="float-right">
								<span class="post-meta-comments"><a href="#"><i class="fa fa-comment-o"></i> 11</a></span>
								<span class="post-meta-hits"><a href="#"><i class="fa fa-heart-o"></i> 62</a></span>
							</div>

						</div><!-- post meta end -->
					</div><!-- post heading end -->
					<div class="entry-content">
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
							in some form, by injected humour, or randomised words which don’t look even slightly believable. If you
							are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in
							the middle dolor sit amet.</p>
						<p>Nulla sagittis convallis arcu. Sed sed nunc. Curabitur consequat. Quisque metus enim, venenatis
							fermentum, mollis in, porta et, nibh. Duis vulputate elit in elit. Mauris dictum libero id justo. Fusce in
							est. Sed nec diam. Pellentesque habitant morbi tristique senectus et netus. </p>
						<p>Phasellus tristique libero vel justo aliquam pellentesque. Maecenas vestibulum velit est, in tincidunt
							arcu fermentum id. Morbi ipsum arcu, iaculis nec sapien vel, egestas viverra eros. Phasellus ac dolor
							elit. Donec nisl tellus, posuere in commodo ac, placerat a elit. Nulla fringilla venenatis metus, sed
							laoreet nisi varius non. Nunc placerat tempor orci id mattis. Suspendisse pulvinar nisl neque, rutrum
							pellentesque neque commodo non. Maecenas ultrices tortor sit amet suscipit tempor. Aenean et nunc
							pharetra, pulvinar nibh sed, mattis urna. Morbi vel lectus convallis, tristique mi non, feugiat eros.
							Praesent fermentum odio et egestas condimentum.</p>
					</div>
					<!-- Author info start -->
					<div class="about-author">
						<div class="author-img float-left">
							<img src="images/blog/author.jpg" alt="" />
						</div>
						<div class="author-info">
							<h3>Josefine Kristy <span>Web Developer</span></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum eget justo sit amet
								varius.</p>
							<p class="author-url">Website: <span><a href="#">http://www.spikeincor.eu</a></span></p>

						</div>
					</div>
					<!-- Author info end -->

					<div class="gap-30"></div>

					<!-- Post comment start -->
					<div id="post-comments">
						<div class="comments-counter"><a href="#">07 Comments found</a></div>
						<ul class="comments-list">
							<li>
								<div class="comment">
									<img class="comment-avatar float-left" alt="" src="images/blog/avator1.png">
									<div class="comment-body">
										<h4 class="comment-author">Jack Ruler</h4>
										<div class="comment-date">March 29, 2014 at 1:38 pm</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In magna ligula, faucibus sed ligula ut,
											venenatis mattis diam. Proin feugiat mollis nibh.</p>
										<div class="text-right weight-600">
											<a class="comment-reply" href="#">
												<i class="fa fa-mail-reply"></i> Reply</a>
										</div>
									</div>
								</div>
								<ul class="comments-reply">
									<li>
										<div class="comment">
											<img class="comment-avatar float-left" alt="img" src="images/blog/avator2.jpg">
											<div class="comment-body">
												<h4 class="comment-author">Jack Ruler</h4>
												<div class="comment-date">March 29, 2014 at 1:38 pm</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In magna ligula, faucibus sed ligula
													ut, venenatis mattis diam. Proin feugiat mollis nibh.</p>
												<div class="text-right weight-600">
													<a class="comment-reply" href="#">
														<i class="fa fa-mail-reply"></i> Reply</a>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="comment">
											<img class="comment-avatar float-left" alt="" src="images/blog/avator1.png">
											<div class="comment-body">
												<h4 class="comment-author">Jack Ruler</h4>
												<div class="comment-date">March 29, 2014 at 1:38 pm</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In magna ligula, faucibus sed ligula
													ut, venenatis mattis diam. Proin feugiat mollis nibh.</p>
												<div class="text-right weight-600">
													<a class="comment-reply" href="#">
														<i class="fa fa-mail-reply"></i> Reply</a>
												</div>
											</div>
										</div>
									</li>
								</ul><!-- comments-reply end -->
								<div class="comment last">
									<img class="comment-avatar float-left" alt="" src="images/blog/author.jpg">
									<div class="comment-body">
										<h4 class="comment-author">Jack Ruler</h4>
										<div class="comment-date">March 29, 2014 at 1:38 pm</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In magna ligula, faucibus sed ligula ut,
											venenatis mattis diam. Proin feugiat mollis nibh.</p>
										<div class="text-right weight-600">
											<a class="comment-reply" href="#">
												<i class="fa fa-mail-reply"></i> Reply</a>
										</div>
									</div>
								</div>
							</li><!-- Comments-list li end -->
						</ul><!-- Comments-list ul end -->
					</div><!-- Post comment end -->

					<div class="comments-form">
						<h3>Leave a comment</h3>
						<form role="form">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Your Name</label>
										<input class="form-control" name="name" id="name" placeholder="" type="text" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Your Email</label>
										<input class="form-control" name="email" id="email" placeholder="" type="email" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Your Website</label>
										<input class="form-control" placeholder="" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control required-field" id="message" placeholder="" rows="8" required></textarea>
							</div>
							<div><br>
								<button class="btn btn-primary" type="submit">Post Comment</button>
							</div>
						</form>
					</div><!-- Comments form end -->
				</div><!-- Blog post end -->
			</div>
			<!--/ Content col end -->

			<!-- sidebar start -->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

				<div class="sidebar sidebar-right">

					<!-- Blog search start -->
					<div class="widget widget-search">
						<h3 class="widget-title">Search</h3>
						<div id="search">
							<input class="form-control form-control-lg" placeholder="search" type="search">
						</div>
					</div><!-- Blog search end -->

					<!-- Tab widget start-->
					<div class="widget widget-tab">
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" href="#popular-tab" data-toggle="tab">popular</a></li>
							<li class="nav-item"><a class="nav-link" href="#recent-tab" data-toggle="tab">recent</a></li>
							<li class="nav-item"><a class="nav-link" href="#comments-tab" data-toggle="tab">comments</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade show active" id="popular-tab">
								<ul class="posts-list list-unstyled clearfix">
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog1.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's 'oldest town'</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 14</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- First post end-->
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog2.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title">
												<a href="#">Lorem ipsum dolor sit amet, consectetur claims</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> October 19</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog3.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title">
												<a href="#">Should You Ever Skip Giving A Tip?</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 3rd post end-->
								</ul>
							</div><!-- Popular tabpan end -->

							<div class="tab-pane fade" id="recent-tab">
								<ul class="posts-list list-unstyled clearfix">
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog3.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's 'oldest town'</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- First post end-->
									<li>
										<div class="posts-thumb float-left">
											<a href="#">
												<img alt="img" src="images/blog/blog1.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">Bulgaria claims to find Europe's 'oldest town'</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Admin</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> October 19</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
								</ul>
							</div><!-- Recent tabpan end -->

							<div class="tab-pane fade" id="comments-tab">
								<ul class="posts-list list-unstyled clearfix">
									<li>
										<div class="posts-avator float-left">
											<a href="#">
												<img alt="img" src="images/blog/avator1.png">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">If you are going to use a passage of Lorem Ipsum</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> John</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> November 21</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- First post end-->
									<li>
										<div class="posts-avator float-left">
											<a href="#">
												<img alt="img" src="images/blog/avator2.jpg">
											</a>
										</div>
										<div class="post-content">
											<h4 class="entry-title"><a href="#">you need to be sure there isn’t anything embarra</a>
											</h4>
											<p class="post-meta">
												<span class="post-meta-author">Posted by <a href="#"> Tina</a></span>
												<span class="post-meta-date"><a href="#"> <i class="fa fa-clock-o"></i> October 18</a>
												</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</li><!-- 2nd post end-->
								</ul>
							</div><!-- Comment tabpan end -->
						</div><!-- Tab content end -->
					</div><!-- Tab widget end-->

					<!-- Blog category start -->
					<div class="widget widget-categories">
						<h3 class="widget-title">Blog Categories</h3>
						<ul class="category-list clearfix">
							<li><a href="#">Objects</a><span class="posts-count"> (19)</span></li>
							<li><a href="#">Technology</a><span class="posts-count"> (09)</span></li>
							<li><a href="#">Photography</a><span class="posts-count"> (13)</span></li>
							<li><a href="#">Fashion</a><span class="posts-count"> (10)</span></li>
							<li><a href="#">Realtough</a><span class="posts-count"> (14)</span></li>
							<li><a href="#">Architecture</a><span class="posts-count"> (11)</span></li>
						</ul>
					</div><!-- Blog category end -->

					<!-- Blog tags start -->
					<div class="widget widget-tags">
						<h3 class="widget-title">Popular Tags</h3>
						<ul class="list-unstyled clearfix">
							<li><a href="#">iMac</a></li>
							<li><a href="#">Black and Green</a></li>
							<li><a href="#">Crative</a></li>
							<li><a href="#">Momentum</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Cellular</a></li>
							<li><a href="#">Niche</a></li>
						</ul>
					</div><!-- Blog tags end -->

					<!-- Blog tags start -->
					<div class="widget">
						<h3 class="widget-title">Text Widgets</h3>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when
							looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normalopposed.</p>
					</div><!-- Text widget end -->

				</div><!-- sidebar end -->
			</div>
		</div>
		<!--/ row end -->
	</div>
	<!--/ container end -->
</section><!-- Blog details page end -->


<div class="gap-40"></div>
  </div>
 <?php  $this->load->view('web/includes/footer.php'); ?>
</body>
