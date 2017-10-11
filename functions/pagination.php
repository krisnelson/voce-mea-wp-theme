<?php
/**
 * Display navigation to next/previous set of posts when applicable.
 * Based on paging nav function from Twenty Fourteen
 */
function bootstrap_pagination() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 2,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => '&larr;&nbsp;Previous',
		'next_text' => 'Next&nbsp;&rarr;',
		'type'      => 'array',
	) );

	if ( $links ) : ?>
		<nav aria-label="Page navigation">
			<ul class="pagination">
			<?php
				foreach ($links as $link) {
					// Bootstrap wants the "page-link" class added to the a hrefs
					$link = str_replace( 'page-numbers', 'page-link page-numbers', $link );
					if (preg_match( "/current/", $link )) {
						// current item is active
						echo '<li class="page-item active current">' . $link . '</li>';
					}
					else {
						// print out list item, Boostrap 4 style
						echo '<li class="page-item">' . $link . '</li>';
					}
				}
			?>
			</ul>
		</nav>
	<?php endif;

}
?>
