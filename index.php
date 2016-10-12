<?php
	get_header();
?>

<body>
<h1><?php echo bloginfo('title'); ?></h1>
<div class="section group">
	<div class="col span_1_of_3">
	This is column 1
	</div>
	<div class="col span_1_of_3">
        <?php
            $args = array();

            $post_data = get_posts($args);
            foreach($post_data as $post)
            {
                echo get_the_title() . '<hr/>';
            }
        ?>
	</div>
	<div class="col span_1_of_3">

        <?php
             get_sidebar();
        ?>
	</div>

	<?php
		get_footer();
	?>
</div>


</body>
</html>