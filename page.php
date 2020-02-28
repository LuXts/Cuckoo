<?php

/**
 * .______    __    __       ___        ______
 * |   _  \  |  |  |  |     /   \      /  __  \
 * |  |_)  | |  |__|  |    /  ^  \    |  |  |  |
 * |   _  <  |   __   |   /  /_\  \   |  |  |  |
 * |  |_)  | |  |  |  |  /  _____  \  |  `--'  |
 * |______/  |__|  |__| /__/     \__\  \______/
 * 
 * Page
 * 
 * @author Bhao
 * @link https://dwd.moe/
 * @version 0.0.5(Beta)
 */

$this->need('includes/header.php'); ?>
<div class="container">
	<?php $this->need('includes/sidebar.php'); ?>
	<div class="left">
		<div class="mdui-card page-card">
			<?php if ($this->fields->articleType == "daily") { ?>
				<div class="daily-media">
					<div class="daily-card-title"><?php $this->title() ?></div>
					<div class="mdui-card-primary-subtitle daily-card-subtitle"><?php get_post_view($this) ?> 浏览 | <?php $this->date(); ?> | 分类：<?php $this->category(','); ?> | 标签：<?php $this->tags(','); ?></div>
				</div>
			<?php } elseif ($this->fields->articleType == "article") { ?>
				<div class="mdui-card-media">
					<div class="article-pic" data-original="<?php $wzimg = $this->fields->wzimg;
															if (!empty($wzimg)) {
																echo $wzimg;
															} else {
																echo randPic();
															} ?>"></div>
					<div class="mdui-card-media-covered">
						<div class="mdui-card-primary">
							<div class="mdui-card-primary-title"><?php $this->title() ?></div>
							<div class="mdui-card-primary-subtitle article-subtitle"><?php get_post_view($this) ?> 浏览 | <?php $this->date(); ?> | 分类：<?php $this->category(','); ?> | 标签：<?php $this->tags(','); ?></div>
						</div>
					</div>
				</div>
			<?php } ?>
			<center>
				<div class="social-share" data-sites="weibo, qq, qzone"></div>
				<script>
					socialShare('.social-share')
				</script>
			</center>
			<div class="article-page mdui-typo">
				<?php echo parsePicture(parseBiaoQing($this->content)); ?>
			</div>
		</div>
		<?php $this->need('includes/comments.php'); ?>
	</div>
</div>
<?php $this->need('includes/footer.php'); ?>