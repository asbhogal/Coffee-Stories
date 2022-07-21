<!--------------------FOOTER-------------------->

<footer id="main-footer">
    <div class="footer-main-content">
        <div class="left box">
            <h2>About Us</h2>
            <hr />
            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis in eu mi bibendum neque. Tincidunt ornare massa eget egestas purus viverra accumsan in. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc.</p>
                <div class="social">
                    <a href="mailto:amansinghbhogal1@gmail.com"><i class="fas fa-envelope" a target="_blank"></i></a>
                    <a href="https://www.linkedin.com/in/amansinghbhogal/"><i class="fab fa-linkedin-in fa-fw" a target="_blank"></i></a>
                    <a href="https://github.com/asbhogal/"><i class="fab fa-github-alt fa-fw" a target="_blank"></i></a>
                    <a href="https://codepen.io/amansinghbhogal/" a target="_blank"><i class="fab fa-codepen fa-fw"></i></a>
                </div>
            </div>
        </div>
        <div class="middle box">
            <h2>Contact Us</h2>
            <hr />
            <div class="content">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">Planet Earth</span>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">+1234-567-890</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">abc@example.com</span>
            </div>
        </div>
        </div>
        <div class="right box">
            <h2>Subscribe to our newsletter</h2>
            <hr />
            <div class="content">
                <form action="#">
                    <div class="email">
                        <input type="email" required placeholder="Email address*">
                    </div>
                    <div class="btn subscribe-button">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="bottom">
            <center>            
            <nav class="footer-navbar">
            <?php
                wp_nav_menu(
                    array(
                        'menu'              =>  'footer',
                        'container'         =>  '',
                        'theme_location'    =>  'footer'
                    )
                )
            ?>
            </nav>
            <span class="credit">Created By <a href="https://www.amansinghbhogal.com/x">Aman Singh Bhogal</a> | </span>
            <span class="far fa-copyright"></span><span> <?php echo date('Y'); ?></span>
            </center>
          </div>
        </footer>



    <?php
        wp_footer()
    ?>
        <button id="scroll-to-top-btn" style="display: inline-block;"><i class="fas fa-chevron-up"></i></button>
</body>
</html>