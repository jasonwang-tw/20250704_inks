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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/style.css?ver=<?= time (); ?>">
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

		/* 手機選單樣式 */
		.mobile-nav-menu {
			display: flex;
			flex-direction: column;
			margin-top: 0 !important;
		}

		.mobile-nav-menu li {
			list-style: none;
		}

		.mobile-nav-menu a {
			display: block;
			padding: 12px;
			color: hsl(var(--muted-foreground));
			text-decoration: none;
			font-size: 1rem;
			font-weight: 500;
			transition: color 0.2s ease;
		}

		.mobile-nav-menu a:hover {
			color: hsl(var(--foreground));
		}

		.mobile-nav-menu .active a {
			color: hsl(var(--muted-foreground));
		}

		span.wpcf7-not-valid-tip {
			font-size: 14px !important;
			display: inline-block !important;
			padding: 5px 0 0 5px !important;
		}
	</style>

	<?php wp_head (); ?>

</head>


<body class="min-h-screen bg-background text-foreground">
	<!-- 導航欄 -->
	<?php

	$nav_buttons = [ 
		[ 
			'text'  => '登入',
			'class' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
			'href'  => home_url () . '/login',
		],
		[ 
			'text'  => '免費諮詢',
			'class' => 'bg-primary text-white hover:bg-primary/80',
			'href'  => home_url () . '#contact',
		],
	];

	$mobile_buttons = [ 
		[ 
			'text'  => '登入',
			'class' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
			'href'  => home_url () . '/login',
		],
		[ 
			'text'  => '免費諮詢',
			'class' => 'bg-primary text-white hover:bg-primary/80',
			'href'  => home_url () . '#contact',
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
						<?php

						// 使用 WordPress 內建的導航列功能
						wp_nav_menu ( array(
							'theme_location' => 'primary_menu',
							'container'      => false,
							'menu_class'     => 'flex items-baseline space-x-8',
							'fallback_cb'    => false,
							'walker'         => new Custom_Nav_Walker(),
						) );
						?>
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
						<a href="<?php echo $button[ 'href' ]; ?>"
							class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 <?php echo $button[ 'class' ]; ?> h-9 px-4 py-2">
							<?php echo $button[ 'text' ]; ?>
						</a>
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
					<?php
					// 使用 WordPress 內建的導航列功能
					wp_nav_menu ( array(
						'theme_location' => 'mobile_menu',
						'container'      => false,
						'menu_class'     => 'mobile-nav-menu',
						'fallback_cb'    => false,
						'walker'         => new Custom_Nav_Walker(),
					) );
					?>
					<div class="flex flex-col space-y-2 px-3 pt-4">
						<?php foreach ( $mobile_buttons as $button ) : ?>
							<a href="<?php echo $button[ 'href' ]; ?>"
								class="btn-animate inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 <?php echo $button[ 'class' ]; ?> h-9 px-4 py-2">
								<?php echo $button[ 'text' ]; ?>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</nav>