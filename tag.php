<?php
/**
 * 標籤頁面模板
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

get_header ();
?>

<!-- 標籤頁面標題區 -->
<section class="bg-gradient-to-r from-secondary to-secondary/80 text-primary py-16">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<div class="flex items-center justify-center mb-4">
				<svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
					</path>
				</svg>
				<h1 class="text-4xl md:text-5xl font-bold">
					標籤：<?php single_tag_title (); ?>
				</h1>
			</div>
			<?php if ( tag_description () ) : ?>
				<div class="text-lg text-primary/90 max-w-3xl mx-auto">
					<?php echo tag_description (); ?>
				</div>
			<?php endif; ?>
			<div class="mt-4 text-sm text-primary/80">
				共找到 <?php echo $wp_query->found_posts; ?> 篇文章
			</div>
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

									<!-- 文章標籤 -->
									<?php
									$tags = get_the_tags ();
									if ( $tags ) :
										?>
										<div class="flex flex-wrap gap-2 mb-4">
											<?php foreach ( $tags as $tag ) : ?>
												<a href="<?php echo esc_url ( get_tag_link ( $tag->term_id ) ); ?>"
													class="bg-muted text-muted-foreground hover:bg-secondary hover:text-primary px-2 py-1 rounded-full text-xs transition-colors">
													#<?php echo esc_html ( $tag->name ); ?>
												</a>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>

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
									d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
								</path>
							</svg>
						</div>
						<h3 class="text-2xl font-bold text-foreground mb-2">目前沒有文章</h3>
						<p class="text-muted-foreground">這個標籤目前還沒有任何文章。</p>
					</div>
				<?php endif; ?>
			</div>

			<!-- 側邊欄 -->
			<aside class="space-y-8">
				<!-- 當前標籤資訊 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">標籤資訊</h3>
					<div class="space-y-3">
						<div class="flex items-center justify-between">
							<span class="text-muted-foreground">標籤名稱</span>
							<span class="font-medium text-foreground"><?php single_tag_title (); ?></span>
						</div>
						<div class="flex items-center justify-between">
							<span class="text-muted-foreground">文章數量</span>
							<span class="font-medium text-foreground"><?php echo $wp_query->found_posts; ?></span>
						</div>
						<?php if ( tag_description () ) : ?>
							<div class="pt-3 border-t border-border">
								<span class="text-muted-foreground block mb-2">描述</span>
								<p class="text-sm text-foreground"><?php echo tag_description (); ?></p>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<!-- 熱門標籤 -->
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

						$current_tag = get_queried_object ();

						foreach ( $tags as $tag ) :
							$is_current = ( $current_tag->term_id === $tag->term_id );
							?>
							<a href="<?php echo esc_url ( get_tag_link ( $tag->term_id ) ); ?>"
								class="flex items-center space-x-1 px-3 py-1 rounded-full text-sm transition-colors <?php echo $is_current ? 'bg-secondary text-primary' : 'bg-muted text-muted-foreground hover:bg-secondary hover:text-primary'; ?>">
								<span>#<?php echo esc_html ( $tag->name ); ?></span>
								<span class="text-xs">(<?php echo $tag->count; ?>)</span>
							</a>
							<?php
						endforeach;
						?>
					</div>
				</div>

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
							?>
							<li>
								<a href="<?php echo esc_url ( get_category_link ( $category->term_id ) ); ?>"
									class="flex items-center justify-between p-2 rounded-md hover:bg-accent transition-colors text-muted-foreground hover:text-foreground">
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
			</aside>
		</div>
	</div>
</section>

<?php get_footer (); ?>