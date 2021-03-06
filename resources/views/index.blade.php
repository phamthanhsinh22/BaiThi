@extends('master')
@section('title','day la trang index')
@section('content')
<!-- search box start -->
	<div class="container">
		<div class="search_box">
			<div class="row">
				<div class="col-sm-3">
					<div class="form-group">
                        <input type="text" class="email_boton" placeholder="Search for" name="Email">
                    </div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
                        <input type="text" class="email_boton" placeholder="Loction in" name="Email">
                    </div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
                        <input type="text" class="email_boton" placeholder="category" name="Email">
                    </div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
                        <button class="search_bt">Search</button>
                    </div>
				</div>
				<div class="fashion_menu">
                    	<ul>
                    		<li class="active"><a href="#">Auto Mobile</a></li>
                    		<li><a href="#">Fashion</a></li>
                    		<li><a href="#">Mother& Child</a></li>
                    		<li><a href="#">Jobs</a></li>
                    		<li><a href="#">Real estate</a></li>
                    		<li><a href="#">Pets</a></li>
                    		<li><a href="#">Sport</a></li>
                    		<li><a href="#">More</a></li>
                    	</ul>
                    </div>
			</div>
		</div>
	</div>
	<!-- search box end -->
	<!-- section PROMOTED start -->
	<div class=" layout_padding promoted_sectipon">
		<div class="container">
			<h1 class="promoted_text">PROMOTED <span style="border-bottom: 5px solid #4bc714;">ADS</span></h1>
			<div class="images_main">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><img src="images/img-1.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Mobiles</a></button>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><img src="images/img-2.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Cyicals</a></button>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><img src="images/img-3.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Cars</a></button>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><img src="images/img-4.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Laptops</a></button>
					</div>
				</div>
			</div>
			<div class="images_main">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div><img src="images/img-1.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Mobiles</a></button>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div><img src="images/img-2.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Cyicals</a></button>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div><img src="images/img-3.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Cars</a></button>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div><img src="images/img-4.png" style="width: 100%;"></div>
						<button class="promoted_bt">PROMOTED</button>
						<div class="eye-icon"><img src="images/eye-icon.png"><span class="like-icon"><img src="images/like-icon.png"></span></div>
						<div class="numbar_text">30<span class="like-icon">01</span></div>
						<button class="mobile_bt"><a href="#">Laptops</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- section PROMOTED end -->
	<!-- section POPULAR STORES start -->
    <div class="layout_padding popular_section">
    	<div class="container">
    		<h1 class="popular_taital">POPULAR <span style="border-bottom: 5px solid #4bc714;">STORES</span></h1>
    		<div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="popular_section_2">
    			    <div class="slider_img"><img src="images/img-5.png" style="max-width: 100%;"></div>
    			        <h2 class="electronic_text">Electronic shop</h2>
    			        <p class="contrary_text">Contrary to popular belief, Lorem 
                        Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <button class="view_bt"><a href="#">VIEW ADS</a></button>
    		        </div>
                </div>
            <div class="carousel-item">
                <div class="popular_section_2">
    			    <div class="slider_img"><img src="images/img-5.png"style="max-width: 100%;"></div>
    			        <h2 class="electronic_text">Electronic shop</h2>
    			        <p class="contrary_text">Contrary to popular belief, Lorem 
                        Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                        <button class="view_bt"><a href="#">VIEW ADS</a></button>
    		        </div>
                </div>
            <div class="carousel-item">
                <div class="popular_section_2">
    			    <div class="slider_img"><img src="images/img-5.png"style="max-width: 100%;"></div>
    			    <h2 class="electronic_text">Electronic shop</h2>
    			    <p class="contrary_text">Contrary to popular belief, Lorem 
                    Ipsum is not simply random text. It has roots in a piece of classical Latin literature from</p>
                    <button class="view_bt"><a href="#">VIEW ADS</a></button>
    		    </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-right"></i>
        </a>

    </div>
    </div>
    </div>
	<!-- section POPULAR STORES end -->
	<!-- about section start -->
    <div class="layout_padding about_section">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="about_taital">About Our Classified ads</h1>
    				<p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
    			</div>
    		</div>
    	</div>
    </div>
	<!-- about section end -->
	<!-- client section start -->
    <div class="layout_padding clients_section">
    	<div class="container">
    		<div id="client_slide" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#client_slide" data-slide-to="0" class="active"></li>
    <li data-target="#client_slide" data-slide-to="1"></li>
    <li data-target="#client_slide" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
    			<div class="col-sm-12">
    				<h1 class="promoted_text">CLIENTS <span style="border-bottom: 5px solid #4bc714;">REVIEW</span></h1>
    				<div class="client_img"><img src="images/client-img.png"></div>
    				<h1 class="client_text">JHON DUE</h1>
    				<p class="adiser_text">(adiser)</p>
    				<p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
    			</div>
    		</div>
    </div>
    <div class="carousel-item">
      <div class="row">
    			<div class="col-sm-12">
    				<h1 class="promoted_text">CLIENTS <span style="border-bottom: 5px solid #4bc714;">REVIEW</span></h1>
    				<div class="client_img"><img src="images/client-img.png"></div>
    				<h1 class="client_text">JHON DUE</h1>
    				<p class="adiser_text">(adiser)</p>
    				<p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
    			</div>
    		</div>
    </div>
    <div class="carousel-item">
      <div class="row">
    			<div class="col-sm-12">
    				<h1 class="promoted_text">CLIENTS <span style="border-bottom: 5px solid #4bc714;">REVIEW</span></h1>
    				<div class="client_img"><img src="images/client-img.png"></div>
    				<h1 class="client_text">JHON DUE</h1>
    				<p class="adiser_text">(adiser)</p>
    				<p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
    			</div>
    		</div>
        </div>
    </div>
    </div>
    </div>
    </div>
	<!-- client section end -->
	
@endsection