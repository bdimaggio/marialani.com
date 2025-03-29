<?php
/**
 * Title: Index
 * Slug: dark-academia/hidden-index
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
if ($pinned_text = get_option('pinned_text')) {
	$pinned_text = '<p>' . implode('</p><p>', array_filter(array_map('trim', explode("\n", $pinned_text)))) . '</p>';
}
?>

<!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group" style="min-height:100vh">
		<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
		<main class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div id="pinned-text">
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60); padding-bottom:var(--wp--preset--spacing--60);">
					<?php echo $pinned_text; ?>
				</div>
			</div>
			<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
			<div class="wp-block-query" style="margin-block-start: 0;">
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"isLink":true} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
						<div class="wp-block-group">
							<!-- wp:post-date /-->

							<!-- wp:post-title {"isLink":true} /-->

							<div class="wp-block-post-author-name">By <!-- wp:post-author-name /--></div>
						</div>
						<!-- /wp:group -->

						<!-- wp:post-excerpt {"moreText":"Read more \u0026rarr;"} /-->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
					<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
						<!-- wp:query-pagination-previous /-->

						<!-- wp:query-pagination-next /-->
					<!-- /wp:query-pagination -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:query -->
		</main>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"dark-academia/footer"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:column -->
