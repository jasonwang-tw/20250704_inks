<?php
/**
 * 單篇文章模板
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

get_header ();
?>

<!-- 文章標題區 -->
<section class="from-primary to-primary/80 text-white py-16"
	style="margin-top: 64px; background: linear-gradient(135deg, #0c386a, #071d36);">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<!-- 分類標籤 -->
			<?php
			$categories = get_the_category ();
			if ( $categories ) :
				?>
				<div class="flex justify-center space-x-2 mb-4">
					<?php foreach ( $categories as $category ) : ?>
						<a href="<?php echo esc_url ( get_category_link ( $category->term_id ) ); ?>"
							class="bg-white/20 text-white px-3 py-1 rounded-full text-sm hover:bg-white/30 transition-colors">
							<?php echo esc_html ( $category->name ); ?>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<!-- 文章標題 -->
			<h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
				<?php the_title (); ?>
			</h1>

			<!-- 文章資訊 -->
			<div
				class="flex flex-col md:flex-row items-center justify-center space-y-2 md:space-y-0 md:space-x-6 text-white/90 text-sm">
				<div class="flex items-center space-x-2">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
						</path>
					</svg>
					<span><?php echo get_the_date (); ?></span>
				</div>
				<div class="flex items-center space-x-2">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
					</svg>
					<span><?php echo get_reading_time (); ?> 分鐘閱讀</span>
				</div>
				<div class="flex items-center space-x-2">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
							d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
						</path>
					</svg>
					<span><?php echo get_post_views (); ?> 次瀏覽</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 文章內容區 -->
<section class="py-16 bg-background content-area">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid lg:grid-cols-3 gap-8">
			<!-- 主要內容區 -->
			<div class="lg:col-span-2">
				<article class="bg-card border border-border rounded-lg overflow-hidden shadow-sm">
					<!-- 特色圖片 -->
					<?php if ( has_post_thumbnail () ) : ?>
						<div class="aspect-video overflow-hidden">
							<?php the_post_thumbnail ( 'large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
						</div>
					<?php endif; ?>

					<div class="p-8">
						<!-- 文章內容 -->
						<div class="prose prose-lg max-w-none text-foreground leading-loose">
							<?php the_content (); ?>
						</div>

						<!-- 文章標籤 -->
						<?php
						$tags = get_the_tags ();
						if ( $tags ) :
							?>
							<div class="mt-8 pt-8 border-t border-border">
								<h4 class="text-lg font-semibold text-foreground mb-4">標籤</h4>
								<div class="flex flex-wrap gap-2">
									<?php foreach ( $tags as $tag ) : ?>
										<a href="<?php echo esc_url ( get_tag_link ( $tag->term_id ) ); ?>"
											class="bg-muted text-muted-foreground hover:bg-primary hover:text-white px-3 py-1 rounded-full text-sm transition-colors">
											#<?php echo esc_html ( $tag->name ); ?>
										</a>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>

						<!-- 分享按鈕 -->
						<div class="mt-8 pt-8 border-t border-border">
							<h4 class="text-lg font-semibold text-foreground mb-4">分享文章</h4>
							<div class="flex space-x-4">
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode ( get_permalink () ); ?>"
									target="_blank" rel="noopener noreferrer"
									class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition-colors">
									<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
									</svg>
								</a>
								<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode ( get_permalink () ); ?>"
									target="_blank" rel="noopener noreferrer"
									class="bg-blue-700 text-white p-3 rounded-lg hover:bg-blue-800 transition-colors">
									<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
										<path
											d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</article>

				<!-- 相關文章 -->
				<div class="mt-12">
					<h3 class="text-2xl font-bold text-foreground mb-6">相關文章</h3>
					<div class="grid md:grid-cols-2 gap-6">
						<?php
						$related_posts = get_posts ( array(
							'category__in' => wp_get_post_categories ( get_the_ID () ),
							'numberposts'  => 4,
							'post__not_in' => array( get_the_ID () ),
							'orderby'      => 'rand',
						) );

						foreach ( $related_posts as $post ) :
							setup_postdata ( $post );
							?>
							<article
								class="bg-card border border-border rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
								<?php if ( has_post_thumbnail () ) : ?>
									<div class="aspect-video overflow-hidden">
										<a href="<?php the_permalink (); ?>">
											<?php the_post_thumbnail ( 'medium', array( 'class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300' ) ); ?>
										</a>
									</div>
								<?php endif; ?>

								<div class="p-4">
									<h4 class="text-lg font-semibold text-foreground mb-2">
										<a href="<?php the_permalink (); ?>" class="hover:text-primary transition-colors">
											<?php the_title (); ?>
										</a>
									</h4>
									<p class="text-sm text-muted-foreground mb-3">
										<?php echo wp_trim_words ( get_the_excerpt (), 15 ); ?>
									</p>
									<div class="text-xs text-muted-foreground">
										<?php echo get_the_date (); ?>
									</div>
								</div>
							</article>
							<?php
						endforeach;
						wp_reset_postdata ();
						?>
					</div>
				</div>

			</div>

			<!-- 側邊欄 -->
			<aside class="space-y-8">
				<!-- 作者資訊 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">關於作者</h3>
					<div class="flex items-center space-x-4">
						<?php echo get_avatar ( get_the_author_meta ( 'ID' ), 60, '', '', array( 'class' => 'rounded-full' ) ); ?>
						<div>
							<h4 class="font-semibold text-foreground"><?php the_author (); ?></h4>
							<p class="text-sm text-muted-foreground">
								<?php echo get_the_author_meta ( 'description' ); ?>
							</p>
						</div>
					</div>
				</div>

				<!-- 最新文章 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">最新文章</h3>
					<div class="space-y-4">
						<?php
						$recent_posts = wp_get_recent_posts ( array(
							'numberposts'  => 5,
							'post_status'  => 'publish',
							'post__not_in' => array( get_the_ID () ),
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
									<h6 class="text-sm font-medium text-foreground mb-1 leading-loose">
										<a href="<?php echo get_permalink ( $post[ 'ID' ] ); ?>"
											class="hover:text-primary transition-colors">
											<?php echo esc_html ( $post[ 'post_title' ] ); ?>
										</a>
									</h6>
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

				<!-- 熱門標籤 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">熱門標籤</h3>
					<div class="flex flex-wrap gap-2">
						<?php
						$tags = get_tags ( array(
							'orderby'    => 'count',
							'order'      => 'DESC',
							'number'     => 15,
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

<?php
// 自訂函數：計算閱讀時間
function get_reading_time () {
	$content       = get_the_content ();
	$clean_content = strip_tags ( $content );
	$char_count    = mb_strlen ( $clean_content, 'UTF-8' );
	$reading_time  = ceil ( $char_count / 350 ); // 假設每分鐘閱讀 350 個中文字
	return $reading_time;
	}

// 自訂函數：取得文章瀏覽次數
function get_post_views () {
	$post_id = get_the_ID ();
	$views   = get_post_meta ( $post_id, 'post_views', true );
	return $views ? $views : 0;
	}

get_footer ();
?>