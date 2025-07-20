<?php
/**
 * 分類頁面模板
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

get_header ();
?>

<!-- 分類頁面標題區 -->
<section id="category" class="bg-gradient-to-r from-primary to-primary/80 text-white py-16" style="margin-top: 64px;">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<h1 class="text-4xl md:text-5xl font-bold mb-4">
				<?php single_cat_title (); ?>
			</h1>
			<?php if ( category_description () ) : ?>
				<div class="text-lg text-white/90 max-w-3xl mx-auto">
					<?php echo category_description (); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- 文章列表區 -->
<section class="py-16 bg-background">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-3 gap-8">
			<!-- 主要內容區 -->
			<div class="lg:col-span-2">
				<?php if ( have_posts () ) : ?>
					<div class="space-y-8">
						<?php while ( have_posts () ) :
							the_post (); ?>
							<article
								class="bg-card border border-border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
								<?php if ( has_post_thumbnail () ) : ?>
									<div class="aspect-video overflow-hidden">
										<a href="<?php the_permalink (); ?>">
											<?php the_post_thumbnail ( 'large', array( 'class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300' ) ); ?>
										</a>
									</div>
								<?php endif; ?>

								<div class="p-6">
									<!-- 文章分類和日期 -->
									<div class="flex items-center space-x-4 text-sm text-muted-foreground mb-3">
										<?php
										$categories = get_the_category ();
										if ( $categories ) :
											foreach ( $categories as $category ) :
												?>
												<a href="<?php echo esc_url ( get_category_link ( $category->term_id ) ); ?>"
													class="bg-primary/10 text-primary px-2 py-1 rounded-md hover:bg-primary/20 transition-colors">
													<?php echo esc_html ( $category->name ); ?>
												</a>
												<?php
											endforeach;
										endif;
										?>
										<span><?php echo get_the_date (); ?></span>
									</div>

									<!-- 文章標題 -->
									<h2 class="text-2xl font-bold text-foreground mb-3">
										<a href="<?php the_permalink (); ?>" class="hover:text-primary transition-colors">
											<?php the_title (); ?>
										</a>
									</h2>

									<!-- 文章摘要 -->
									<div class="text-muted-foreground mb-4 line-clamp-3">
										<?php the_excerpt (); ?>
									</div>

									<!-- 閱讀更多按鈕 -->
									<a href="<?php the_permalink (); ?>"
										class="inline-flex items-center text-primary hover:text-primary/80 font-medium transition-colors">
										閱讀更多
										<svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M9 5l7 7-7 7"></path>
										</svg>
									</a>
								</div>
							</article>
						<?php endwhile; ?>
					</div>

					<!-- 分頁導航 -->
					<div class="mt-12">
						<?php
						the_posts_pagination ( array(
							'mid_size'  => 2,
							'prev_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>',
							'next_text' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
							'class'     => 'flex justify-center space-x-2',
						) );
						?>
					</div>

				<?php else : ?>
					<!-- 沒有文章時的顯示 -->
					<div class="text-center py-16">
						<div class="w-24 h-24 bg-muted rounded-full flex items-center justify-center mx-auto mb-6">
							<svg class="w-12 h-12 text-muted-foreground" fill="none" stroke="currentColor"
								viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
								</path>
							</svg>
						</div>
						<h3 class="text-2xl font-bold text-foreground mb-2">目前沒有文章</h3>
						<p class="text-muted-foreground">這個分類目前還沒有任何文章。</p>
					</div>
				<?php endif; ?>
			</div>

			<!-- 側邊欄 -->
			<aside class="space-y-8">
				<!-- 分類列表 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">所有分類</h3>
					<ul class="space-y-2">
						<?php
						$categories = get_categories ( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'hide_empty' => true,
						) );

						foreach ( $categories as $category ) :
							$is_current = is_category ( $category->term_id );
							?>
							<li>
								<a href="<?php echo esc_url ( get_category_link ( $category->term_id ) ); ?>"
									class="flex items-center justify-between p-2 rounded-md hover:bg-accent transition-colors <?php echo $is_current ? 'bg-primary/10 text-primary' : 'text-muted-foreground hover:text-foreground'; ?>">
									<span><?php echo esc_html ( $category->name ); ?></span>
									<span
										class="text-xs bg-muted px-2 py-1 rounded-full"><?php echo $category->count; ?></span>
								</a>
							</li>
							<?php
						endforeach;
						?>
					</ul>
				</div>

				<!-- 最新文章 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">最新文章</h3>
					<div class="space-y-4">
						<?php
						$recent_posts = wp_get_recent_posts ( array(
							'numberposts' => 5,
							'post_status' => 'publish',
						) );

						foreach ( $recent_posts as $post ) :
							?>
							<article class="flex space-x-3">
								<?php if ( has_post_thumbnail ( $post[ 'ID' ] ) ) : ?>
									<div class="flex-shrink-0">
										<a href="<?php echo get_permalink ( $post[ 'ID' ] ); ?>">
											<?php echo get_the_post_thumbnail ( $post[ 'ID' ], 'thumbnail', array( 'class' => 'w-16 h-16 object-cover rounded-md' ) ); ?>
										</a>
									</div>
								<?php endif; ?>
								<div class="flex-1 min-w-0">
									<h4 class="text-sm font-medium text-foreground mb-1">
										<a href="<?php echo get_permalink ( $post[ 'ID' ] ); ?>"
											class="hover:text-primary transition-colors">
											<?php echo esc_html ( $post[ 'post_title' ] ); ?>
										</a>
									</h4>
									<p class="text-xs text-muted-foreground">
										<?php echo get_the_date ( '', $post[ 'ID' ] ); ?>
									</p>
								</div>
							</article>
							<?php
						endforeach;
						wp_reset_postdata ();
						?>
					</div>
				</div>

				<!-- 標籤雲 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">熱門標籤</h3>
					<div class="flex flex-wrap gap-2">
						<?php
						$tags = get_tags ( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'number'     => 20,
							'hide_empty' => true,
						) );

						foreach ( $tags as $tag ) :
							?>
							<a href="<?php echo esc_url ( get_tag_link ( $tag->term_id ) ); ?>"
								class="bg-muted text-muted-foreground hover:bg-primary hover:text-white px-3 py-1 rounded-full text-sm transition-colors">
								<?php echo esc_html ( $tag->name ); ?>
							</a>
							<?php
						endforeach;
						?>
					</div>
				</div>
			</aside>
		</div>
	</div>
</section>

<?php get_footer (); ?>