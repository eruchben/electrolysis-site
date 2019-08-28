<?
$this_page = 'home';
require_once 'header.php';
require_once 'main_slider.php';
?>
<div class="container" style="margin-top: 30px;" >
    <div class="middle-section">
        <div class="" style="padding: 0px 80px;">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Proin gravida hendrerit lectus a. Condimentum mattis pellentesque id nibh tortor id aliquet. Nunc faucibus a pellentesque sit amet porttitor. 
                <p>Condimentum mattis pellentesque id nibh tortor id. Cursus euismod quis viverra nibh. Odio facilisis mauris sit amet. Malesuada pellentesque elit eget gravida cum. Mollis aliquam ut porttitor leo a diam. Sed vulputate mi sit amet. Ultrices eros in cursus turpis massa tincidunt. Sit amet justo donec enim diam vulputate ut pharetra.
                </p>
            </p>       
            <p>
                Mi sit amet mauris commodo quis imperdiet. Mauris cursus mattis molestie a iaculis. Senectus et netus et malesuada fames ac turpis egestas integer. Integer eget aliquet nibh praesent. Aliquam malesuada bibendum arcu vitae elementum curabitur. Tristique et egestas quis ipsum suspendisse. </p>
                <p>Habitant morbi tristique senectus et netus. Quis risus sed vulputate odio ut enim blandit volutpat maecenas. At elementum eu facilisis sed odio morbi. Ultrices tincidunt arcu non sodales neque.
            </p>
        </div>
    
        <div class="testimonial-section">
            <div style="padding: 15px 15px 5px">
                <h3>Testimonials</h3>
                <div style="border: 1px solid darkgrey;margin-bottom:20px;"></div>
                <div class="swiper-container testimonial-swiper">
                    <div class="swiper-wrapper">
                        <?foreach ($testimonials as $author => $testimonial):?>
                        <? $length = strlen($testimonial);
                        $ellipses = $length > 300 ? '.....' : '';
                        $testimonial = $length > 300 ? substr($testimonial,0,300) : substr($testimonial,0,strlen($testimonial)-10)?>
                            <div class="swiper-slide">
                                <div style="font-size: 16px;min-height:250px;">
                                    <i class="fas fa-quote-left"></i>
                                    <?=$testimonial.$ellipses?>
                                    <div style="text-align:right;"><?=ucwords($author)?></div>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                    <div class="swiper-pagination" style="margin-top:20px;"></div>
                </div>
            </div>

            <div class="testimonial-button">
                <a class="btn btn-primary" href="/testimonials.php" role="button">See All Testimonials</a>
            </div>
        </div>
    
    </div>

    <section>
        
    </section>
</div>
<? require_once 'footer.php'?>


