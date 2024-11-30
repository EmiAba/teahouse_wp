<?php
$wp_dummy_content_generatorQueryData = wp_dummy_content_generatorGetFakePostsList();
$wp_dummy_content_generatorPostData = $wp_dummy_content_generatorQueryData->posts; ?>
 <h2>Bellow are all the posts generated by this plugin 
 	<?php if ( !empty($wp_dummy_content_generatorPostData) ) { ?>
	 	<span class="deleteSpan">
		 	<form action='<?php echo esc_url(admin_url('admin-post.php'))?>' method="">
			    <input type="hidden" name="action" value="wp_dummy_content_generator_deleteposts" />
			    <input type="hidden" name="nonce" value="<?=wp_create_nonce('wpdcg-ajax-nonce')?>" />
			    <input type="submit" name="submit" value="Delete dummy posts">
			</form>
		</span>
 	<?php } ?>
 </h2>
<table id="wp_dummy_content_generatorListPostsTbl" class="stripe" style="width:100%">
	<thead>
		<tr>
			<th>#</th>
			<th>Post title</th>
			<th>Post type</th>
			<th>Post Status</th>
			<th>Created date</th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ( !empty($wp_dummy_content_generatorPostData) ) {
			$counter = 1;
			foreach ($wp_dummy_content_generatorPostData as $key => $postDatavalue){ ?>
				<tr>
					<td><?=$counter?></td>
					<td><?=$postDatavalue->post_title?></td>
					<td><?=$postDatavalue->post_type?></td>

					<td><?=$postDatavalue->post_status?></td>
					<td><?=date("F jS, Y", strtotime($postDatavalue->post_date));?></td>
				</tr>
				<?php
				$counter++;
			}
			wp_reset_postdata();
		} ?>
	</tbody>
</table>