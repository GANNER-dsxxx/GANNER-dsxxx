<?php
/**
 * Header Template
 *
 * @author: Alex Standiford
 * @date  : 12/21/19
 * @var Theme\Abstracts\Template $template
 */
use function Nicholas\nicholas;

if ( ! nicholas()->templates()->is_valid_template( $template ) ) {
	return;
}
?>

</div><!-- #content -->

<footer>
	<small><em>Love What You Do.</em></small>
	<?php echo get_field('copy','options') ?>
	
<?php	
$args = array(
    'post_type' => 'post', // или как там он у вас называется
    'posts_per_page' => -1,
);
$participants = new WP_Query( $args );
//var_dump($participants);
// дальше - loop
if( $participants->have_posts() ) :
    while( $participants->have_posts() ) :
        $participants->the_post();
        // тут выводим пост
		
		?>
		<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		<?php
    endwhile;
endif;
wp_reset_postdata();
?>
	
</footer>

<?php wp_footer(); ?>
</body>
</html>
