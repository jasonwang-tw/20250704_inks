<?php
/**
 * Template Name: inks Home Page
 * @package inks
 * @version 2.0.0
 */

?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INKS印事 - 印刷智能工單系統服務平台</title>
	<meta name="description" content="INKS印事 - 印刷智能工單系統服務平台">
	<meta name="keywords" content="印刷智能工單系統, 印刷工單系統, 印刷管理系統, 印刷業管理系統, 印刷業工單系統, 印刷業管理系統, 印刷業工單系統, 印刷業管理系統, 印刷業工單系統">
	<link rel="icon" href="<?php echo get_template_directory_uri (); ?>/assets/favicon.png" type="image/png">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
	<script>
		tailwind.config = {
			darkMode: 'class',
			theme: {
				extend: {
					colors: {
						border: "hsl(var(--border))",
						input: "hsl(var(--input))",
						ring: "hsl(var(--ring))",
						background: "hsl(var(--background))",
						foreground: "hsl(var(--foreground))",
						primary: {
							DEFAULT: "#0c386a",
							foreground: "hsl(var(--primary-foreground))",
						},
						secondary: {
							DEFAULT: "#FED101",
							foreground: "hsl(var(--secondary-foreground))",
						},
						destructive: {
							DEFAULT: "#B9B390",
							foreground: "hsl(var(--destructive-foreground))",
						},
						muted: {
							DEFAULT: "hsl(var(--muted))",
							foreground: "hsl(var(--muted-foreground))",
						},
						accent: {
							DEFAULT: "hsl(var(--accent))",
							foreground: "hsl(var(--accent-foreground))",
						},
						popover: {
							DEFAULT: "hsl(var(--popover))",
							foreground: "hsl(var(--popover-foreground))",
						},
						card: {
							DEFAULT: "hsl(var(--card))",
							foreground: "hsl(var(--card-foreground))",
						},
					},
					animation: {
						'blob': 'blob 7s infinite',
						'float': 'float 3s ease-in-out infinite',
						'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
					},
					keyframes: {
						blob: {
							'0%': { transform: 'translate(0px, 0px) scale(1)' },
							'33%': { transform: 'translate(30px, -50px) scale(1.1)' },
							'66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
							'100%': { transform: 'translate(0px, 0px) scale(1)' }
						},
						float: {
							'0%, 100%': { transform: 'translateY(0px)' },
							'50%': { transform: 'translateY(-10px)' }
						}
					}
				}
			}
		}
	</script>
	<style>
		:root {
			--background: 0 0% 100%;
			--foreground: 222.2 84% 4.9%;
			--card: 0 0% 100%;
			--card-foreground: 222.2 84% 4.9%;
			--popover: 0 0% 100%;
			--popover-foreground: 222.2 84% 4.9%;
			--primary: 222.2 47.4% 11.2%;
			--primary-foreground: 210 40% 98%;
			--secondary: 210 40% 96%;
			--secondary-foreground: 222.2 84% 4.9%;
			--muted: 210 40% 96%;
			--muted-foreground: 215.4 16.3% 46.9%;
			--accent: 210 40% 96%;
			--accent-foreground: 222.2 84% 4.9%;
			--destructive: 0 84.2% 60.2%;
			--destructive-foreground: 210 40% 98%;
			--border: 214.3 31.8% 91.4%;
			--input: 214.3 31.8% 91.4%;
			--ring: 222.2 84% 4.9%;
		}

		.dark {
			--background: 222.2 84% 4.9%;
			--foreground: 210 40% 98%;
			--card: 222.2 84% 4.9%;
			--card-foreground: 210 40% 98%;
			--popover: 222.2 84% 4.9%;
			--popover-foreground: 210 40% 98%;
			--primary: 210 40% 98%;
			--primary-foreground: 222.2 47.4% 11.2%;
			--secondary: 217.2 32.6% 17.5%;
			--secondary-foreground: 210 40% 98%;
			--muted: 217.2 32.6% 17.5%;
			--muted-foreground: 215 20.2% 65.1%;
			--accent: 217.2 32.6% 17.5%;
			--accent-foreground: 210 40% 98%;
			--destructive: 0 62.8% 30.6%;
			--destructive-foreground: 210 40% 98%;
			--border: 217.2 32.6% 17.5%;
			--input: 217.2 32.6% 17.5%;
			--ring: 212.7 26.8% 83.9%;
		}

		* {
			border-color: hsl(var(--border));
		}

		body {
			background-color: hsl(var(--background));
			color: hsl(var(--foreground));
		}

		html {
			scroll-behavior: smooth;
		}

		.animation-delay-2000 {
			animation-delay: 2s;
		}

		.animation-delay-4000 {
			animation-delay: 4s;
		}

		.card-hover {
			transition: all 0.3s ease;
		}

		.card-hover:hover {
			transform: translateY(-8px);
			box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
				0 10px 10px -5px rgba(0, 0, 0, 0.04);
		}

		.dark .card-hover:hover {
			box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3),
				0 10px 10px -5px rgba(0, 0, 0, 0.2);
		}

		.btn-animate {
			transition: all 0.2s ease;
		}

		.btn-animate:hover {
			transform: translateY(-2px);
		}

		.gradient-text {
			background: linear-gradient(135deg, #f97316, #3b82f6);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
		}

		::-webkit-scrollbar {
			width: 8px;
		}

		::-webkit-scrollbar-track {
			background: #f1f1f1;
		}

		::-webkit-scrollbar-thumb {
			background: #c1c1c1;
			border-radius: 4px;
		}

		::-webkit-scrollbar-thumb:hover {
			background: #a8a8a8;
		}

		.dark ::-webkit-scrollbar-track {
			background: #374151;
		}

		.dark ::-webkit-scrollbar-thumb {
			background: #6b7280;
		}

		.dark ::-webkit-scrollbar-thumb:hover {
			background: #9ca3af;
		}
	</style>

</head>

<body class="min-h-screen bg-background text-foreground">
	<!-- 導航欄 -->
	<?php
	$nav_items = [ 
		[ 'text' => '功能特色', 'href' => '#features' ],
		[ 'text' => '解決方案', 'href' => '#solutions' ],
		[ 'text' => '合作夥伴', 'href' => '#partners' ],
		[ 'text' => '方案價格', 'href' => '#pricing' ],
		[ 'text' => '聯絡我們', 'href' => '#contact' ],
	];

	$nav_buttons = [ 
		[ 
			'text'   => '了解功能',
			'class'  => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
			'hidden' => 'hidden',
		],
		[ 
			'text'   => '免費諮詢',
			'class'  => 'bg-primary text-white hover:bg-primary/80',
			'hidden' => '',
		],
	];

	$mobile_buttons = [ 
		[ 
			'text'   => '了解功能',
			'class'  => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
			'hidden' => 'hidden',
		],
		[ 
			'text'   => '免費諮詢',
			'class'  => 'bg-primary text-white hover:bg-primary/80',
			'hidden' => '',
		],
	];
	?>
	<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white shadow-md">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex items-center justify-between h-16">
				<!-- Logo -->
				<div class="flex items-center">
					<a href="<?php echo home_url (); ?>" class="flex items-center space-x-2">
						<img src="<?php echo get_template_directory_uri (); ?>/assets/logo.png" alt="INKS">
					</a>
				</div>

				<!-- Desktop Navigation -->
				<div class="hidden md:block">
					<div class="ml-10 flex items-baseline space-x-8">
						<?php foreach ( $nav_items as $item ) : ?>
							<a href="<?php echo $item[ 'href' ]; ?>"
								class="text-primary hover:text-secondary px-3 py-2 text-sm font-medium transition-colors duration-200"><?php echo $item[ 'text' ]; ?></a>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Right side buttons -->
				<div class="hidden md:flex items-center space-x-4">
					<button id="theme-toggle"
						class="w-9 h-9 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground inline-flex items-center justify-center hidden">
						<i data-lucide="sun"
							class="h-4 w-4 rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0"></i>
						<i data-lucide="moon"
							class="absolute h-4 w-4 rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100"></i>
					</button>
					<?php foreach ( $nav_buttons as $button ) : ?>
						<button
							class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 <?php echo $button[ 'class' ]; ?> h-9 px-4 py-2 <?php echo $button[ 'hidden' ]; ?>">
							<?php echo $button[ 'text' ]; ?>
						</button>
					<?php endforeach; ?>
				</div>

				<!-- Mobile menu button -->
				<div class="md:hidden flex items-center space-x-2">
					<button id="theme-toggle-mobile"
						class="w-9 h-9 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground inline-flex items-center justify-center hidden">
						<i data-lucide="sun"
							class="h-4 w-4 rotate-0 scale-100 transition-all dark:-rotate-90 dark:scale-0"></i>
						<i data-lucide="moon"
							class="absolute h-4 w-4 rotate-90 scale-0 transition-all dark:rotate-0 dark:scale-100"></i>
					</button>
					<button id="mobile-menu-toggle"
						class="w-9 h-9 rounded-md border border-input bg-background hover:bg-accent hover:text-accent-foreground inline-flex items-center justify-center">
						<i data-lucide="menu" class="h-6 w-6"></i>
					</button>
				</div>
			</div>

			<!-- Mobile Navigation -->
			<div id="mobile-menu" class="md:hidden hidden">
				<div class="px-2 pt-2 pb-3 space-y-1 bg-background/95 backdrop-blur-md border-b border-border">
					<?php foreach ( $nav_items as $item ) : ?>
						<a href="<?php echo $item[ 'href' ]; ?>"
							class="text-muted-foreground hover:text-foreground block px-3 py-2 text-base font-medium"><?php echo $item[ 'text' ]; ?></a>
					<?php endforeach; ?>
					<div class="flex flex-col space-y-2 px-3 pt-4">
						<?php foreach ( $mobile_buttons as $button ) : ?>
							<button
								class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 <?php echo $button[ 'class' ]; ?> h-9 px-4 py-2 <?php echo $button[ 'hidden' ]; ?>">
								<?php echo $button[ 'text' ]; ?>
							</button>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- 英雄區 -->
	<section
		class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-orange-50 dark:from-slate-900 dark:via-slate-800 dark:to-slate-900">
		<!-- 背景裝飾 -->
		<div class="absolute inset-0 overflow-hidden">
			<img src="<?php echo get_template_directory_uri (); ?>/assets/bg.jpg" alt="background"
				class="w-full h-full object-cover">
			<div class="hidden">
				<div
					class="absolute -top-40 -right-40 w-80 h-80 bg-orange-200 dark:bg-orange-900/20 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
				</div>
				<div
					class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-200 dark:bg-blue-900/20 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
				</div>
				<div
					class="absolute top-40 left-40 w-80 h-80 bg-purple-200 dark:bg-purple-900/20 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
				</div>
			</div>
		</div>

		<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-28 pb-20">
			<div class="grid lg:grid-cols-2 gap-12 items-center">
				<!-- 左側內容 -->
				<div class="text-center lg:text-left">
					<div
						class="inline-flex items-center px-4 py-2 rounded-full bg-secondary dark:bg-secondary/30 text-primary dark:text-secondary text-sm font-medium mb-6">
						<i data-lucide="trending-up" class="w-4 h-4 mr-2"></i>
						已有 500+ 印刷業者加入使用
					</div>

					<h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6">
						<div class="text-white mb-4">印刷智能工單系統</div>
						<div class="text-secondary">服務平台</div>
					</h1>

					<p class="text-xl text-white mb-8 max-w-2xl">
						連接需求方與生產方的橋樑，讓印刷業數位轉型更簡單。
						整合人員管理、專案管理與印刷管理，提升效率與客戶滿意度。
					</p>

					<div class="flex flex-col sm:flex-row gap-4 mb-12">
						<button
							class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-white hover:bg-primary/80 h-11 px-8">
							了解功能
							<i data-lucide="arrow-right" class="ml-2 h-5 w-5"></i>
						</button>
						<button
							class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-11 px-8">
							免費諮詢
						</button>
					</div>

					<!-- 統計數據 -->
					<div class="grid grid-cols-3 gap-8">
						<div class="text-center">
							<div id="users-count" class="text-3xl font-bold text-secondary dark:text-white">500+</div>
							<div class="text-sm text-white dark:text-gray-400">印刷業者</div>
						</div>
						<div class="text-center">
							<div id="orders-count" class="text-3xl font-bold text-secondary dark:text-white">24</div>
							<div class="text-sm text-white dark:text-gray-400">待處理工單</div>
						</div>
						<div class="text-center">
							<div id="efficiency-count" class="text-3xl font-bold text-secondary dark:text-white">65%
							</div>
							<div class="text-sm text-white dark:text-gray-400">本週完成率</div>
						</div>
					</div>
				</div>

				<!-- 右側產品展示 -->
				<div class="relative">
					<div
						class="relative bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-6 border border-gray-200 dark:border-slate-700">
						<!-- 模擬工單管理介面 -->
						<div class="flex items-center justify-between mb-4">
							<div class="flex items-center space-x-2">
								<div class="w-3 h-3 bg-red-500 rounded-full"></div>
								<div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
								<div class="w-3 h-3 bg-green-500 rounded-full"></div>
							</div>
							<div class="text-sm text-gray-500 dark:text-gray-400">INKS印事工單系統</div>
						</div>

						<div class="space-y-4">
							<div class="bg-gray-50 dark:bg-slate-700 rounded-lg p-4">
								<h3 class="font-semibold text-gray-900 dark:text-white mb-2">工單狀態儀表板</h3>
								<div class="grid grid-cols-3 gap-4 text-center">
									<div>
										<div class="text-2xl font-bold text-blue-600">24</div>
										<div class="text-xs text-gray-500">待處理</div>
									</div>
									<div>
										<div class="text-2xl font-bold text-orange-500">18</div>
										<div class="text-xs text-gray-500">進行中</div>
									</div>
									<div>
										<div class="text-2xl font-bold text-green-500">42</div>
										<div class="text-xs text-gray-500">已完成</div>
									</div>
								</div>
								<div class="mt-3 bg-gray-200 dark:bg-slate-600 rounded-full h-2">
									<div id="progress-bar"
										class="bg-green-500 h-2 rounded-full transition-all duration-1000"
										style="width: 65%"></div>
								</div>
								<div class="text-xs text-gray-500 mt-1">本週完成率: 65%</div>
							</div>

							<div class="space-y-2">
								<div
									class="flex items-center justify-between p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
									<div class="flex items-center space-x-3">
										<div class="w-2 h-2 bg-blue-500 rounded-full"></div>
										<span class="text-sm font-medium">新增工單</span>
									</div>
									<button
										class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">查看</button>
								</div>
								<div
									class="flex items-center justify-between p-3 bg-orange-50 dark:bg-orange-900/20 rounded-lg">
									<div class="flex items-center space-x-3">
										<div class="w-2 h-2 bg-orange-500 rounded-full"></div>
										<span class="text-sm font-medium">查看報表</span>
									</div>
									<button
										class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-8 px-3">查看</button>
								</div>
							</div>
						</div>
					</div>

					<!-- 浮動元素 -->
					<div
						class="absolute -top-4 -right-4 bg-green-500 text-white p-3 rounded-full shadow-lg animate-float">
						<i data-lucide="check-circle" class="w-6 h-6"></i>
					</div>
					<div class="absolute -bottom-4 -left-4 bg-blue-500 text-white p-3 rounded-full shadow-lg animate-float"
						style="animation-delay: 1.5s;">
						<i data-lucide="users" class="w-6 h-6"></i>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 核心功能區 -->
	<?php
	$features = [ 
		[ 
			'icon'        => 'users',
			'icon_bg'     => 'bg-blue-100 dark:bg-blue-900/30',
			'icon_color'  => 'text-blue-600 dark:text-blue-400',
			'title'       => '人員管理',
			'description' => '全方位管理印刷相關人員，包括客戶、設計師、印刷技師等，建立完整人員資料庫，提升溝通效率。',
			'features'    => [ 
				'客戶資料管理',
				'員工權限設定',
				'設計師協作平台',
				'供應商整合',
			],
		],
		[ 
			'icon'        => 'folder',
			'icon_bg'     => 'bg-orange-100 dark:bg-orange-900/30',
			'icon_color'  => 'text-orange-600 dark:text-orange-400',
			'title'       => '專案管理',
			'description' => '從報價、接單到出貨，全流程數位化管理，即時掌握每個專案進度，提高工作透明度。',
			'features'    => [ 
				'智能報價系統',
				'專案進度追蹤',
				'檔案版本控制',
				'自動化通知',
			],
		],
		[ 
			'icon'        => 'printer',
			'icon_bg'     => 'bg-green-100 dark:bg-green-900/30',
			'icon_color'  => 'text-green-600 dark:text-green-400',
			'title'       => '印刷管理',
			'description' => '整合印刷設備與工單系統，實現生產排程最佳化，提升設備使用效率，降低生產成本。',
			'features'    => [ 
				'設備狀態監控',
				'智能排程系統',
				'耗材庫存管理',
				'品質控制追蹤',
			],
		],
	];
	?>
	<section id="features" class="py-20 bg-background">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">核心功能模組</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					INKS印事平台提供完整的印刷業數位化解決方案，整合人員、專案與印刷三大核心模組，
					實現從接單、設計到生產的全流程管理。
				</p>
			</div>

			<div class="grid md:grid-cols-3 gap-8">
				<?php foreach ( $features as $feature ) : ?>
					<div class="card-hover bg-card text-card-foreground rounded-lg border border-border p-6 shadow-sm">
						<div
							class="w-12 h-12 <?php echo $feature[ 'icon_bg' ]; ?> rounded-lg flex items-center justify-center mb-4">
							<i data-lucide="<?php echo $feature[ 'icon' ]; ?>"
								class="w-6 h-6 <?php echo $feature[ 'icon_color' ]; ?>"></i>
						</div>
						<h3 class="text-xl font-semibold mb-3"><?php echo $feature[ 'title' ]; ?></h3>
						<p class="text-muted-foreground mb-4">
							<?php echo $feature[ 'description' ]; ?>
						</p>
						<ul class="space-y-2 text-sm text-muted-foreground">
							<?php foreach ( $feature[ 'features' ] as $item ) : ?>
								<li class="flex items-center">
									<i data-lucide="check" class="w-4 h-4 text-green-500 mr-2"></i>
									<?php echo $item; ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 解決方案區 -->
	<?php
	$solutions = [ 
		[ 
			'icon'        => 'store',
			'badge_bg'    => 'bg-blue-100 dark:bg-blue-900/30',
			'badge_color' => 'text-blue-600 dark:text-blue-400',
			'badge_text'  => 'B2C代印店',
			'title'       => '適合單店或連鎖代印店',
			'description' => '提供完整的接單、排程與客戶管理功能，提升營運效率與客戶滿意度。',
			'features'    => [ 
				'線上接單系統',
				'客戶資料管理',
				'自動排程功能',
				'數位賣場',
			],
			'image_bg'    => 'from-blue-50 to-blue-100 dark:from-blue-900/20 dark:to-blue-800/20',
			'image_color' => 'text-blue-500',
			'image_title' => '代印店解決方案',
			'reverse'     => false,
		],
		[ 
			'icon'        => 'factory',
			'badge_bg'    => 'bg-orange-100 dark:bg-orange-900/30',
			'badge_color' => 'text-orange-600 dark:text-orange-400',
			'badge_text'  => 'B2B印刷廠',
			'title'       => '專為中大型印刷廠設計',
			'description' => '整合生產排程、設備管理與報價系統，實現生產流程數位化與智能化。',
			'features'    => [ 
				'生產排程最佳化',
				'設備整合監控',
				'AI智能報價',
				'供應鏈管理',
			],
			'image_bg'    => 'from-orange-50 to-orange-100 dark:from-orange-900/20 dark:to-orange-800/20',
			'image_color' => 'text-orange-500',
			'image_title' => '印刷廠解決方案',
			'reverse'     => true,
		],
		[ 
			'icon'        => 'palette',
			'badge_bg'    => 'bg-purple-100 dark:bg-purple-900/30',
			'badge_color' => 'text-purple-600 dark:text-purple-400',
			'badge_text'  => '設計師與個人用戶',
			'title'       => '便捷的印刷服務平台',
			'description' => '為設計師與個人用戶提供便捷的印刷服務平台，輕鬆上傳設計檔案，獲得專業印刷成品。',
			'features'    => [ 
				'簡易下單流程',
				'設計檔案管理',
				'進度即時追蹤',
				'多元支付選項',
			],
			'image_bg'    => 'from-purple-50 to-purple-100 dark:from-purple-900/20 dark:to-purple-800/20',
			'image_color' => 'text-purple-500',
			'image_title' => '設計師解決方案',
			'reverse'     => false,
		],
	];
	?>
	<section id="solutions" class="py-20 bg-muted/50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">客製化解決方案</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					針對不同類型的印刷業者，INKS印事平台提供客製化解決方案，
					滿足各種規模與需求的數位轉型需求。
				</p>
			</div>

			<div class="space-y-16">
				<?php foreach ( $solutions as $solution ) : ?>
					<div class="grid lg:grid-cols-2 gap-12 items-center">
						<div class="<?php echo $solution[ 'reverse' ] ? 'lg:order-2' : ''; ?>">
							<div
								class="inline-flex items-center px-3 py-1 rounded-full <?php echo $solution[ 'badge_bg' ]; ?> <?php echo $solution[ 'badge_color' ]; ?> text-sm font-medium mb-4">
								<i data-lucide="<?php echo $solution[ 'icon' ]; ?>" class="w-4 h-4 mr-2"></i>
								<?php echo $solution[ 'badge_text' ]; ?>
							</div>
							<h3 class="text-2xl font-bold text-foreground mb-4"><?php echo $solution[ 'title' ]; ?></h3>
							<p class="text-muted-foreground mb-6">
								<?php echo $solution[ 'description' ]; ?>
							</p>
							<ul class="space-y-3">
								<?php foreach ( $solution[ 'features' ] as $feature ) : ?>
									<li class="flex items-center">
										<i data-lucide="check-circle" class="w-5 h-5 text-green-500 mr-3"></i>
										<span><?php echo $feature; ?></span>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div
							class="<?php echo $solution[ 'reverse' ] ? 'lg:order-1' : ''; ?> bg-gradient-to-br <?php echo $solution[ 'image_bg' ]; ?> rounded-2xl p-8 text-center">
							<i data-lucide="<?php echo $solution[ 'icon' ]; ?>"
								class="w-24 h-24 <?php echo $solution[ 'image_color' ]; ?> mx-auto mb-4"></i>
							<h4 class="text-lg font-semibold text-foreground"><?php echo $solution[ 'image_title' ]; ?></h4>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 平台優勢區 -->
	<?php
	$advantages = [ 
		[ 
			'icon'        => 'cloud',
			'icon_bg'     => 'bg-blue-100 dark:bg-blue-900/30',
			'icon_color'  => 'text-blue-600 dark:text-blue-400',
			'title'       => 'SaaS雲端服務架構',
			'description' => '隨時隨地存取，無需安裝，自動更新，確保您始終使用最新版本',
		],
		[ 
			'icon'        => 'smartphone',
			'icon_bg'     => 'bg-green-100 dark:bg-green-900/30',
			'icon_color'  => 'text-green-600 dark:text-green-400',
			'title'       => 'RWD電腦/手機版網頁操作',
			'description' => '跨裝置無縫體驗，從桌機到手機，隨時掌握業務狀況',
		],
		[ 
			'icon'        => 'heart',
			'icon_bg'     => 'bg-orange-100 dark:bg-orange-900/30',
			'icon_color'  => 'text-orange-600 dark:text-orange-400',
			'title'       => '友善的使用者操作介面',
			'description' => '直覺化設計，降低學習門檻，提升工作效率',
		],
		[ 
			'icon'        => 'cpu',
			'icon_bg'     => 'bg-purple-100 dark:bg-purple-900/30',
			'icon_color'  => 'text-purple-600 dark:text-purple-400',
			'title'       => '印刷設備IOT整合',
			'description' => '智能連接實體設備，即時監控生產狀態，優化資源配置',
		],
	];
	?>
	<section class="py-20 bg-background">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">平台優勢</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					INKS印事平台採用最新技術架構，提供穩定、高效、易用的服務體驗
				</p>
			</div>

			<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
				<?php foreach ( $advantages as $advantage ) : ?>
					<div class="text-center">
						<div
							class="w-16 h-16 <?php echo $advantage[ 'icon_bg' ]; ?> rounded-full flex items-center justify-center mx-auto mb-4">
							<i data-lucide="<?php echo $advantage[ 'icon' ]; ?>"
								class="w-8 h-8 <?php echo $advantage[ 'icon_color' ]; ?>"></i>
						</div>
						<h3 class="text-lg font-semibold text-foreground mb-2"><?php echo $advantage[ 'title' ]; ?></h3>
						<p class="text-muted-foreground text-sm"><?php echo $advantage[ 'description' ]; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 數據儀表板展示區 -->
	<?php
	$dashboard_stats = [ 
		[ 
			'title'       => '訂單統計',
			'value'       => '1,247',
			'label'       => '本月總訂單',
			'trend'       => '↑ 12% 較上月',
			'bg_color'    => 'bg-blue-50 dark:bg-blue-900/20',
			'value_color' => 'text-blue-600',
		],
		[ 
			'title'       => '生產效率',
			'value'       => '87%',
			'label'       => '設備使用率',
			'trend'       => '↑ 5% 較上月',
			'bg_color'    => 'bg-orange-50 dark:bg-orange-900/20',
			'value_color' => 'text-orange-600',
		],
		[ 
			'title'       => '客戶滿意度',
			'value'       => '4.8',
			'label'       => '平均評分',
			'trend'       => '↑ 0.2 較上月',
			'bg_color'    => 'bg-green-50 dark:bg-green-900/20',
			'value_color' => 'text-green-600',
		],
	];

	$work_order_status = [ 
		[ 
			'value' => '24',
			'label' => '待處理',
			'color' => 'text-blue-600',
		],
		[ 
			'value' => '18',
			'label' => '設計中',
			'color' => 'text-yellow-600',
		],
		[ 
			'value' => '32',
			'label' => '印刷中',
			'color' => 'text-orange-600',
		],
		[ 
			'value' => '156',
			'label' => '已完成',
			'color' => 'text-green-600',
		],
	];
	?>
	<section class="py-20 bg-muted/50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">數據儀表板展示</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					透過視覺化數據，即時掌握業務狀況，做出明智決策
				</p>
			</div>

			<div class="bg-card text-card-foreground rounded-2xl border border-border p-8 shadow-lg">
				<div class="grid md:grid-cols-3 gap-8 mb-8">
					<?php foreach ( $dashboard_stats as $stat ) : ?>
						<div class="text-center">
							<h3 class="text-lg font-semibold text-foreground mb-4"><?php echo $stat[ 'title' ]; ?></h3>
							<div class="<?php echo $stat[ 'bg_color' ]; ?> rounded-lg p-6">
								<div class="text-3xl font-bold <?php echo $stat[ 'value_color' ]; ?> mb-2">
									<?php echo $stat[ 'value' ]; ?>
								</div>
								<div class="text-sm text-muted-foreground"><?php echo $stat[ 'label' ]; ?></div>
								<div class="mt-2 text-xs text-green-600"><?php echo $stat[ 'trend' ]; ?></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="bg-muted/50 rounded-lg p-6">
					<h4 class="text-lg font-semibold text-foreground mb-4">即時工單狀態</h4>
					<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
						<?php foreach ( $work_order_status as $status ) : ?>
							<div class="bg-background rounded-lg p-4 text-center">
								<div class="text-2xl font-bold <?php echo $status[ 'color' ]; ?>">
									<?php echo $status[ 'value' ]; ?>
								</div>
								<div class="text-xs text-muted-foreground"><?php echo $status[ 'label' ]; ?></div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 合作夥伴區 -->
	<?php
	$main_partner = [ 
		'logo'        => 'KM',
		'logo_bg'     => 'bg-orange-500',
		'name'        => '康鈦科技',
		'type'        => '主要合作夥伴',
		'description' => '康鈦-印事雙品牌合作，提供完整的印刷設備與軟體整合解決方案',
		'button_text' => '了解合作詳情',
		'card_title'  => 'Konica Minolta-INKS 雙品牌合作整合',
		'card_desc'   => '結合康鈦印刷設備與INKS印事平台，提供完整的印刷數位轉型解決方案',
	];

	$other_partners = [ 
		[ 
			'logo'    => 'SH',
			'logo_bg' => 'bg-green-500',
			'name'    => '糸和氏創意印刷',
			'desc'    => '專業印刷服務提供商，深耕印刷產業近15年',
		],
		[ 
			'logo'    => 'MS',
			'logo_bg' => 'bg-blue-500',
			'name'    => '麥思印刷',
			'desc'    => '創新印刷技術領導者，提供多元化印刷服務',
		],
		[ 
			'logo'    => 'SW',
			'logo_bg' => 'bg-purple-500',
			'name'    => '千倍股份有限公司',
			'desc'    => '軟韌體研發專家，擁有超過20年軟韌體研發與管理經驗',
		],
	];
	?>
	<section id="partners" class="py-20 bg-background">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">合作夥伴</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					與業界領導品牌合作，共同打造印刷產業數位生態圈
				</p>
			</div>

			<!-- 康鈦科技重點合作 -->
			<div
				class="bg-gradient-to-r from-orange-50 to-blue-50 dark:from-orange-900/20 dark:to-blue-900/20 rounded-2xl p-8 mb-12 border border-border">
				<div class="grid lg:grid-cols-2 gap-8 items-center">
					<div>
						<div class="flex items-center mb-4">
							<div
								class="w-12 h-12 <?php echo $main_partner[ 'logo_bg' ]; ?> rounded-lg flex items-center justify-center mr-4">
								<span class="text-white font-bold text-lg"><?php echo $main_partner[ 'logo' ]; ?></span>
							</div>
							<div>
								<h3 class="text-2xl font-bold text-foreground"><?php echo $main_partner[ 'name' ]; ?>
								</h3>
								<p class="text-muted-foreground"><?php echo $main_partner[ 'type' ]; ?></p>
							</div>
						</div>
						<p class="text-lg text-foreground mb-4">
							<?php echo $main_partner[ 'description' ]; ?>
						</p>
						<button
							class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-orange-500 text-white hover:bg-orange-600 h-10 px-6">
							<?php echo $main_partner[ 'button_text' ]; ?>
						</button>
					</div>
					<div class="text-center">
						<div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg">
							<h4 class="text-lg font-semibold text-foreground mb-2">
								<?php echo $main_partner[ 'card_title' ]; ?>
							</h4>
							<p class="text-muted-foreground text-sm"><?php echo $main_partner[ 'card_desc' ]; ?></p>
						</div>
					</div>
				</div>
			</div>

			<!-- 其他合作夥伴 -->
			<div class="grid md:grid-cols-3 gap-8">
				<?php foreach ( $other_partners as $partner ) : ?>
					<div class="bg-card text-card-foreground rounded-lg border border-border p-6 text-center">
						<div
							class="w-12 h-12 <?php echo $partner[ 'logo_bg' ]; ?> rounded-lg flex items-center justify-center mx-auto mb-4">
							<span class="text-white font-bold text-lg"><?php echo $partner[ 'logo' ]; ?></span>
						</div>
						<h4 class="text-lg font-semibold text-foreground mb-2"><?php echo $partner[ 'name' ]; ?></h4>
						<p class="text-muted-foreground text-sm"><?php echo $partner[ 'desc' ]; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 客戶見證區 -->
	<?php
	$testimonials = [ 
		[ 
			'avatar'    => '王',
			'avatar_bg' => 'bg-blue-500',
			'name'      => '王經理',
			'title'     => '某印刷廠負責人',
			'content'   => '"INKS印事平台幫助我們實現了印刷流程的數位化管理，大幅提升了生產效率與客戶滿意度。系統操作簡單直覺，員工很快就能上手。"',
			'rating'    => 5,
		],
		[ 
			'avatar'    => '李',
			'avatar_bg' => 'bg-green-500',
			'name'      => '李設計師',
			'title'     => '自由設計師',
			'content'   => '"作為設計師，我非常喜歡INKS印事平台的便捷下單流程與即時進度追蹤功能。讓我能更專注於創意工作，不必擔心印刷細節。"',
			'rating'    => 5,
		],
		[ 
			'avatar'    => '陳',
			'avatar_bg' => 'bg-orange-500',
			'name'      => '陳店長',
			'title'     => '代印店經營者',
			'content'   => '"導入INKS印事平台後，我們的訂單處理速度提升了30%，客戶等待時間大幅縮短。數位賣場功能也為我們帶來了更多線上訂單。"',
			'rating'    => 5,
		],
	];
	?>
	<section class="py-20 bg-muted/50">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">客戶見證</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					聽聽我們的客戶如何評價INKS印事平台
				</p>
			</div>

			<div class="grid md:grid-cols-3 gap-8">
				<?php foreach ( $testimonials as $testimonial ) : ?>
					<div class="bg-card text-card-foreground rounded-lg border border-border p-6">
						<div class="flex items-center mb-4">
							<div
								class="w-12 h-12 <?php echo $testimonial[ 'avatar_bg' ]; ?> rounded-full flex items-center justify-center mr-4">
								<span class="text-white font-bold"><?php echo $testimonial[ 'avatar' ]; ?></span>
							</div>
							<div>
								<h4 class="font-semibold text-foreground"><?php echo $testimonial[ 'name' ]; ?></h4>
								<p class="text-sm text-muted-foreground"><?php echo $testimonial[ 'title' ]; ?></p>
							</div>
						</div>
						<p class="text-muted-foreground mb-4">
							<?php echo $testimonial[ 'content' ]; ?>
						</p>
						<div class="flex text-yellow-400">
							<?php for ( $i = 0; $i < $testimonial[ 'rating' ]; $i++ ) : ?>
								<i data-lucide="star" class="w-4 h-4 fill-current"></i>
							<?php endfor; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 訂閱方案區 -->
	<?php
	$pricing_plans = [ 
		[ 
			'name'         => '早鳥會員',
			'description'  => '適合剛開始數位轉型的印刷業者',
			'price'        => 'NT$2,980',
			'price_unit'   => '/月',
			'features'     => [ 
				'會員管理',
				'客戶管理',
				'專案管理',
				'AI智能報價',
				'工單管理',
				'數據儀表板',
				'印刷設備IOT整合',
				'康鈦設備整合',
				'技術支援(基本)',
			],
			'button_text'  => '選擇方案',
			'button_class' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
			'border_class' => 'border border-border',
			'badge'        => null,
		],
		[ 
			'name'         => '專業版',
			'description'  => '適合中型印刷廠與連鎖代印店',
			'price'        => 'NT$4,980',
			'price_unit'   => '/月',
			'features'     => [ 
				'會員管理',
				'客戶管理',
				'專案管理',
				'AI智能報價',
				'工單管理',
				'數據儀表板',
				'印刷設備IOT整合',
				'康鈦設備整合',
				'技術支援(優先)',
			],
			'button_text'  => '選擇方案',
			'button_class' => 'bg-secondary text-primary hover:bg-secondary/80',
			'border_class' => 'border-2 border-secondary',
			'badge'        => '最受歡迎',
		],
		[ 
			'name'         => '企業版',
			'description'  => '適合大型印刷企業與連鎖品牌',
			'price'        => 'NT$',
			'price_unit'   => '聯繫銷售',
			'features'     => [ 
				'會員管理',
				'客戶管理',
				'專案管理',
				'AI智能報價',
				'工單管理',
				'數據儀表板',
				'印刷設備IOT整合',
				'康鈦設備整合',
				'技術支援(24/7專人)',
			],
			'button_text'  => '聯繫我們',
			'button_class' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
			'border_class' => 'border border-border',
			'badge'        => null,
		],
	];
	?>
	<section id="pricing" class="py-20 bg-background">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">訂閱方案</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					選擇最適合您業務需求的方案，開始數位轉型之旅
				</p>
			</div>

			<div class="grid md:grid-cols-3 gap-8">
				<?php foreach ( $pricing_plans as $plan ) : ?>
					<div
						class="bg-card text-card-foreground rounded-lg <?php echo $plan[ 'border_class' ]; ?> p-6 <?php echo $plan[ 'badge' ] ? 'relative' : ''; ?>">
						<?php if ( $plan[ 'badge' ] ) : ?>
							<div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
								<span
									class="bg-secondary text-white px-4 py-1 rounded-full text-xs font-medium"><?php echo $plan[ 'badge' ]; ?></span>
							</div>
						<?php endif; ?>
						<div class="text-center mb-6">
							<h3 class="text-xl font-semibold text-foreground mb-2"><?php echo $plan[ 'name' ]; ?></h3>
							<p class="text-muted-foreground text-sm mb-4"><?php echo $plan[ 'description' ]; ?></p>
							<div class="text-3xl font-bold text-foreground"><?php echo $plan[ 'price' ]; ?><span
									class="text-lg font-normal text-muted-foreground"><?php echo $plan[ 'price_unit' ]; ?></span>
							</div>
						</div>
						<ul class="space-y-3 mb-6">
							<?php foreach ( $plan[ 'features' ] as $feature ) : ?>
								<li class="flex items-center">
									<i data-lucide="check" class="w-4 h-4 text-green-500 mr-3"></i>
									<span class="text-sm"><?php echo $feature; ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
						<button
							class="btn-animate w-full inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 <?php echo $plan[ 'button_class' ]; ?> h-10 px-4 py-2">
							<?php echo $plan[ 'button_text' ]; ?>
						</button>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="text-center mt-12">
				<div class="bg-muted/50 rounded-lg p-6 max-w-md mx-auto">
					<h4 class="text-lg font-semibold text-foreground mb-2">需要客製化方案？</h4>
					<p class="text-muted-foreground text-sm mb-4">我們提供符合您特定需求的客製化解決方案</p>
					<button
						class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/80 h-10 px-6">
						聯繫我們
					</button>
				</div>
			</div>
		</div>
	</section>

	<!-- 常見問題區 -->
	<?php
	$faq_items = [ 
		[ 
			'id'       => 'faq-1',
			'question' => 'INKS印事平台適合什麼類型的印刷業者？',
			'answer'   => 'INKS印事平台適合各種規模的印刷業者，包括個人代印店、中小型印刷廠、大型印刷企業，以及設計師和個人用戶。我們提供不同的解決方案來滿足各種需求。',
		],
		[ 
			'id'       => 'faq-2',
			'question' => '平台是否支援與現有印刷設備的整合？',
			'answer'   => '是的，INKS印事平台支援IOT設備整合，特別是與康鈦科技的印刷設備有深度整合。我們也支援其他主流品牌的設備連接，實現設備狀態監控和自動化管理。',
		],
		[ 
			'id'       => 'faq-3',
			'question' => '如何開始使用INKS印事平台？',
			'answer'   => '您可以先聯繫我們進行免費諮詢，我們的專業團隊會根據您的需求推薦最適合的方案。之後我們會提供完整的導入服務，包括系統設定、員工培訓和技術支援。',
		],
		[ 
			'id'       => 'faq-4',
			'question' => '平台的資料安全性如何保障？',
			'answer'   => '我們採用企業級的雲端安全架構，包括資料加密、定期備份、存取控制等多重安全措施。所有資料都儲存在符合國際安全標準的雲端環境中，確保您的業務資料安全無虞。',
		],
		[ 
			'id'       => 'faq-5',
			'question' => '是否提供客製化開發服務？',
			'answer'   => '是的，我們提供客製化開發服務。如果標準功能無法完全滿足您的特殊需求，我們的開發團隊可以為您量身打造專屬功能，確保平台完美契合您的業務流程。',
		],
	];
	?>
	<section class="py-20 bg-muted/50">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">常見問題</h2>
				<p class="text-xl text-muted-foreground">
					對INKS印事平台有疑問？以下是我們最常被問到的問題
				</p>
			</div>

			<div class="space-y-4">
				<?php foreach ( $faq_items as $faq ) : ?>
					<div class="bg-card text-card-foreground rounded-lg border border-border">
						<button class="faq-toggle w-full text-left p-6 focus:outline-none"
							data-target="<?php echo $faq[ 'id' ]; ?>">
							<div class="flex items-center justify-between">
								<h3 class="text-lg font-semibold text-foreground"><?php echo $faq[ 'question' ]; ?></h3>
								<i data-lucide="chevron-down"
									class="w-5 h-5 text-muted-foreground transition-transform"></i>
							</div>
						</button>
						<div id="<?php echo $faq[ 'id' ]; ?>" class="faq-content hidden px-6 pb-6">
							<p class="text-muted-foreground">
								<?php echo $faq[ 'answer' ]; ?>
							</p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- 聯絡表單區 -->
	<section id="contact" class="py-20 bg-background">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="text-center mb-16">
				<h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">聯絡我們</h2>
				<p class="text-xl text-muted-foreground max-w-3xl mx-auto">
					有任何問題或需求？填寫以下表單，我們將盡快與您聯繫
				</p>
			</div>

			<div class="grid lg:grid-cols-2 gap-12">
				<!-- 聯絡表單 -->
				<div class="bg-card text-card-foreground rounded-lg border border-border p-8">
					<form class="space-y-6">
						<div class="grid md:grid-cols-2 gap-4">
							<div>
								<label
									class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-foreground">姓名</label>
								<input
									class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1"
									placeholder="請輸入您的姓名" />
							</div>
							<div>
								<label
									class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-foreground">公司名稱</label>
								<input
									class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1"
									placeholder="請輸入公司名稱" />
							</div>
						</div>
						<div class="grid md:grid-cols-2 gap-4">
							<div>
								<label
									class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-foreground">電子郵件</label>
								<input type="email"
									class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1"
									placeholder="請輸入電子郵件" />
							</div>
							<div>
								<label
									class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-foreground">聯絡電話</label>
								<input
									class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1"
									placeholder="請輸入聯絡電話" />
							</div>
						</div>
						<div>
							<label
								class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-foreground">業務類型</label>
							<select
								class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1">
								<option>請選擇業務類型</option>
								<option>B2C代印店</option>
								<option>B2B印刷廠</option>
								<option>設計師/個人用戶</option>
								<option>其他</option>
							</select>
						</div>
						<div>
							<label
								class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-foreground">訊息內容</label>
							<textarea
								class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-1"
								rows="4" placeholder="請描述您的需求或問題"></textarea>
						</div>
						<button type="submit"
							class="btn-animate w-full inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/80 h-11 px-8">
							送出訊息
						</button>
					</form>
				</div>

				<!-- 聯絡資訊 -->
				<div class="space-y-8">
					<div>
						<h3 class="text-2xl font-bold text-foreground mb-6">聯絡資訊</h3>
						<div class="space-y-4">
							<div class="flex items-center">
								<div
									class="w-10 h-10 bg-orange-100 dark:bg-orange-900/30 rounded-lg flex items-center justify-center mr-4">
									<i data-lucide="mail" class="w-5 h-5 text-orange-600 dark:text-orange-400"></i>
								</div>
								<div>
									<h4 class="font-semibold text-foreground">電子郵件</h4>
									<p class="text-muted-foreground">info@inks-platform.com</p>
								</div>
							</div>
							<div class="flex items-center">
								<div
									class="w-10 h-10 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mr-4">
									<i data-lucide="clock" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
								</div>
								<div>
									<h4 class="font-semibold text-foreground">營業時間</h4>
									<p class="text-muted-foreground">週一至週五: 9:00 - 18:00</p>
									<p class="text-muted-foreground">週六至週日: 休息</p>
								</div>
							</div>
						</div>
					</div>

					<div
						class="bg-gradient-to-br from-orange-50 to-blue-50 dark:from-orange-900/20 dark:to-blue-900/20 rounded-lg p-6">
						<h4 class="text-lg font-semibold text-foreground mb-3">為什麼選擇INKS印事？</h4>
						<ul class="space-y-2 text-sm text-muted-foreground">
							<li class="flex items-center">
								<i data-lucide="check-circle" class="w-4 h-4 text-green-500 mr-2"></i>
								500+ 印刷業者信賴選擇
							</li>
							<li class="flex items-center">
								<i data-lucide="check-circle" class="w-4 h-4 text-green-500 mr-2"></i>
								完整的數位轉型解決方案
							</li>
							<li class="flex items-center">
								<i data-lucide="check-circle" class="w-4 h-4 text-green-500 mr-2"></i>
								與康鈦科技深度合作
							</li>
							<li class="flex items-center">
								<i data-lucide="check-circle" class="w-4 h-4 text-green-500 mr-2"></i>
								24/7 專業技術支援
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- 頁尾 -->
	<?php
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
							<a href="<?php echo $social[ 'href' ]; ?>"
								class="text-gray-400 hover:text-white transition-colors">
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
		document.querySelector('form').addEventListener('submit', (e) => {
			e.preventDefault();
			alert('感謝您的訊息！我們將盡快與您聯繫。');
		});
	</script>
</body>

</html>