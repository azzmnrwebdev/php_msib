<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Contact</h2>
            <p>Tinggalkan pesan untuk saya melalui form yang sudah disediakan.</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-4">
                <div class="contact-about">
                    <h3>Azzmnrwebdev</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maiores rem ipsam rerum voluptates inventore ullam quisquam. Impedit, magni? Libero consequatur harum facere beatae perferendis.</p>
                    <div class="social-links">
                        <a href="#" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="info">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-geo-alt"></i>
                        <p>Citayam, Ragajaya<br>Bogor, 16920</p>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-envelope"></i>
                        <p>azzmnrwebdev@gmail.com</p>
                    </div>

                    <div class="d-flex align-items-center mt-4">
                        <i class="bi bi-phone"></i>
                        <p>+62 838 7244 1470</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section>