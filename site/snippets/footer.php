  <footer>
      <div class="contact">
        <a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a>
      </div>
  </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo url('assets/js/vendor/jquery-1.11.2.min.js') ?>"><\/script>')</script>
  <?php
    if ($page->intendedTemplate() == 'publication-list'):
      echo js('assets/js/flickity.pkgd.min.js');
    endif;
  ?>
  <?= js(array(
    'assets/js/plugins.js',
    'assets/js/main.js'
  )) ?>

  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','<?= $site->analytics()->html() ?>','auto');ga('send','pageview');
  </script>
</body>
</html>
