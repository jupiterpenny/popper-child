<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package popper
 */

get_header(); ?>
<div class="container-fluid no-gutters" style="background-color:#0e33bf; margin:0; padding:0;">
	<div id="primary" class="content-area" style="background-color:black;">
		<main id="main" class="site-main" role="main">

  <div class="site-branding centered">
            <!--if want wordpress interface for title and description in nav/head banner -->   
                     <!--<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>-->
              
                 <?php
                 $site_description = get_bloginfo( 'description' );
                 if ($site_description != null ){ ?>
                     <!--<p class="site-description"><?php bloginfo( 'description' ); ?></p>-->
                 <?php }
                ?>
            </div><!-- .site-branding -->
	

		</main><!-- #main -->
	</div><!-- #primary -->
<!--custom landing -->


<div id="myCarousel" style="width: 100%; padding-bottom:0; margin-bottom:0;">
    <div class="carousel-inner" style="padding-bottom:0; margin-bottom:0;">
       

<img src="https://www.askdesigns.biz/images/web_design.jpg" style="width:100%; max-height: 450px;" alt="web designer daytona beach seo, webhosting, web design, web security, animated videos"/>

<div class="carousel-caption fadeInDownBig delay" id="caption" style="">
    <div class="row">
        <div class="col-md-4" style="float:left; padding-left: 0; margin-left:0;">
            <div id="adhide">
            <div class="smshow" style="position:absolute; top:10%; left:78%;" onclick="adhide();">X</div><a href="https://www.askdesigns.biz/web-design-search-engine-optimization.html"><img id="search_engine_optimization" class="img-responsive" src="https://www.askdesigns.biz/images/search_engine_optimization.png" style="box-shadow: 2px 4px 2px 2px #212121; max-width: 100%; height:auto" alt="Advanced web Design and SEO Services, Be Ready To Be Found"/></a>
            </div>
            
            <script>
                function adhide(){
    document.getElementById("adhide").style.display = "none";
}
            </script>
        </div>
          <div class="col-md-8 smhide">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<p class="site-description"><?php bloginfo( 'description' ); ?></p>
       
        </div>
    </div> <!-- row close -->
</div> <!-- car cap close -->


</div> <!--car in close -->
</div> <!-- car close -->
      
    <div style="background-color:#0e33bf;">
        <div class="" style="text-align:center; padding-left:2%; padding-right:2%;">
            
            <h1 title="Daytona Web Design  | Media Design | SEO" style="padding-top:4%; color:white;">Daytona Web Design  | Media Design | SEO </h1>
            <br>
            <hr style="margin-left:35%; margin-right: 35%;">
        </div>
        <div class="row grid-divider" style="text-align:center;padding-top:5%;padding-left:2%; padding-right:2%">
            <div class="col-sm-4">
                <div class="col-padding" style="color:white;">
                    <h3 class="animated fadeInDownBig delay4s"><i class="fa fa-desktop fa-3x"></i></h3>
                    <h2><em>Custom Web Designs</em></h2>
                    <p style="font-size:25px;">Full service web development for desktop, mobile, tablets, and all things web.</p>
                </div>
            </div>
            <div class="col-sm-4" style="color:white;">
                <div class="col-padding">
                    <h3 class="animated fadeInDownBig delay3s"><i class="fa fa-rocket fa-3x"></i></h3>
                    <h2><em>Online Marketing</em></h2>
                    <p style="font-size:25px;">Get Found with up to date search engine optimization techniques. </p>
                </div>

            </div>
            <div class="col-sm-4" style="color:white;">
                <div class="col-padding">
                    <h3 class="animated fadeInDownBig delay5s"><i class="fas fa-camera fa-3x"></i></h3>
                    <h2><em>Digital Media</em></h2>
                    <p style="font-size:25px;">Help optimize your search ranking with digital animation.</p>
                </div>
            </div>
        </div>
<br>
    </div>

<div class="padding80 bgimage2" style="width:100%; background-color:white;">
    <div class="container text-center" style="padding-left:3%;padding-right:3%;color:black;">
        <h1 title="Web Design Daytona">Web Design Daytona</h1>
        <h2 title="Professionals providing expert services in custom web design and full search engine optimization.  Whether you are looking for online shopping carts, login systems, blogs, or professional websites our team is ready" class="smhide" style="padding-bottom:7%;"><em>Ask Designs |</em> Professionals providing expert services in custom web design and full search engine optimization.  Whether you are looking for online shopping carts, login systems, blogs, or professional websites our team is ready.</h2>
        <button type="button" class="btn btn-info btn-md" style="background-color:#26ba28; padding:2%;"><a href="https://www.askdesigns.biz/web-design-process.html" style="text-decoration:none;color:white;">Learn about our web design process</a></button>
    </div>
</div>



<div style="width:100%; height: auto; background-color:#0e33bf;">
    <div class="row no-gutters">
        <div class="col-lg-6" style="padding-top:10%; padding-left:10%; padding-right:10%;">
            <img class="animated fadeInLeft smhide" src="https://www.askdesigns.biz/images/goggle.png" style="width:100%; height: auto;"/>

        </div>

        <div class="col-lg-6" style="text-align:center; padding-left:1%; padding-right:10%; padding-top:5%; color:white;">
            <h2 style="padding-top:10%;"> <em>Web and Media Design Specialties</em></h2>
            <ul style="list-style:none;">
                <div style="border-top: 1px dotted black;"></div>
                <li> Web Design and Development</li>
                <div style="border-top: 1px dotted black;"></div>
                <li> SEO</li>
                <div style="border-top: 1px dotted black;"></div>
                <li>Animated Videos</li>
                <div style="border-top: 1px dotted black;"></div>
                <li>Wordpress</li>
                <div style="border-top: 1px dotted black;"></div>
                <li>Ecommerce (online shopping carts)</li>
                <div style="border-top: 1px dotted black;"></div>
                <li>Login Systems with custom interfaces</li>
                <div style="border-top: 1px dotted black;"></div>

                <div style="padding-top: 7%;">
                    <button type="button" class="btn-lg btn btn-warning" style="background-color:#0e33bf;"><a style="text-decoration:none; text-style:none; color:white;" href="https://www.askdesigns.biz/web-design-new-website.html"> Start your Web Design Now</a></button>


                </div>
            </ul>
        </div>
    </div>



</div>

<br>
<br>




<div class="padding80 bgimage3" style="width:100%;">
    <div id="testimonials" class="container text-center" style="background-color:black; opacity:.7;">
        <h2 style="padding-left:20%;">~What our clients are saying</h2>


        <div id="q1">
            <blockquote>
                <img class="img-circle center-block" src="https://www.askdesigns.biz/images/logos/FPW.png" alt="ask designs web design custom example" style="width: 100px;height:100px;">
                <p><i class="fa fa-quote-right"></i>"She is professional and very accomodating.  The turn around time, once information is provided, it is up on the website within 24 hours.  Eerything that we have asked her has been done.  She will provide to us suggestions on what we can do to impvore our site.  I would recommend her to anyone that is looking for this service."
                </p>
                <footer class="blockquote-footer">Ryan Boothby</footer>
                <footer class="blockquote-footer"><span>Community Association Manager</span><br>
                    <span>Daytona Beach Ocean Towers</span></footer>
            </blockquote>
        </div>


        <div id="q2" style="display:none;">
            <blockquote>
                <img class="img-circle center-block" src="https://www.askdesigns.biz/images/logos/DBOT.png" alt="ask designs web design custom example daytona beach ocean towers" style="width: 100px;height:100px;">
                <p><i class="fa fa-quote-right"></i>"Profesional and quick service completed with no issues following."
                </p>
                <footer class="blockquote-footer">Jan Horner</footer>
                <footer class="blockquote-footer"><span>Manager/Owner</span><br>
                    <span>Florida Plumbing Works</span></footer>
            </blockquote>
        </div>
        <ul id="clickColor" class="list-inline" style="font-size: 20px; padding-left:60%;">
            <li style="color:white" onclick="onefunc()" class="list-inline-item">&bull; </li>

            <li style="color:white" onclick="fourfunc()" class="list-inline-item">&bull; </li>

        </ul>
    </div>


    </div>
</div>

<div class="padding20 bgcolor-skyblue">

    <div class="row">
        <div class="col-md-9">
            <h2 style="padding-left:5%;"><em>Web Design Daytona</em></h2>
            <p style="padding-left:10%;">View Some of local work Daytona area</p>
        </div>
        <div class="col-md-3" style="padding-right:5%; padding-left:5%;">
            <br>
            <button type="button" class="btn btn-block btn-warning" style="background-color:#0e33bf;color:white;"><a href="https://www.askdesigns.biz/web-design-daytona-our-work.html" style="text-decoration:none;color:white;">Daytona Web Designs</a></button>

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div> <!--container -->
<!-- custom landing close -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>