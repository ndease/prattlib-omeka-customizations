</article><!-- end content -->

<footer role="contentinfo">
     <!-- <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <nav id="bottom-nav"><?php echo public_nav_main()->setMaxDepth(0); ?></nav>
        <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>

    </div> -->
    <!-- end Omeka theme footer-content -->
    <hr>
    <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-4 footer-links">
                    <h3 class="h5">Contact Us
                    </h3><address>
                    Archives & Special Collections<br>Pratt Institute Libraries<br>200 Willoughby Ave<br> Brooklyn, NY 11205<br> 718.636.3704
                  </address>
                  <a href="mailto:archives.library@pratt.edu">Email us</a><br>
                  <a href="https://libguides.pratt.edu/archives/visit">Visit us</a>
                    <div class="wrapper">
                        <a target="_blank" aria-label="Instagram" href="https://www.instagram.com/prattinstitutearchives/?hl=en"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4">
                    <h3 class="h5">Image Rights</h3>
    <p>Please <a href="mailto:rightsandrepro.library@pratt.edu">email our rights & reproduction staff</a> for permission to use the images featured on this site.</p>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4">
                    <h3 class="h5">Quick Links</h3>
<?php echo public_nav_main()->setMaxDepth(0); ?>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4">
                    <h3 class="h5">Pratt Web Space</h3>
                    <div class="footer-links">
                        <ul class="nav-item footer-links">
                            <li><a target="_blank" href="https://digication.pratt.edu/">ePortfolio
      </a></li>
                            <li><a target="_blank" href="https://lms.pratt.edu/">LMS
      </a></li>
                            <li><a target="_blank" href="https://www.pratt.edu/mypratt/">myPratt</a>
                            </li>
                            <li><a target="_blank" href="https://www.pratt.edu">Pratt Website
      </a></li>
                            <li><a target="_blank" href="https://www.pratt.edu/student-life/student-affairs/learning-access-center/access-to-pratt-programs-and-activities/">Accessibility</a>
                            </li>
                            <li><a target="_blank" href="https://www.pratt.edu/the-institute/administration-resources/information-technology/pratt-institute-privacy-policy/">Privacy Policy
      </a></li>
                        </ul>
                    </div>
                </div>
                </div>
          </div>

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.skipNav();
    });
</script>

</body>

</html>
