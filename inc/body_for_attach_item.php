<?php
/*
* This is a class that shows the items that you added to the list of important items.
*/

class AttachmentItems
{

	// Slug of table this plugin.
	private $table_name_slug = MX_TABLE_SLUG;

	public function list_items()
	{
		global $wpdb;
		
		$array_attachment_elements = mx_list_attachment_items( $this->table_name_slug );

		?>

		<div class="activity" id="attachItemActivityWrap">

			<?php if ( bp_has_activities( 'display_comments=threaded&show_hidden=true&include=0,' . $array_attachment_elements ) ) : ?>

				<h2 id="mxTitleAttach">Important posts</h2>

				<ul class="mx-attach_item_activity">

					<?php while ( bp_activities() ) : bp_the_activity(); ?>
						
						<?php bp_get_template_part( 'activity/entry' ); ?>
						
						<?php
						/*
						* If you want to customize attachment elements, you can edit this file. After power on.
						* But before doing this, disable the code above "bp_get_template_part( 'activity/entry' );"
						*/
						//include('attach_boby.php'); ?>

					<?php endwhile; ?>
			
				</ul>

			<?php endif; ?>

		</div>

	<?php }
}

?>