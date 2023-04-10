<?php
/**
 * The header for our theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://cdn.tailwindcss.com"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div class="bg-[#35B8BE] text-white flex items-center justify-center p-4">
            <p class="opacity-80 mr-3">We're open and available for takeaway & delivery.</p>
            <p class="cursor-pointer">Order Now</p>
        </div>
        <header class="bg-white p-8 sticky top-0 z-30">
            <nav class="container mx-auto flex items-center justify-between">
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/imgs/LOGO.png" alt=""></a>
                <div class="text-[#28224B] text-lg flex items-center gap-x-8">
                    <a class="hover:text-[#35B8BE]" href="#">Home</a>
                    <a class="hover:text-[#35B8BE]" href="#">Order</a>
                    <a class="hover:text-[#35B8BE]" href="#">Company</a>
                    <a class="hover:text-[#35B8BE]" href="#">FAQ</a>
                    <a class="hover:text-[#35B8BE]" href="#">Contact</a>
                    <a class="bg-[#35B8BE] p-5 rounded-lg relative" href="#"><svg class="w-6 h-6 fill-white " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg><span class="absolute top-[-10px] right-[-10px] z-10 text-[#35B8BE] bg-white py-1 px-3 rounded-full">0</span></a>
                </div>
            </nav>
        </header>
<!--end header-->