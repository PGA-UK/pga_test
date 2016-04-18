<!DOCTYPE HTML>
<html>
<?php include './include/inc_head.php';?>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="headerArea">
		<div class="divPanel notop nobottom">
                <div class="row-fluid">   
                    <div class="span6">
                        <div id="divLogo" style="float:left;">
                            <a href="index.php" id="divSiteTitle">Maple Wood Crafts</a><br>
                            <a href="index.php" id="divTagLine">Home of Fine Carpentry</a>
                        </div>
                        <div id="divLogoimage" style="float:left; width:70px; padding-top:40px;">
                            <img src="images/logos/leaf.png">
                        </div>
                    </div>

                    <div class="span6">
                        <div class="pull-right">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active"><a href="index.php">Home</a></li>
                                <li class="dropdown"><a href="gallery.php">Gallery</a></li>
                                <li class="dropdown"><a href="aftercare.php">Aftercare</a></li>
                            </ul>
                        
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    jQuery('ul.nav li.dropdown').hover(function () {
                                        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
                                    }, function () {
                                        jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
                                    });
                                });
                            </script> 
                        </div>
                    </div><!-- span6 -->
                </div><!-- row-fluid -->
			<div class="row-fluid">
    			<div class="span12">
            		<div id="contentInnerSeparator">
            		</div>
    			</div>
			</div>
    	</div>
	</div><!-- headerArea -->
    

    <div class="contentArea">
		<div class="divPanel notop page-content">
        	<div class="row-fluid">
                <div class="span6">
					<div id="divHeroText" class="page-content">
                        <h1>Hello...</h1>
                        <p>My name is Peter Atkins, I started Maple Wood Crafts in 2001 as a hobby, producing  hand crafted goods, selling through Garden Centres and helping out family and friends.</p>  
                        <p>Today, Maple Wood Crafts continues as it always has; working from a small workshop in my back garden in West Sussex, where I continue to work part time, producing hand crafted goods.</p>
                        <p>Many of the goods displayed are available straight from stock - other goods can be made to order.</p>
                    </div><!-- div HeroText -->
					<div class="row-fluid">
                    	<img src="images/workshop/PLR - workshop - DSC_4682.jpg" class="span4">
                    	<img src="images/workshop/PLR - workshop - DSC_4687.jpg" class="span4">
                    	<img src="images/workshop/PLR - workshop - DSC_4685.jpg" class="span4">
                	</div>
            	</div>

                <?php //-- Put Gallery Images in to Carousel Array --//
                $carousel_image=array();
                $carousel_caption=array();
                $carousel_row=0;
                $source_row=0;
                while ($carousel_row < 10)//-- valid carousel --//
                    {
                    if (isset($source_table[$source_row][0]))//-- valid source --//
                        {
                        if (($source_table[$source_row][8]=="Index") or ($source_table[$source_row][8]=="All"))//-- display in carousel? --//
                            {
                            $carousel_image[$carousel_row] = $source_table[$source_row][5];//-- image --//
                            $carousel_caption[$carousel_row] = $source_table[$source_row][1];//-- caption --//
                            $carousel_row++;
                            }
                        $source_row++;
                        }   
                    else //-- invalid source - reset source --//
                        {
                        $source_row=0;
                        }     
                    }?>

                        
                <div class="span6">
					<div id="camera_wrap">
                        <div data-src="<?php echo $carousel_image[9];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[9];//-- Name --?></div></div>
                        
                        <div data-src="<?php echo $carousel_image[8];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[8];//-- Name --?></div></div>
                        
                        <div data-src="<?php echo $carousel_image[7];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[7];//-- Name --?></div></div>
                        
                        <div data-src="<?php echo $carousel_image[6];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[6];//-- Name --?></div></div>
                        
                        <div data-src="<?php echo $carousel_image[5];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[5];//-- Name --?></div></div>

                        <div data-src="<?php echo $carousel_image[4];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[4];//-- Name --?></div></div>
                       
                        <div data-src="<?php echo $carousel_image[3];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[3];//-- Name --?></div></div>
                        
                        <div data-src="<?php echo $carousel_image[2];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[2];//-- Name --?></div></div>
                        
                        <div data-src="<?php echo $carousel_image[1];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[1];//-- Name --?></div></div>
                        
                        <div data-src="<?php echo $carousel_image[0];//-- Small Image Filename --?>">
                        <div class="camera_caption fadeFromBottom"><?php echo $carousel_caption[0];//-- Name --?></div></div>
                        
                    </div><!-- camera_wrap -->
                    <script type="text/javascript">
                        function startCamera() {
                            jQuery('#camera_wrap').camera({ fx: 'scrollLeft', time: 1000, loader: 'none', playPause: false, height: '75%', pagination: true });
                            /*fx: 'random','simpleFade', 'curtainTopLeft', 'curtainTopRight', 'curtainBottomLeft', 'curtainBottomRight', 'curtainSliceLeft', 'curtainSliceRight', 'blindCurtainTopLeft', 'blindCurtainTopRight', 'blindCurtainBottomLeft', 'blindCurtainBottomRight', 'blindCurtainSliceBottom', 'blindCurtainSliceTop', 'stampede', 'mosaic', 'mosaicReverse', 'mosaicRandom', 'mosaicSpiral', 'mosaicSpiralReverse', 'topLeftBottomRight', 'bottomRightTopLeft', 'bottomLeftTopRight', 'bottomLeftTopRight', 'scrollLeft', 'scrollRight', 'scrollHorz', 'scrollBottom', 'scrollTop'*/
                        }
                        jQuery(function () {
                            startCamera();
                        });
                    </script>
				</div><!-- span6 -->
            </div><!-- row-fluid -->
            <br>
             <div class="row-fluid">
                <div class="span4">
                    <div class="page-content"> 
                        <h2>Stock Items</h2> 
                        <p>Everything made at Maple Wood Crafts is individually hand crafted. Items can be purchased from this site (Please see my <a href="gallery.php">Gallery</a>)</p>                            
                        <p>However, bear in mind that most of the items in the <a href="gallery.php">Gallery</a> are also on display at <a href="http://www.newhousefarmshop.co.uk/">New House Farm Shop and Tea Room</a> and therefore subject to availabiity. Please <a href="mailto:enquiries@maplewoodcrafts.co.uk" title="Email">email me</a> if you would like to purchase direct from the <a href="gallery.php">Gallery</a></p>
                        <p>Alternatively, if you are in the area, why not pop along to the <a href="http://www.newhousefarmshop.co.uk/">New House Farm Shop and Tea Room</a>, Faygate, West Sussex for a coffee and cake, where many of the items can be purchased from display?</p>
                    </div>
                </div>
                <div class="span8">

                    <div class="span6">
                        <div class="page-content"> 
                            <h2>Bespoke Work</h2>
                            <p>Looking for something extra special - why not have something made to order?</p>
                            <p>Please send through a sketch with approximate sizes to <a href="mailto:enquiries@maplewoodcrafts.co.uk?subject=Web Site Enquiry" target="_blank">enquiries@maplewoodcrafts.co.uk</a>.</p>
                            <p>Please allow plenty of time as delivery will depend upon current work load.</p>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="page-content"> 
                            <h2>Materials and Finishes</h2>                            
                            <p>The woods that are used at Maple Wood Crafts are carefully chosen for their fine colours and patterns.  Where possible, all wood is sourced from UK suppliers.</p>
                            <p>Jewellery boxes, etc are finished in Carnauba Wax, which is a long lasting and hard wearing wax. Kitchenware is treated with a food-safe mineral oil.</p>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <iframe class="container well well-small span12"
                            style="background-color: #f5e5c5;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506.273189761577!2d-0.2844938499999949!3d51.084965600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875ebf0aba21b09%3A0xd23d3b439f3098e5!2sNew+House+Farm+Shop!5e0!3m2!1sen!2suk!4v1393587826976" width="100%" height="100%" frameborder="0" style="border:0">   
                        </iframe>
                    </div>
            
            <div id="footerInnerSeparator"></div>
        </div><!-- divPanel notop page-content -->
    </div><!-- contentArea -->

    <div id="footerOuterSeparator"></div>

    <?php include './include/inc_footer.php';?>
</div>
<br /><br /><br />

<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>