<?php
/**
 * 搜尋結果模板
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

get_header ();
?>

<!-- 搜尋結果標題區 -->
<section class="bg-gradient-to-r from-primary to-primary/80 text-white py-16">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<div class="flex items-center justify-center mb-4">
				<svg class="w-8 h-8 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
				</svg>
				<h1 class="text-4xl md:text-5xl font-bold">
					搜尋結果
				</h1>
			</div>
			<div class="text-lg text-white/90 mb-4">
				搜尋關鍵字：<span class="font-semibold">"<?php echo get_search_query (); ?>"</span>
			</div>
			<div class="text-sm text-white/80">
				共找到 <?php echo $wp_query->found_posts; ?> 個結果
			</div>
		</div>
	</div>
</section>

<!-- 搜尋結果區 -->
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

									<!-- 搜尋結果摘要（高亮關鍵字） -->
									<div class="text-muted-foreground mb-4 line-clamp-3">
										<?php
										$excerpt      = get_the_excerpt ();
										$search_query = get_search_query ();
										if ( $search_query ) {
											$excerpt = preg_replace ( '/(' . preg_quote ( $search_query, '/' ) . ')/i', '<mark class="bg-yellow-200 dark:bg-yellow-800">$1</mark>', $excerpt );
											}
										echo $excerpt;
										?>
									</div>

									<!-- 文章標籤 -->
									<?php
									$tags = get_the_tags ();
									if ( $tags ) :
										?>
										<div class="flex flex-wrap gap-2 mb-4">
											<?php foreach ( $tags as $tag ) : ?>
												<a href="<?php echo esc_url ( get_tag_link ( $tag->term_id ) ); ?>"
													class="bg-muted text-muted-foreground hover:bg-primary hover:text-white px-2 py-1 rounded-full text-xs transition-colors">
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
					<!-- 沒有搜尋結果時的顯示 -->
					<div class="text-center py-16">
						<div class="w-24 h-24 bg-muted rounded-full flex items-center justify-center mx-auto mb-6">
							<svg class="w-12 h-12 text-muted-foreground" fill="none" stroke="currentColor"
								viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
							</svg>
						</div>
						<h3 class="text-2xl font-bold text-foreground mb-2">沒有找到相關結果</h3>
						<p class="text-muted-foreground mb-6">
							抱歉，沒有找到與 "<strong><?php echo get_search_query (); ?></strong>" 相關的內容。
						</p>

						<!-- 搜尋建議 -->
						<div class="max-w-md mx-auto">
							<h4 class="text-lg font-semibold text-foreground mb-4">搜尋建議</h4>
							<ul class="text-left space-y-2 text-sm text-muted-foreground">
								<li class="flex items-center">
									<svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor"
										viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									檢查關鍵字拼寫是否正確
								</li>
								<li class="flex items-center">
									<svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor"
										viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									嘗試使用更簡單的關鍵字
								</li>
								<li class="flex items-center">
									<svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor"
										viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									嘗試使用同義詞或相關詞彙
								</li>
							</ul>
						</div>
					</div>
				<?php endif; ?>
			</div>

			<!-- 側邊欄 -->
			<aside class="space-y-8">
				<!-- 搜尋框 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">重新搜尋</h3>
					<form role="search" method="get" action="<?php echo home_url ( '/' ); ?>" class="space-y-4">
						<div class="relative">
							<input type="search" name="s" value="<?php echo get_search_query (); ?>"
								placeholder="輸入關鍵字搜尋..."
								class="w-full px-4 py-2 border border-border rounded-lg bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
							<button type="submit"
								class="absolute right-2 top-1/2 transform -translate-y-1/2 p-2 text-muted-foreground hover:text-primary transition-colors">
								<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
								</svg>
							</button>
						</div>
					</form>
				</div>

				<!-- 搜尋統計 -->
				<?php if ( have_posts () ) : ?>
					<div class="bg-card border border-border rounded-lg p-6">
						<h3 class="text-lg font-semibold text-foreground mb-4">搜尋統計</h3>
						<div class="space-y-3">
							<div class="flex items-center justify-between">
								<span class="text-muted-foreground">搜尋關鍵字</span>
								<span class="font-medium text-foreground"><?php echo get_search_query (); ?></span>
							</div>
							<div class="flex items-center justify-between">
								<span class="text-muted-foreground">找到結果</span>
								<span class="font-medium text-foreground"><?php echo $wp_query->found_posts; ?> 篇</span>
							</div>
							<div class="flex items-center justify-between">
								<span class="text-muted-foreground">搜尋時間</span>
								<span class="font-medium text-foreground"><?php echo timer_stop ( 0, 3 ); ?> 秒</span>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<!-- 熱門搜尋 -->
				<div class="bg-card border border-border rounded-lg p-6">
					<h3 class="text-lg font-semibold text-foreground mb-4">熱門搜尋</h3>
					<div class="flex flex-wrap gap-2">
						<?php
						// 這裡可以設定一些熱門搜尋關鍵字
						$popular_searches = array(
							'印刷管理',
							'工單系統',
							'數位轉型',
							'印刷設備',
							'客戶管理',
							'專案管理',
							'數據分析',
							'智能報價',
						);

						foreach ( $popular_searches as $search_term ) :
							?>
							<a href="<?php echo home_url ( '/?s=' . urlencode ( $search_term ) ); ?>"
								class="bg-muted text-muted-foreground hover:bg-primary hover:text-white px-3 py-1 rounded-full text-sm transition-colors">
								<?php echo esc_html ( $search_term ); ?>
							</a>
							<?php
						endforeach;
						?>
					</div>
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