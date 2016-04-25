    <!-- BEGINNING OF FOOTER - END SECTION CONTENT -->
        <footer>
            <div class="row">
                <div class="three columns footerHeader">
                    <?php dynamic_sidebar('footer-left'); ?>
                </div>
                <div class="three columns">
                    <?php dynamic_sidebar('footer-middle-left'); ?>
                </div>
                <div class="three columns">
                    <?php dynamic_sidebar('footer-middle-right'); ?>
                </div>
                <div class="three columns footerLogo">
                    <?php dynamic_sidebar('footer-right'); ?>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns copyRight">
                    <?php dynamic_sidebar('footer-bottom'); ?>
                </div>
            </div>
        </footer>

    <?php wp_footer(); ?>
</div> <!-- ends container -->

<!-- Begin Unslider Initiator -->
<script>
    $(function() { $('.my-slider').unslider({

        });
    });
</script>
<!-- End Unslider Initiator -->





    </body>

</html>