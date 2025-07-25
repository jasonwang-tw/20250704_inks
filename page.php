<?php
/**
 * 頁面模板
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

get_header ();
?>

<!-- 頁面標題區 -->
<section class="bg-gradient-to-r from-primary to-primary/80 text-white py-16" style="margin-top: 64px;">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="text-center">
			<!-- 頁面標題 -->
			<h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
				<?php the_title (); ?>
			</h1>

			<!-- 頁面更新時間 -->
			<div class="flex items-center justify-center space-x-2 text-white/90 text-sm">
				<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
					</path>
				</svg>
				<span>最後更新：<?php echo get_the_modified_date (); ?></span>
			</div>
		</div>
	</div>
</section>

<!-- 頁面內容區 -->
<section class="py-16 bg-background content-area">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid grid-cols-1 gap-8">
			<!-- 主要內容區 -->
			<div class="lg:col-span-3">
				<article class="bg-card border border-border rounded-lg overflow-hidden shadow-sm">
					<!-- 特色圖片 -->
					<?php if ( has_post_thumbnail () ) : ?>
						<div class="aspect-video overflow-hidden">
							<?php the_post_thumbnail ( 'large', array( 'class' => 'w-full h-full object-cover' ) ); ?>
						</div>
					<?php endif; ?>

					<div class="p-8">
						<!-- 頁面內容 -->
						<div class="prose prose-lg max-w-none text-foreground leading-loose">
							<?php
							while ( have_posts () ) :
								the_post ();
								the_content ();

								// 分頁連結（適用於長頁面分頁）
								wp_link_pages ( array(
									'before'      => '<div class="page-links mt-8 pt-8 border-t border-border"><span class="page-links-title text-lg font-semibold">頁面：</span>',
									'after'       => '</div>',
									'link_before' => '<span class="bg-primary text-white px-3 py-1 rounded-md mr-2 hover:bg-primary/80 transition-colors">',
									'link_after'  => '</span>',
								) );
							endwhile;
							?>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>

<?php
get_footer ();
?>