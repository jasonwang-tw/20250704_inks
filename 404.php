<?php
/**
 * 404 錯誤頁面模板
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

get_header ();
?>

<!-- 404 錯誤頁面 -->
<section class="min-h-screen bg-background flex items-center justify-center py-16">
	<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<!-- 404 圖示 -->
			<div class="mb-8">
				<div class="relative">
					<!-- 大數字 404 -->
					<div class="text-9xl md:text-[12rem] font-bold text-muted/20 select-none">
						404
					</div>
					<!-- 中央圖示 -->
					<div class="absolute inset-0 flex items-center justify-center">
						<div
							class="w-32 h-32 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center shadow-lg">
							<svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
								</path>
							</svg>
						</div>
					</div>
				</div>
			</div>

			<!-- 錯誤訊息 -->
			<div class="mb-8">
				<h1 class="text-4xl md:text-5xl font-bold text-foreground mb-4">
					頁面找不到
				</h1>
				<p class="text-xl text-muted-foreground max-w-2xl mx-auto">
					抱歉，您要尋找的頁面不存在或已被移除。可能是網址輸入錯誤，或是頁面已經搬家了。
				</p>
			</div>

			<!-- 搜尋框 -->
			<div class="max-w-md mx-auto mb-12">
				<form role="search" method="get" action="<?php echo home_url ( '/' ); ?>" class="relative">
					<input type="search" name="s" placeholder="搜尋網站內容..."
						class="w-full px-6 py-4 text-lg border border-border rounded-full bg-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent shadow-sm">
					<button type="submit"
						class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-primary text-white p-3 rounded-full hover:bg-primary/80 transition-colors">
						<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
						</svg>
					</button>
				</form>
			</div>

			<!-- 快速導航 -->
			<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
				<!-- 首頁 -->
				<a href="<?php echo home_url (); ?>"
					class="group bg-card border border-border rounded-lg p-6 hover:shadow-lg transition-all duration-300 hover:border-primary">
					<div class="flex items-center space-x-4">
						<div
							class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
								</path>
							</svg>
						</div>
						<div class="text-left">
							<h4 class="font-semibold text-foreground group-hover:text-primary transition-colors">回到首頁
							</h4>
							<p class="text-sm text-muted-foreground">探索我們的主要內容</p>
						</div>
					</div>
				</a>

				<!-- 最新文章 -->
				<a href="<?php echo home_url (); ?>"
					class="group bg-card border border-border rounded-lg p-6 hover:shadow-lg transition-all duration-300 hover:border-primary">
					<div class="flex items-center space-x-4">
						<div
							class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center group-hover:bg-secondary group-hover:text-primary transition-colors">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
								</path>
							</svg>
						</div>
						<div class="text-left">
							<h4 class="font-semibold text-foreground group-hover:text-primary transition-colors">最新文章
							</h4>
							<p class="text-sm text-muted-foreground">查看最新發布的內容</p>
						</div>
					</div>
				</a>

				<!-- 聯絡我們 -->
				<a href="#contact"
					class="group bg-card border border-border rounded-lg p-6 hover:shadow-lg transition-all duration-300 hover:border-primary">
					<div class="flex items-center space-x-4">
						<div
							class="w-12 h-12 bg-green-100 dark:bg-green-900/30 rounded-lg flex items-center justify-center group-hover:bg-green-500 group-hover:text-white transition-colors">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
								</path>
							</svg>
						</div>
						<div class="text-left">
							<h4 class="font-semibold text-foreground group-hover:text-primary transition-colors">聯絡我們
							</h4>
							<p class="text-sm text-muted-foreground">需要協助？請聯繫我們</p>
						</div>
					</div>
				</a>
			</div>

			<!-- 熱門內容 -->
			<div class="bg-card border border-border rounded-lg p-8 mb-8">
				<h2 class="text-2xl font-bold text-foreground mb-6">熱門內容</h2>
				<div class="grid md:grid-cols-2 gap-6">
					<?php
					$popular_posts = wp_get_recent_posts ( array(
						'numberposts' => 4,
						'post_status' => 'publish',
						'orderby'     => 'comment_count',
					) );

					foreach ( $popular_posts as $post ) :
						?>
						<a href="<?php echo get_permalink ( $post[ 'ID' ] ); ?>"
							class="group flex space-x-4 p-4 rounded-lg hover:bg-accent transition-colors">
							<?php if ( has_post_thumbnail ( $post[ 'ID' ] ) ) : ?>
								<div class="flex-shrink-0">
									<?php echo get_the_post_thumbnail ( $post[ 'ID' ], 'thumbnail', array( 'class' => 'w-16 h-16 object-cover rounded-md' ) ); ?>
								</div>
							<?php endif; ?>
							<div class="flex-1 min-w-0 text-left">
								<h6
									class="font-medium text-foreground group-hover:text-primary transition-colors mb-1 leading-loose">
									<?php echo esc_html ( $post[ 'post_title' ] ); ?>
								</h6>
								<p class="text-sm text-muted-foreground">
									<?php echo get_the_date ( '', $post[ 'ID' ] ); ?>
								</p>
							</div>
						</a>
						<?php
					endforeach;
					wp_reset_postdata ();
					?>
				</div>
			</div>

			<!-- 錯誤報告 -->
			<div class="text-center">
				<p class="text-muted-foreground mb-4">
					如果您認為這是一個錯誤，請
					<a href="mailto:<?php echo get_option ( 'admin_email' ); ?>" class="text-primary hover:underline">
						聯繫網站管理員
					</a>
				</p>
				<div class="flex items-center justify-center space-x-4 text-sm text-muted-foreground">
					<span>錯誤代碼：404</span>
					<span>•</span>
					<span><?php echo date ( 'Y-m-d H:i:s' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 有趣的 404 動畫 -->
<style>
	@keyframes float {

		0%,
		100% {
			transform: translateY(0px);
		}

		50% {
			transform: translateY(-20px);
		}
	}

	@keyframes bounce {

		0%,
		20%,
		50%,
		80%,
		100% {
			transform: translateY(0);
		}

		40% {
			transform: translateY(-30px);
		}

		60% {
			transform: translateY(-15px);
		}
	}

	.floating-404 {
		animation: float 6s ease-in-out infinite;
	}

	.bouncing-icon {
		animation: bounce 2s infinite;
	}

	/* 深色模式下的特殊效果 */
	.dark .floating-404 {
		text-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
	}

	/* 響應式調整 */
	@media (max-width: 768px) {
		.floating-404 {
			font-size: 6rem;
		}
	}
</style>

<script>
	// 添加一些互動效果
	document.addEventListener('DOMContentLoaded', function () {
		// 搜尋框自動聚焦
		const searchInput = document.querySelector('input[name="s"]');
		if (searchInput) {
			searchInput.focus();
		}

		// 添加點擊效果
		const cards = document.querySelectorAll('.bg-card');
		cards.forEach(card => {
			card.addEventListener('click', function () {
				this.style.transform = 'scale(0.98)';
				setTimeout(() => {
					this.style.transform = 'scale(1)';
				}, 150);
			});
		});
	});
</script>

<?php get_footer (); ?>