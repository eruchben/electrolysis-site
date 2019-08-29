    </body>
        <!-- Footer -->
        <footer class="py-5" style="background:<?=$main_color;?>">
            <div class="container">
                <p class="m-0 text-center" style="color: #0d47a1 ">
                    <span>
                        &copy; &nbsp;ElectrolysisBySimcha <?=date('Y')?>
                    </span>
                    <span style="margin-left: 10px">
                        <a target="_blank" href="https://www.facebook.com/theElectrolysisClinic/" ><i class="fab fa-facebook-square fa-lg"></i></a>
                    </span>
                </p>
            </div>
            <!-- /.container --m
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        
        <script>
            $(document).ready(function () {
                //initialize swiper when document ready
                new Swiper('.main-swiper', {
                    autoHeight: true,
                    speed: 3000,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                    },
                    fadeEffect: {
                        crossFade: true
                    },
                    effect: 'fade',
                    allowTouchMove: false
                });

            
                new Swiper('.testimonial-swiper', {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    },
                    speed: 3500,
                    autoplay: {
                        delay: 3000,
                    }
                });
            });
        </script>
    </footer>
</html>
