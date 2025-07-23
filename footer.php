<!-- 頁尾 -->
<?php

$login = is_user_logged_in ();

$footer_sections = [ 
	[ 
		'title' => '產品功能',
		'links' => [ 
			[ 'text' => '人員管理', 'href' => '#features' ],
			[ 'text' => '專案管理', 'href' => '#features' ],
			[ 'text' => '印刷管理', 'href' => '#features' ],
			[ 'text' => '數據分析', 'href' => '#' ],
		],
	],
	[ 
		'title' => '解決方案',
		'links' => [ 
			[ 'text' => 'B2C代印店', 'href' => '#solutions' ],
			[ 'text' => 'B2B印刷廠', 'href' => '#solutions' ],
			[ 'text' => '設計師服務', 'href' => '#solutions' ],
			[ 'text' => '客製化方案', 'href' => '#' ],
		],
	],
	[ 
		'title' => '支援服務',
		'links' => [ 
			[ 'text' => '聯絡我們', 'href' => '#contact' ],
			[ 'text' => '技術支援', 'href' => '#' ],
			[ 'text' => '使用教學', 'href' => '#' ],
			[ 'text' => '常見問題', 'href' => '#' ],
		],
	],
];

$social_links = [ 
	[ 'icon' => 'facebook', 'href' => '#' ],
	[ 'icon' => 'twitter', 'href' => '#' ],
	[ 'icon' => 'linkedin', 'href' => '#' ],
];

wp_footer ();

?>

<footer class="text-primary-foreground py-12" style="background: linear-gradient(135deg, #0c386a, #071d36);">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="grid md:grid-cols-4 gap-16">
			<div class="flex flex-col space-y-8">
				<div>
					<img src="<?php echo get_template_directory_uri (); ?>/assets/logo_w.png" alt="INKS">
				</div>
				<p class="text-gray-400 text-sm mb-4">
					印刷智能工單系統服務平台，讓印刷業數位轉型更簡單。
				</p>
				<div class="flex space-x-4">
					<?php foreach ( $social_links as $social ) : ?>
						<a href="<?php echo $social[ 'href' ]; ?>" class="text-gray-400 hover:text-white transition-colors">
							<i data-lucide="<?php echo $social[ 'icon' ]; ?>" class="w-5 h-5"></i>
						</a>
					<?php endforeach; ?>
				</div>
			</div>

			<?php foreach ( $footer_sections as $section ) : ?>
				<div>
					<h4 class="text-lg font-semibold mb-4"><?php echo $section[ 'title' ]; ?></h4>
					<ul class="space-y-2 text-sm text-gray-400">
						<?php foreach ( $section[ 'links' ] as $link ) : ?>
							<li><a href="<?php echo $link[ 'href' ]; ?>"
									class="hover:text-white transition-colors"><?php echo $link[ 'text' ]; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="border-t border-gray-600 mt-10 pt-10 text-center">
			<p class="text-gray-400 text-sm">
				© 2025 INKS印事平台. 版權所有. |
				<a href="#" class="hover:text-white transition-colors">隱私政策</a> |
				<a href="#" class="hover:text-white transition-colors">服務條款</a>
			</p>
		</div>
	</div>
</footer>

<script>

	// 登入狀態
	const login = <?php echo $login ? 'true' : 'false'; ?>;

	// 登入後導航欄高度
	function user_login() {
		const navbar = document.getElementById('navbar');
		const window_width = window.innerWidth;

		if (window_width < 768) {
			navbar.style.top = '46px';
		} else {
			navbar.style.top = '32px';
		}
	}

	if (login) {
		user_login()
	}

	// 初始化 Lucide 圖標
	lucide.createIcons();

	// 深色模式切換
	function initTheme() {
		const theme = localStorage.getItem('theme') || 'light';
		document.documentElement.classList.toggle('dark', theme === 'dark');
	}

	function toggleTheme() {
		const isDark = document.documentElement.classList.contains('dark');
		const newTheme = isDark ? 'light' : 'dark';
		document.documentElement.classList.toggle('dark', newTheme === 'dark');
		localStorage.setItem('theme', newTheme);
	}

	// 導航欄滾動效果
	function initNavbar() {
		const navbar = document.getElementById('navbar');

		window.addEventListener('scroll', () => {
			if (window.scrollY > 50) {
				navbar.classList.add('bg-background/95', 'backdrop-blur-md', 'border-b', 'border-border');
				navbar.classList.remove('bg-transparent');
			} else {
				navbar.classList.remove('bg-background/95', 'backdrop-blur-md', 'border-b', 'border-border');
				navbar.classList.add('bg-transparent');
			}
		});
	}

	// 手機選單切換
	function initMobileMenu() {
		const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
		const mobileMenu = document.getElementById('mobile-menu');

		mobileMenuToggle.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
		});

		// 點擊選單項目時關閉選單
		const mobileMenuLinks = mobileMenu.querySelectorAll('a');
		mobileMenuLinks.forEach(link => {
			link.addEventListener('click', () => {
				mobileMenu.classList.add('hidden');
			});
		});
	}

	// FAQ 手風琴效果
	function initFAQ() {
		const faqToggles = document.querySelectorAll('.faq-toggle');

		faqToggles.forEach(toggle => {
			toggle.addEventListener('click', () => {
				const targetId = toggle.getAttribute('data-target');
				const content = document.getElementById(targetId);
				const icon = toggle.querySelector('[data-lucide="chevron-down"]');

				// 關閉其他開啟的FAQ
				faqToggles.forEach(otherToggle => {
					if (otherToggle !== toggle) {
						const otherTargetId = otherToggle.getAttribute('data-target');
						const otherContent = document.getElementById(otherTargetId);
						const otherIcon = otherToggle.querySelector('[data-lucide="chevron-down"]');

						otherContent.classList.add('hidden');
						otherIcon.style.transform = 'rotate(0deg)';
					}
				});

				// 切換當前FAQ
				content.classList.toggle('hidden');
				const isOpen = !content.classList.contains('hidden');
				icon.style.transform = isOpen ? 'rotate(180deg)' : 'rotate(0deg)';
			});
		});
	}

	// 平滑滾動
	function initSmoothScroll() {
		const links = document.querySelectorAll('a[href^="#"]');

		links.forEach(link => {
			link.addEventListener('click', (e) => {
				e.preventDefault();
				const targetId = link.getAttribute('href');
				const targetElement = document.querySelector(targetId);

				if (targetElement) {
					const offsetTop = targetElement.offsetTop - 80; // 考慮固定導航欄高度
					window.scrollTo({
						top: offsetTop,
						behavior: 'smooth'
					});
				}
			});
		});
	}

	// 數字動畫
	function animateNumbers() {
		const counters = [
			{ element: document.getElementById('users-count'), target: 500, suffix: '+' },
			{ element: document.getElementById('orders-count'), target: 24, suffix: '' },
			{ element: document.getElementById('efficiency-count'), target: 65, suffix: '%' }
		];

		counters.forEach(counter => {
			if (counter.element) {
				let current = 0;
				const increment = counter.target / 60;
				const timer = setInterval(() => {
					current += increment;
					if (current >= counter.target) {
						current = counter.target;
						clearInterval(timer);
					}
					counter.element.textContent = Math.floor(current) + counter.suffix;
				}, 33);
			}
		});
	}

	// 初始化所有功能
	document.addEventListener('DOMContentLoaded', () => {
		initTheme();
		// initNavbar();
		initMobileMenu();
		initFAQ();
		initSmoothScroll();

		// 延遲執行數字動畫
		setTimeout(animateNumbers, 1000);

		// 主題切換按鈕事件
		document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
		document.getElementById('theme-toggle-mobile').addEventListener('click', toggleTheme);

		// 重新初始化圖標
		setTimeout(() => {
			lucide.createIcons();
		}, 100);
	});

	// 表單提交處理
	// document.querySelector('form').addEventListener('submit', (e) => {
	// 	e.preventDefault();
	// 	alert('感謝您的訊息！我們將盡快與您聯繫。');
	// });
</script>
</body>

</html>