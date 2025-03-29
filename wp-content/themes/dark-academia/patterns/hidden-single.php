<?php
/**
 * Title: Single
 * Slug: dark-academia/hidden-single
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group" style="min-height:100vh">
		<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date /-->

						<!-- wp:post-title /-->

						<div class="wp-block-post-author-name">
							By <!-- wp:post-author-name /-->
						</div>
					</div>
					<!-- /wp:group -->

					<!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained","justifyContent":"center"}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
				<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"linkLabel":true} /-->

				<!-- wp:post-navigation-link {"showTitle":true,"linkLabel":true} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:pattern {"slug":"dark-academia/hidden-comments"} /-->
		</main>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"dark-academia/footer"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:column -->
