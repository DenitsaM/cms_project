	<div class="5grid-layout">
		<div class="row" id="footer-content">
			<div class="6u" id="box1">
      <?php if(!dynamic_sidebar('pr-text')){?>
      <?php } ?>
			</div>
			<div class="3u" id="box2">
      <?php if(!dynamic_sidebar('pr-footer')){?>
      <?php } ?>
			</div>
			<div class="3u" id="box3">
      <?php if(!dynamic_sidebar('pr-footer2')){?>
      <?php } ?>
			</div>
		</div>
	</div>
</div>
<div id="footer-wrapper">
<div id="copyright" class="5grid-layout">
	<section>
		<?php if(!dynamic_sidebar('copywrite')){?>
        <?php } ?>
	</section>
</div>
</div>
  <?php wp_footer();?>
</body>
</html>