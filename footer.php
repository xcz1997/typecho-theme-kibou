<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

            <?php if(!$this->is('post') && !$this->is('page')): ?>
              <center class="center-padding">
                <form id="search" method="post" action="./" role="search">
                  <input type="text" class="text" name="s" placeholder="<?php _e("搜索"); ?>">
                </form>
              </center><!-- ./search -->
            <?php endif; ?>

          </div><!-- /.blog-main -->

        </div><!-- /.row -->
      </div><!-- /.container -->

    <center>
      <footer class="blog-footer">
        <p>&copy;&nbsp;Copyright&nbsp;<?php echo date('Y'); ?>&nbsp;<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
          <?php if($this->options->beianNumber) : echo ' | '; ?>
            <a href="http://www.miibeian.gov.cn" rel="nofollow" target="_blank"><?php echo $this->options->beianNumber(); ?></a>
          <?php endif; ?>
        </p>
        <p>Theme <a href="https://www.metheno.net/" style="cursor:default;">Kibou</a> made with <span class="shaky">(｡･∀･)ﾉﾞ♥</span></p>
      </footer>
    </center>

    <!-- Core JavaScripts -->
    <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/bootstrap.js'); ?>"></script>

    <!-- Load Theme Dedicated JS -->
    <script src="<?php $this->options->themeUrl('js/highlight.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/ASpace.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/loadup.js'); ?>"></script>
    <!-- xcz1997 -->
    <script type="text/javascript" color="80,80,80" opacity='0.7' zIndex="-2" count="150" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>

    <?php if ($this->options->analyticsGoogle): ?>
      <!-- Google Analytics -->
      <script>
        <?php $this->options->analyticsGoogle(); ?>
      </script>
    <?php endif; ?>

    <?php if ($this->options->enableMathJax == 1): ?>
      <!-- MathJax Supports -->
      <script type="text/javascript" src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
      <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
          extensions: ["tex2jax.js"],
          jax: ["input/TeX", "output/HTML-CSS"],
          tex2jax: {
            inlineMath: [ ['$','$'], ["\\(","\\)"] ],
            displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
            processEscapes: true
          },
          "HTML-CSS": { availableFonts: ["TeX"] }
        });
      </script>
    <?php endif; ?>

    <?php $this->footer(); ?>

  </body>
</html>
