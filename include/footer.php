<!-- Footer -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">Social Links</h3>
                        <!-- <p class="footer-about-text">Welcome to Allure Holidays,your gateway to unforgettable adventures around the globe since 2007.Established with a passion for wanderlust and a commitment to delivering exceptional travel experiences, we specialize in crafting personalized journeys tailored to your desires.</p> -->

                        <!-- <div class="footer-language"> <i class="lni ti-world"></i>
                            <select onchange="location = this.value;">
                                <option value="http://duruthemes.com/">English</option>
                                <option value="http://duruthemes.com/">German</option>
                            </select>
                        </div> -->
                        <div class="footer-about-social-list">
                            <a href="https://www.instagram.com/allure.holidays/" target="_blank"><i class="ti-instagram"></i></a>
                            <!-- <a href="#"><i class="ti-twitter"></i></a> -->
                            <a href="https://youtube.com/@allureholidays-pn5tw?si=qe2ybtVUq9fI22Mn" target="_blank"><i class="ti-youtube"></i></a>
                            <a href="https://www.facebook.com/allure.holiday?_rdr" target="_blank"><i class="ti-facebook"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="destination.php">Destination</a></li>
                            <li><a href="whatwedo.php">What We Do</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Contact</h3>
                        <div class="footer-contact-info">

                            <p class="footer-contact-phone"><span class="flaticon-location-pin"></span></p>
                            <p>Allure Holidays Near Jonali Bus Stop R G Baruah Road Guwahati Assam India Pin-781024</p>
                        </div>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="flaticon-call"></span> </p>
                            <p><a href="tel:919954377177">+91 9954377177</a><br>
                                <a href="tel:919395777177">+91 9395777177</a>
                            </p>



                        </div>
                        <div class="footer-contact-info">
                            <p class="footer-contact-phone"><span class="flaticon-envelope"></span></p>
                            <p>
                                <a href="mailto:holidays@alluregroup.in">holidays@alluregroup.in</a>
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">© Copyright 2024. Developed by <a href="https://www.webinfotech.net.in/" target="_blank">Web Infotech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<audio id="background-audio" loop>
    <source src="audio/allure.mp3" type="audio/mp3">
    Your browser does not support the audio element.
</audio>

<script>
    document.body.addEventListener('click', () => {
        const audio = document.getElementById('background-audio');
        audio.play().catch((error) => {
            console.error('Failed to play:', error);
        });
    }, {
        once: true
    });
</script>

<!-- <audio src="audio/allure.mp3" id="my_audio" loop="loop" autoplay="autoplay"></audio>
<script type="text/javascript">
    window.onload = function() {
        document.getElementById("my_audio").play();
    }
</script> -->

<!-- jQuery -->
<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.isotope.v3.0.2.js"></script>
<script src="js/pace.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scrollIt.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/YouTubePopUp.js"></script>
<script src="js/select2.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/custom.js"></script>
</body>

</html>