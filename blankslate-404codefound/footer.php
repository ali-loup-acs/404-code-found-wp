<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>

<script>
var elem = document.querySelector('#testMasonry');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.itemMasonry',
  columnWidth: 100
});

// element argument can be a selector string
//   for an individual element
var msnry = new Masonry( '#testMasonry', {
  // options
});
</script>
</div>
</body>
</html>
