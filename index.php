<?php
get_header();
?>
<div class="con">
<div class="content-1">
<div class="new-border">
<a href="">学院新闻</a>
<?php
$n='stories';
$id=get_cat_ID($n);
$m=get_category_link($id);
var_dump($m);
?>
<a class="first" href="<?php echo $m ?>">更多</a>
</div>
<div class="new-content">
<?php query_posts('cat=3');while ( have_posts() ) : the_post();?>
			
<?php// the_post_thumbnail(); ?>

<div class="new-photo">
<div><img src="<?php the_post_thumbnail();  ?></div>
<div class="date"><?php the_date()?></div>
<div class="title"><?php the_title()?></div>
						
<div class="excrpt">2018年9月27日，工学院召开教师党支部成立大会。[...]</div>
						
<div class="other">
<div class="count">1</div>
<div class="read">更多阅读</div>
</div>
</div>
				
<?php endwhile;?>
</div>
</div>
</div>
<?php
get_footer();
?>