<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-4 footer-contact">
                    <h3>ঠিকানা</h3>
                    <p id="footer-address">
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States
                    </p>
                    <br><br>
                    <p>
                        <strong>মোবাইল নাম্বার:</strong> <span id="footer-cell">+1 5589 55488 55</span><br>
                        <strong>ইমেল:</strong> <span id="footer-email">info@example.com</span><br>
                    </p>
                </div>

                <div class="col-md-4 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-md-4 footer-newsletter">
                    <div>
                        <iframe id="footer-maps" style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter" id="footer-twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook" id="footer-facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram" id="footer-instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="youtube" id="footer-youtube"><i class="bx bxl-youtube"></i></a>
            <a href="#" class="linkedin" id="footer-linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<script>

    getData()

    async function getData() {

        let url = '/contact-data';

        const response = await axios.get(url);

        document.getElementById('footer-address').innerText = response.data.address;
        document.getElementById('footer-email').innerText = response.data.email;
        document.getElementById('footer-cell').innerText = response.data.cell;
        document.getElementById('footer-maps').src = response.data.maps;

        document.getElementById('footer-twitter').href = response.data.twitter;
        document.getElementById('footer-facebook').href = response.data.facebook;
        document.getElementById('footer-instagram').href = response.data.instagram;
        document.getElementById('footer-youtube').href = response.data.youtube;
        document.getElementById('footer-linkedin').href = response.data.linkedin;

        // console.log(response.data)


    }
</script>

