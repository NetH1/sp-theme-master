<?php
/*
 * The main template file
 */

get_header(); 
$sp_obj = new SpClass();?>

<h1><?php $sp_obj->get_title();?><h1>

<?php if ( have_posts() ) :

	/* Start the Loop */
	while ( have_posts() ) : the_post(); ?>

<main>
            <section class="bg-[#F5FBFC] clip_path">
                <div class="container mx-auto w-full h-full flex items-center justify-around pt-24 pb-[470px]">
                    <div class="w-[35%]">
                        <p class="text-[#08090A] text-[60px]">Beautiful food & takeaway, <span class="text-[#35B8BE]">delivered</span> to your door.</p>
                        <p class="text-lg text-[#546285] mt-6 mb-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                        <button class="text-white text-lg bg-[#35B8BE] mb-10 py-4 px-8 rounded-lg">Place an Order</button>
                        <div>
                            <p class="flex items-center font-bold mb-2"><svg class="w-6 h-6 fill-[#00B67A]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg><span>Truspilot</span></p>
                            <p class="flex items-center text-[#08090A]"><span class="text-[#35B8BE]">4.8 out of 5 </span>  based on 2000+ reviews</p>
                        </div>
                    </div>
                    <div class="w-1/3">
                        <img src="<?php bloginfo('template_url'); ?>/imgs/food.png" alt="">
                    </div>
                </div>
            </section>

            <section class="bg-[#F5FBFC]">
                <div class="container mx-auto w-full h-full flex items-center justify-around pt-24 pb-48">
                    <div class="w-[35%]">
                        <p class="text-[50px] text-[#35B8BE]">The home of <br>fresh products</p>
                        <p class="text-lg text-[#546285] mt-6 mb-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                        <button class="text-white text-lg bg-[#35B8BE] mb-10 py-4 px-8 rounded-lg">Learn about us</button>
                    </div>
                    <div class="w-1/3">
                        <img src="<?php bloginfo('template_url'); ?>/imgs/food2.png" alt="">
                    </div>
                </div>
            </section>

            <section class="mt-[134px] container mx-auto">
                <h1 class="text-[#35B8BE] text-[50px] text-center mb-[66px]">How it works.</h1>
                <div class="flex items-center w-full flex-wrap wrapper">
                    <div class="w-1/3 flex flex-col items-center">
                        <img class="image_line" src="<?php bloginfo('template_url'); ?>/imgs/food3.png" alt="">
                        <p class="text-[#08090A] text-xl mt-10 mb-4">Adapt your menu items</p>
                        <p class="text-lg text-[#546285] text-center">Easily adapt your menu using the webflow CMS and allow customers to browse your items.</p>
                    </div>
                    <div class="w-1/3 flex flex-col items-center">
                        <img class="image_line" src="<?php bloginfo('template_url'); ?>/imgs/food3.png" alt="">
                        <p class="text-[#08090A] text-xl mt-10 mb-4">Adapt your menu items</p>
                        <p class="text-lg text-[#546285] text-center">Easily adapt your menu using the webflow CMS and allow customers to browse your items.</p>
                    </div>
                    <div class="w-1/3 flex flex-col items-center">
                        <img class="image_line" src="<?php bloginfo('template_url'); ?>/imgs/food3.png" alt="">
                        <p class="text-[#08090A] text-xl mt-10 mb-4">Adapt your menu items</p>
                        <p class="text-lg text-[#546285] text-center">Easily adapt your menu using the webflow CMS and allow customers to browse your items.</p>
                    </div>
                </div>
            </section>

            <section class="bg-[#F5FBFC] mt-[134px] clip_path2">
                <div class="container mx-auto w-full h-full py-[145px]">
                    <div class="flex flex-col items-center justify-center">
                        <h2 class="text-[#35B8BE] text-[50px] text-center">Browse our menu</h2>
                        <p class="text-center mt-5 mb-12">Use our menu to place an order online, or phone our store <br> to place a pickup order. Fast and fresh food.</p>
                        <div class="flex gap-x-7">
                            <button class="hover:bg-[#35B8BE] hover:text-white border_menu">Burgers</button>
                            <button class="hover:bg-[#35B8BE] hover:text-white border_menu">Sides</button>
                            <button class="hover:bg-[#35B8BE] hover:text-white border_menu">Drinks</button>
                        </div>
                    </div>
                    <div class="flex items-center flex-wrap gap-5 mt-8">
                        <div class="flex items-center w-[48%] card2">
                            <div class="mr-7"><img src="<?php bloginfo('template_url'); ?>/imgs/burger.png" alt=""></div>
                            <div>
                                <div class="flex items-center justify-between">
                                    <p class="text-[#08090A] font-medium">Burger Waldo</p>
                                    <span class="text-[#35B8BE]">$ 10.00 USD</span>
                                </div>
                                <p class="pt-3 pb-2">Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.</p>
                                <div>
                                    <input class="w-[60px] text-center py-2" type="text" value="1">
                                    <button class="bg-[#35B8BE] py-2 px-3 rounded-lg">Add to card</button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center w-[48%] card2">
                            <div class="mr-7"><img src="<?php bloginfo('template_url'); ?>/imgs/burger.png" alt=""></div>
                            <div>
                                <div class="flex items-center justify-between">
                                    <p class="text-[#08090A] font-medium">Burger Waldo</p>
                                    <span class="text-[#35B8BE]">$ 10.00 USD</span>
                                </div>
                                <p class="pt-3 pb-2">Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.</p>
                                <div>
                                    <input class="w-[60px] text-center py-2" type="text" value="1">
                                    <button class="bg-[#35B8BE] py-2 px-3 rounded-lg">Add to card</button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center w-[48%] card2">
                            <div class="mr-7"><img src="<?php bloginfo('template_url'); ?>/imgs/burger.png" alt=""></div>
                            <div>
                                <div class="flex items-center justify-between">
                                    <p class="text-[#08090A] font-medium">Burger Waldo</p>
                                    <span class="text-[#35B8BE]">$ 10.00 USD</span>
                                </div>
                                <p class="pt-3 pb-2">Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.</p>
                                <div>
                                    <input class="w-[60px] text-center py-2" type="text" value="1">
                                    <button class="bg-[#35B8BE] py-2 px-3 rounded-lg">Add to card</button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center w-[48%] card2">
                            <div class="mr-7"><img src="<?php bloginfo('template_url'); ?>/imgs/burger.png" alt=""></div>
                            <div>
                                <div class="flex items-center justify-between">
                                    <p class="text-[#08090A] font-medium">Burger Waldo</p>
                                    <span class="text-[#35B8BE]">$ 10.00 USD</span>
                                </div>
                                <p class="pt-3 pb-2">Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.</p>
                                <div>
                                    <input class="w-[60px] text-center py-2" type="text" value="1">
                                    <button class="bg-[#35B8BE] py-2 px-3 rounded-lg">Add to card</button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center w-[48%] card2">
                            <div class="mr-7"><img src="<?php bloginfo('template_url'); ?>/imgs/burger.png" alt=""></div>
                            <div>
                                <div class="flex items-center justify-between">
                                    <p class="text-[#08090A] font-medium">Burger Waldo</p>
                                    <span class="text-[#35B8BE]">$ 10.00 USD</span>
                                </div>
                                <p class="pt-3 pb-2">Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.</p>
                                <div>
                                    <input class="w-[60px] text-center py-2" type="text" value="1">
                                    <button class="bg-[#35B8BE] py-2 px-3 rounded-lg">Add to card</button>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center w-[48%] card2">
                            <div class="mr-7"><img src="<?php bloginfo('template_url'); ?>/imgs/burger.png" alt=""></div>
                            <div>
                                <div class="flex items-center justify-between">
                                    <p class="text-[#08090A] font-medium">Burger Waldo</p>
                                    <span class="text-[#35B8BE]">$ 10.00 USD</span>
                                </div>
                                <p class="pt-3 pb-2">Lorem Ipsum is simply dummy text of the <br> printing and typesetting industry.</p>
                                <div>
                                    <input class="w-[60px] text-center py-2" type="text" value="1">
                                    <button class="bg-[#35B8BE] py-2 px-3 rounded-lg">Add to card</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="text-white text-lg bg-[#35B8BE] rounded-lg py-4 px-8 block mx-auto mt-16">See Full Menu</button>
                </div>
            </section>

            <section class="mt-[120px]">
                <div class="container mx-auto w-full h-full flex items-center justify-around">
                    <div class="w-1/3">
                        <img src="<?php bloginfo('template_url'); ?>/imgs/food.png" alt="">
                    </div>
                    <div class="w-[35%]">
                        <p class="text-[50px] text-[#35B8BE]">Order online with our simple checkout.</p>
                        <p class="text-lg text-[#546285] mt-6 mb-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                        <button class="text-white text-lg bg-[#35B8BE] mb-10 py-4 px-8 rounded-lg">See our FAQ</button>
                    </div>
                </div>
            </section>

            <section class="bg-[#F5FBFC] clip_path2 mt-[120px]">
                <div class="container mx-auto w-full h-full flex items-center justify-around pt-24 pb-48">
                    <div class="w-[35%]">
                        <p class="text-[50px] text-[#35B8BE]">Call our store and takeaway when it suits you best.</p>
                        <p class="text-lg text-[#546285] mt-6 mb-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                        <button class="text-white text-lg bg-[#35B8BE] mb-10 py-4 px-8 rounded-lg">Ph. +61 233 2333</button>
                    </div>
                    <div class="w-1/3">
                        <img src="<?php bloginfo('template_url'); ?>/imgs/food2.png" alt="">
                    </div>
                </div>
            </section>

            <section class="my-11">
                <div class="container mx-auto flex items-stretch justify-around">
                    <aside>
                        <img src="<?php bloginfo('template_url'); ?>/imgs/big_food.png" alt="">
                    </aside>
                    <aside class="bg-[#35B8BE] w-1/2 flex justify-center flex-col px-24">
                        <p class="text-white text-[50px] mb-14"><span class="text-[#1B9097]">Support </span>good food <br>and local business.</p>
                        <button class="bg-white rounded-lg text-[#35B8BE] py-5 px-8 float-left w-fit">Order Now</button>
                    </aside>
                </div>
            </section>
        </main>

	<?php endwhile;

	sp_get_the_pagination();

endif; 

get_footer();