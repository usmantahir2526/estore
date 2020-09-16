@extends('main.layouts.app')
@section('content')


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>{{$category_products->category}}</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row'>
			<div class='col-md-3 sidebar'>
	            <!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Clothing</a>
                 <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">  
                     <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                              <li><a href="#">Shorts</a></li>  
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                      <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                               <li><a href="#">Night Suits</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                   <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                               <li><a href="#">Wipes</a></li>      
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                               <li><a href="#">Toys</a></li>
                                    
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Electronics</a>
                 <!-- ================================== MEGAMENU VERTICAL ================================== -->
<ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Routers &amp; Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div>

            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->
<!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paw" aria-hidden="true"></i>Shoes</a>
                 <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">  
                     <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                              <li><a href="#">Shorts</a></li>  
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                      <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                               <li><a href="#">Night Suits</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                   <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                               <li><a href="#">Wipes</a></li>      
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                               <li><a href="#">Toys</a></li>
                                    
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-clock-o"></i>Watches</a>
                <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Routers &amp; Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div>

            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Jewellery</a>
                <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">  
                     <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                              <li><a href="#">Shorts</a></li>  
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                      <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                               <li><a href="#">Night Suits</a></li>
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                   <li><a href="#">Toys &amp; Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                               <li><a href="#">Wipes</a></li>      
                </ul>
            </div><!-- /.col -->
            <div class="col-sm-12 col-md-3">
                <ul class="links list-unstyled">
                    <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                               <li><a href="#">Toys</a></li>
                                    
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Health and Beauty</a>
                <ul class="dropdown-menu mega-menu">
    <li class="yamm-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-4">
                <ul>
                    <li><a href="#">Routers &amp; Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div>

            <div class="dropdown-banner-holder">
                <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a>
            </div>
        </div><!-- /.row -->
    </li><!-- /.yamm-content -->                    
</ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a>
                 <!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-futbol-o"></i>Sports</a>
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
<!-- /.dropdown-menu -->
<!-- ================================== MEGAMENU VERTICAL ================================== -->            </li><!-- /.menu-item -->

            <li class="dropdown menu-item">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-envira"></i>Home and Garden</a>
               <!-- /.dropdown-menu -->            </li><!-- /.menu-item -->
          
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->	            <div class="sidebar-module-container">
	            	
	            	<div class="sidebar-filter">
		            	<!-- ============================================== SIDEBAR CATEGORY ============================================== -->
<div class="sidebar-widget wow fadeInUp">
<h3 class="section-title">shop by</h3>
	<div class="widget-header">
		<h4 class="widget-title">Category</h4>
	</div>
	<div class="sidebar-widget-body">
		<div class="accordion">
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Camera
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed">
	                  Desktops
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Pants
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed">
	                   Bags
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed">
	                  Hats
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	        <div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed">
	                 Accessories
	                </a>
	            </div><!-- /.accordion-heading -->
	            <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
	                <div class="accordion-inner">
	                    <ul>
	                        <li><a href="#">gaming</a></li>
	                        <li><a href="#">office</a></li>
	                        <li><a href="#">kids</a></li>
	                        <li><a href="#">for women</a></li>
	                    </ul>
	                </div><!-- /.accordion-inner -->
	            </div><!-- /.accordion-body -->
	        </div><!-- /.accordion-group -->

	    </div><!-- /.accordion -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

		            	<!-- ============================================== PRICE SILDER============================================== -->
<div class="sidebar-widget wow fadeInUp">
	<div class="widget-header">
		<h4 class="widget-title">Price Slider</h4>
	</div>
	<div class="sidebar-widget-body m-t-10">
		<div class="price-range-holder">
      	    <span class="min-max">
                 <span class="pull-left">$200.00</span>
                 <span class="pull-right">$800.00</span>
            </span>
            <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">

            <input type="text" class="price-slider" value="" >
   
        </div><!-- /.price-range-holder -->
        <a href="#" class="lnk btn btn-primary">Show Now</a>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRICE SILDER : END ============================================== -->
		            	<!-- ============================================== MANUFACTURES============================================== -->
<div class="sidebar-widget wow fadeInUp">
	<div class="widget-header">
		<h4 class="widget-title">Manufactures</h4>
	</div>
	<div class="sidebar-widget-body">
		<ul class="list">
            <li><a href="#">Forever 18</a></li>
            <li><a href="#">Nike</a></li>
            <li><a href="#">Dolce & Gabbana</a></li>
            <li><a href="#">Alluare</a></li>
            <li><a href="#">Chanel</a></li>
            <li><a href="#">Other Brand</a></li>
          </ul>
        <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== MANUFACTURES: END ============================================== -->
		            	<!-- ============================================== COLOR============================================== -->
<div class="sidebar-widget wow fadeInUp">
	<div class="widget-header">
		<h4 class="widget-title">Colors</h4>
	</div>
	<div class="sidebar-widget-body">
		<ul class="list">
            <li><a href="#">Red</a></li>
            <li><a href="#">Blue</a></li>
            <li><a href="#">Yellow</a></li>
            <li><a href="#">Pink</a></li>
            <li><a href="#">Brown</a></li>
            <li><a href="#">Teal</a></li>
          </ul>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== COLOR: END ============================================== -->
		            	<!-- ============================================== COMPARE============================================== -->
<div class="sidebar-widget wow fadeInUp outer-top-vs">
    <h3 class="section-title">Compare products</h3>
	<div class="sidebar-widget-body">
		<div class="compare-report">
			<p>You have no <span>item(s)</span> to compare</p>
		</div><!-- /.compare-report -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== COMPARE: END ============================================== -->
		            	<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
	<h3 class="section-title">Product tags</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">					
			<a class="item" title="Phone" href="category.html">Phone</a>
			<a class="item active" title="Vest" href="category.html">Vest</a>
			<a class="item" title="Smartphone" href="category.html">Smartphone</a>
			<a class="item" title="Furniture" href="category.html">Furniture</a>
			<a class="item" title="T-shirt" href="category.html">T-shirt</a>
			<a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
			<a class="item" title="Sneaker" href="category.html">Sneaker</a>
			<a class="item" title="Toys" href="category.html">Toys</a>
			<a class="item" title="Rose" href="category.html">Rose</a>
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== -->		            	

	            	</div><!-- /.sidebar-filter -->
	            </div><!-- /.sidebar-module-container -->
            </div><!-- /.sidebar -->
			<div class='col-md-9'>
					<!-- ========================================== SECTION – HERO ========================================= -->	

			
<!-- ========================================= SECTION – HERO : END ========================================= -->
<div class="clearfix filters-container m-t-10">
	<div class="row">
		<div class="col col-sm-6 col-md-2">
			<div class="filter-tabs">
				<ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
					<li class="active">
						<a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a>
					</li>
					<li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
				</ul>
			</div><!-- /.filter-tabs -->
		</div><!-- /.col -->

	</div><!-- /.row -->
</div>
<div class="search-result-container ">
	<div id="myTabContent" class="tab-content category-list">
		<div class="tab-pane active " id="grid-container">
			<div class="category-product">
				<div class="row">									
										

	@foreach ($category_products->products as $category_product)
		
<div class="col-sm-6 col-md-4 wow fadeInUp">
	<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="/detail/{{$category_product->id}}">
					@php
						$count=0;
					@endphp
					@foreach ($category_product->images as $image)
					@if ($count==0)
						<img  src="{{ url('/') }}/images/{{$image->image}}" alt="">
						@php
							$count = $count+1;
						@endphp
					@endif
					@endforeach
				</a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>{{$category_product->sale}}</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="/detail/{{$category_product->id}}">{{$category_product->title}}</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs {{$category_product->price}}			</span>
										     <span class="price-before-discount">Rs 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<a style="cursor: pointer;" onclick="fun_add({{$category_product->id}})">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   </a>
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->

	@endforeach
										</div><!-- /.row -->
							</div><!-- /.category-product -->
						
						</div><!-- /.tab-pane -->
							
<div class="tab-pane "  id="list-container">
	<div class="category-product">
							
		
@foreach ($category_products->products as $category_product)
		
<div class="category-product-inner wow fadeInUp">
	<div class="products">				
        <div class="product-list product">
	<div class="row product-list-row">
		<div class="col col-sm-4 col-lg-4">
			<div class="product-image">
				<div class="image">
					@php
						$count =0;
					@endphp
					@foreach($category_product->images as $image)
					@if($count==0)
						<img src="{{ url('/') }}/images/{{$image->image}}" alt="">
						@php
							$count = $count+1;
						@endphp
					@endif
					@endforeach
				</div>
			</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col col-sm-8 col-lg-8">
			<div class="product-info">
				<h3 class="name"><a href="/detail/{{$category_product->id}}">{{$category_product->title}}</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
					<span class="price">
						RS {{$category_product->price}}				</span>
												     <span class="price-before-discount">Rs 800</span>
											
				</div><!-- /.product-price -->
				<div class="description m-t-10">Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget, lacinia id purus. Suspendisse posuere arcu diam, id accumsan eros pharetra ac. Nulla enim risus, facilisis bibendum gravida eget.</div>
                				<div class="cart clearfix animate-effect">
					<div class="action">
						<ul class="list-unstyled">
							<a style="cursor: pointer;" onclick="fun_add({{$category_product->id}})">
							<li class="add-cart-button btn-group">
								<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
									<i class="fa fa-shopping-cart"></i>													
								</button>
								<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
														
							</li>
		                   </a>
			                <li class="lnk wishlist">
								<a class="add-to-cart" href="detail.html" title="Wishlist">
									 <i class="icon fa fa-heart"></i>
								</a>
							</li>

							<li class="lnk">
								<a class="add-to-cart" href="detail.html" title="Compare">
								    <i class="fa fa-signal"></i>
								</a>
							</li>
						</ul>
					</div><!-- /.action -->
				</div><!-- /.cart -->
								
			</div><!-- /.product-info -->	
		</div><!-- /.col -->
	</div><!-- /.product-list-row -->
    <div class="tag hot"><span>{{$category_product->sale}}</span></div></div><!-- /.product-list -->
	</div><!-- /.products -->
</div><!-- /.category-product-inner -->
@endforeach			
										
							</div><!-- /.category-product -->
						</div><!-- /.tab-pane #list-container -->
					</div><!-- /.tab-content -->

				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		
		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->

</div><!-- /.body-content -->
 <script type="text/javascript">
              function fun_add(id) {
                $.ajax({
                  url:"/add/cart/" +id,
                  method:"get",
                  data:{id:id},
                  success:function(data)
                  {
                    response=$.parseJSON(data);
                    console.log(response);
                    $('#message').html(response.output);
                    // $('#total').text(response.total);
                    $('.total').text(response.total);
                    $('#quantity').text(response.quantity);
                  }
                });
              }
            </script>
@endsection