<?php
/**
 * page lists ad groups
 *
 * @since 1.0.0
 * @see /wp-admin/edit-tags.php (for a good example in WP core)
 */
$ad_groups_list = new Advanced_Ads_Groups_List();

// save updated groups
if ( isset($_REQUEST['advads-group-update-nonce']) ){
	$udpate_result = $ad_groups_list->update_groups();
	// display error message
	if ( is_wp_error( $udpate_result ) ){
		$error_string = $udpate_result->get_error_message();
		echo '<div id="message" class="error"><p>' . $error_string . '</p></div>';
	} else {
		echo '<div id="message" class="updated"><p>' . __( 'Ad Groups successfully updated', 'advanced-ads' ) . '</p></div>';
	}
}

/*$messages[$taxonomy] = array(
	0 => '', // Unused. Messages start at index 1.
	1 => __( 'Ad Group added.', 'advanced-ads' ),
	2 => __( 'Ad Group deleted.', 'advanced-ads' ),
	3 => __( 'Ad Group updated.', 'advanced-ads' ),
	4 => __( 'Ad Group not added.', 'advanced-ads' ),
	5 => __( 'Ad Group not updated.', 'advanced-ads' ),
	6 => __( 'Ad Group deleted.', 'advanced-ads' )
);

$message = false;
if ( isset($_REQUEST['message']) && ( $msg = (int) $_REQUEST['message'] ) || isset($forced_message) ) {
	if ( isset($msg) && isset($messages[$taxonomy][$msg]) ){
		$message = $messages[$taxonomy][$msg];
	} elseif ( isset($messages[$taxonomy][$forced_message]) ) {
		$message = $messages[$taxonomy][$forced_message];
	}
}*/
?>

<div class="wrap nosubsub">
    <h1><?php
		echo esc_html( $title );
	if ( ! empty($_REQUEST['s']) ) {
		printf( '<span class="subtitle">' . __( 'Search results for &#8220;%s&#8221;', 'advanced-ads' ) . '</span>', esc_html( wp_unslash( $_REQUEST['s'] ) ) );
	} else {
		echo ' <a href="' . Advanced_Ads_Groups_List::group_page_url( array('action' => 'edit') ) . '" class="add-new-h2">' . $tax->labels->add_new_item . '</a>';
	}
		?>
    </h1>
    <p><?php _e( 'Ad Groups are a very flexible method to bundle ads. You can use them to display random ads in the frontend or run split tests, but also just for informational purposes. Not only can an Ad Groups have multiple ads, but an ad can belong to multiple ad groups.', 'advanced-ads' ); ?></p>
    <p class="advads-create-new-group-text"><?php _e( 'You can create a new group through the <em>Ad Groups</em> widget on the ad edit page.', 'advanced-ads' ); ?> <?php printf(__( 'Find more information about ad groups in the <a href="%s" target="_blank">manual</a>.', 'advanced-ads' ), ADVADS_URL . 'manual/ad-groups/#utm_source=advanced-ads&utm_medium=link&utm_campaign=groups' ); ?></p>
    <?php if ( isset($message) ) : ?>
        <div id="message" class="updated"><p><?php echo $message; ?></p></div>
        <?php
		$_SERVER['REQUEST_URI'] = esc_url( remove_query_arg( array('message'), $_SERVER['REQUEST_URI'] ) );
	endif;
	?>
    <div id="ajax-response"></div>

    <div id="col-container">
        <div class="col-wrap">
            <form class="search-form" action="" method="get">
                <!--input type="hidden" name="taxonomy" value="<?php echo esc_attr( $taxonomy ); ?>" /-->
                <input type="hidden" name="page" value="advanced-ads-groups" />
                <?php $wp_list_table->search_box( $tax->labels->search_items, 'tag' ); ?>

            </form>
            <br class="clear" />
            <div id="advads-ad-group-list">
                <form action="" method="post">
                    <?php wp_nonce_field( 'update-advads-groups', 'advads-group-update-nonce' ); ?>
                    <table class="wp-list-table widefat fixed adgroups">
                        <?php $ad_groups_list->render_header(); ?>
                        <?php $ad_groups_list->render_rows(); ?>
                    </table>
		    <input type="hidden" name="advads-last-edited-group" id="advads-last-edited-group" value="0"/>
                    <?php submit_button( __( 'Update Groups', 'advanced-ads' ) ); ?>
                </form>
            </div>
        </div>
    </div><!-- /col-container -->
</div><!-- /wrap -->
