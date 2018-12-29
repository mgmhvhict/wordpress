<?php

return array(

    // image
    'image' =>  array(
	    'fashion1' => 'http://jegtheme.com/asset/jnews/demo/default/fashion1.jpg',
	    'fashion2' => 'http://jegtheme.com/asset/jnews/demo/default/fashion2.jpg',
        'logo' => 'http://jegtheme.com/asset/jnews/demo/classic/logo.png',
        'logo2x' => 'http://jegtheme.com/asset/jnews/demo/classic/logo@2x.png',
        'ad_300x250' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x250.jpg',
        'ad_345x345' => 'http://jegtheme.com/asset/jnews/demo/default/ad_345x345.jpg',
        'ad_300x600' => 'http://jegtheme.com/asset/jnews/demo/default/ad_300x600.jpg',
        'ad_970x90' => 'http://jegtheme.com/asset/jnews/demo/default/ad_970x90.png'
    ),

    // create taxonomy
    'taxonomy' => array(
        'category' => array(
            'beauty' =>
                array(
                    'title' =>'Beauty',
                    'description' => ''
                ),
            'diy' =>
                array(
                    'title' =>'DIY',
                    'description' => ''
                ),
            'fashion' =>
                array(
                    'title' =>'Fashion',
                    'description' => ''
                ),
            'lifestyle' =>
                array(
                    'title' =>'Lifestyle',
                    'description' => ''
                ),
            'travel' =>
                array(
                    'title' =>'Travel',
                    'description' => ''
                ),

        ),

        'post_tag' => array(
            '2018-blog-theme' => array(
                'title' => '2018 Blog Theme'
            ),
            'classic-blog' => array(
	            'title' => 'Classic Blog'
            ),
            'diy-fashion' => array(
	            'title' => 'DIY Fashion'
            ),
            'download' => array(
	            'title' => 'Download'
            ),
            'featured' => array(
	            'title' => 'Featured'
            ),
            'my-adventure' => array(
	            'title' => 'My Adventure'
            ),
            'tips' => array(
	            'title' => 'Tips'
            ),
            'life' => array(
	            'title' => 'Life'
            ),
            'wordpress-blog-theme' => array(
	            'title' => 'WordPress Blog Theme'
            ),
        )
    ),

    // post & page
    'post' => array(
	    'preparing-gears-for-the-journey' => array(
		    'title' => "Preparing Gears for The Journey",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'diy,lifestyle,travel',
			    'post_tag' => 'classic-blog,featured,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:lifestyle:id}}')
		    )
	    ),
	    'exit-from-the-pack' => array(
		    'title' => "Exit From The Pack",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'beauty,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,classic-blog,featured,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:lifestyle:id}}')
		    )
	    ),
	    'nothing-left-but-pieces-of-you' => array(
		    'title' => "Nothing Left But Pieces of You",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'beauty,diy,fashion',
			    'post_tag' => '2018-blog-theme,classic-blog,featured,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:fashion:id}}')
		    )
	    ),
	    'coffee-to-start-the-day' => array(
		    'title' => "Coffee to Start The Day",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'diy,travel',
			    'post_tag' => '2018-blog-theme,featured,tips,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:beauty:id}}')
		    )
	    ),
	    'the-best-cafe-in-town' => array(
		    'title' => "The Best Cafe in Town",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'fashion,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,classic-blog,diy-fashion,download,life,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),
	    'just-my-imagination' => array(
		    'title' => "Just My Imagination",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'beauty,diy,lifestyle',
			    'post_tag' => '2018-blog-theme,classic-blog,featured,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:beauty:id}}')
		    )
	    ),
	    'beauty-of-the-mountain' => array(
		    'title' => "Beauty of The Mountain",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'fashion,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,diy-fashion,download,life,tips,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),
	    'sitting-in-the-riverside' => array(
		    'title' => "Sitting in The Riverside",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'fashion,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,classic-blog,diy-fashion,download,featured,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),
	    'one-piece-swimsuits-for-summer' => array(
		    'title' => "One-Piece Swimsuits for Summer",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'beauty,diy,fashion',
			    'post_tag' => '2018-blog-theme,diy-fashion,download,featured,life,my-adventure'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:fashion:id}}')
		    )
	    ),
	    'hiding-the-beauty' => array(
		    'title' => "Hiding The Beauty",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'beauty,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,classic-blog,diy-fashion,my-adventure,tips,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),
	    'start-journey-get-lost-and-fun' => array(
		    'title' => "Start Journey, Get Lost and Fun",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'fashion,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,diy-fashion,featured,life,my-adventure,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:lifestyle:id}}')
		    )
	    ),
	    'valentines-outfit-ideas' => array(
		    'title' => "Valentine's Outfit Ideas",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'beauty,diy,fashion',
			    'post_tag' => '2018-blog-theme,classic-blog,featured,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:beauty:id}}')
		    )
	    ),
	    'why-moving-to-a-big-city' => array(
		    'title' => "Why Moving to A Big City",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'beauty,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,diy-fashion,featured,life,my-adventure,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:lifestyle:id}}')
		    )
	    ),
	    'plan-a-trip-for-summer' => array(
		    'title' => "Plan A Trip for Summer",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'beauty,diy,travel',
			    'post_tag' => '2018-blog-theme,diy-fashion,featured,life,my-adventure,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),
	    'the-search-for-serenity' => array(
		    'title' => "The Search for Serenity",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'fashion,travel',
			    'post_tag' => 'download,featured,life,my-adventure,tips'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:fashion:id}}')
		    )
	    ),
	    'my-personal-reading-list' => array(
		    'title' => "My Personal Reading List",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'diy,lifestyle,travel',
			    'post_tag' => '2018-blog-theme,diy-fashion,featured,life,my-adventure,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),
	    'just-try-to-be-yourself' => array(
		    'title' => "Just Try To Be Yourself",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'fashion',
			    'post_tag' => '2018-blog-theme,classic-blog,diy-fashion,download,my-adventure,tips'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:fashion:id}}')
		    )
	    ),
	    'beach-vibes-only' => array(
		    'title' => "Beach Vibes Only",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'diy,travel',
			    'post_tag' => 'classic-blog,diy-fashion,download,life,my-adventure,tips'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category::id}}')
		    )
	    ),
	    'get-lost-in-wheat-fields' => array(
		    'title' => "Get Lost in Wheat Fields",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'beauty,lifestyle,travel',
			    'post_tag' => 'classic-blog,download,featured,life,my-adventure,tips'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:lifestyle:id}}')
		    )
	    ),
	    'summer-collection-outfits' => array(
		    'title' => "Summer Collection Outfits",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'fashion,lifestyle',
			    'post_tag' => 'classic-blog,diy-fashion,download,featured,life,my-adventure'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:fashion:id}}')
		    )
	    ),
	    'only-the-strong-in-the-morning' => array(
		    'title' => "Only The Strong in The Morning",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'lifestyle,travel',
			    'post_tag' => 'classic-blog,diy-fashion,download,life,my-adventure,tips'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),
	    'the-empty-chair' => array(
		    'title' => "The Empty Chair",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'beauty,diy,fashion',
			    'post_tag' => '2018-blog-theme,classic-blog,diy-fashion,life,my-adventure,tips'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:beauty:id}}')
		    )
	    ),
	    'kekinian-floral-beach-shirt' => array(
		    'title' => "Kekinian Floral Beach Shirt",
		    'content' => 'post1.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion1',
		    'taxonomy' => array(
			    'category' => 'beauty,fashion,lifestyle',
			    'post_tag' => 'classic-blog,download,life,my-adventure,tips,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:fashion:id}}')
		    )
	    ),
	    'long-road-to-heaven' => array(
		    'title' => "Long Road to Heaven",
		    'content' => 'post2.txt',
		    'post_type' => 'post',
		    'featured_image' => 'fashion2',
		    'taxonomy' => array(
			    'category' => 'beauty,lifestyle,travel',
			    'post_tag' => 'classic-blog,download,life,my-adventure,tips,wordpress-blog-theme'
		    ),
		    'metabox' => array(
			    'jnews_primary_category' => array('id' => '{{category:travel:id}}')
		    )
	    ),

        // page
	    'contact' => array(
		    'title'     => 'Contact',
		    'content'   => 'contact.txt',
		    'post_type' => 'page',
		    'metabox' => array(
			    '_wp_page_template' => 'default',
			    '_wpb_shortcodes_custom_css' => '',
			    'jnews_single_page' => array(
				    'layout' => 'right-sidebar',
				    'sidebar' => 'contact',
				    'sticky_sidebar' => '0',
				    'show_post_meta' => '0',
				    'share_position' => '0'
			    )
		    )
	    ),
	    'about' => array(
		    'title'     => 'About Me',
		    'content'   => 'about.txt',
		    'post_type' => 'page',
		    'metabox' => array(
			    '_wp_page_template' => 'default',
			    '_wpb_shortcodes_custom_css' => '',
			    'jnews_single_page' => array(
				    'layout' => 'no-sidebar',
				    'sticky_sidebar' => '0',
				    'show_post_meta' => '0',
				    'share_position' => '0'
			    )
		    )
	    ),
    ),
        

    // menu location
    'menu_location' => array(
        'main-navigation' => array(
            'title' => 'Main Navigation',
            'location' => 'navigation'
        ),
        'footer-navigation' => array(
	        'title' => 'Footer Navigation',
	        'location' => 'footer_navigation'
        ),
    ),

    // menu it self
    'menu' => array(

        // Main Menu
        'fashion' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Fashion',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:fashion:id}}',
                'menu-item-status' => 'publish'
            ),
            'metabox' => array(
                'menu_item_jnews_mega_menu' => array(
                    'type' => 'category_1',
                    'category' => '{{category:fashion:id}}',
                    'number' => 7
                ),
            )
        ),
        'beauty' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Beauty',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:beauty:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'celebrity' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Celebrity',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:celebrity:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'diy' => array(
	        'location' => 'main-navigation',
	        'menu-item-data' => array(
		        'menu-item-title' => 'DIY',
		        'menu-item-type' => 'taxonomy',
		        'menu-item-object' => 'category',
		        'menu-item-object-id' => '{{category:diy:id}}',
		        'menu-item-status' => 'publish'
	        )
        ),
        'lifestyle' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Lifestyle',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:lifestyle:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'travel' => array(
            'location' => 'main-navigation',
            'menu-item-data' => array(
                'menu-item-title' => 'Travel',
                'menu-item-type' => 'taxonomy',
                'menu-item-object' => 'category',
                'menu-item-object-id' => '{{category:travel:id}}',
                'menu-item-status' => 'publish'
            )
        ),
        'about' => array(
	        'location' => 'main-navigation',
	        'menu-item-data' => array(
		        'menu-item-title' => 'About Me',
		        'menu-item-type' => 'post_type',
		        'menu-item-object' => 'page',
		        'menu-item-object-id' => '{{post:about:id}}',
		        'menu-item-status' => 'publish'
	        )
        ),
        'contact' => array(
	        'location' => 'main-navigation',
	        'menu-item-data' => array(
		        'menu-item-title' => 'Contact',
		        'menu-item-type' => 'post_type',
		        'menu-item-object' => 'page',
		        'menu-item-object-id' => '{{post:contact:id}}',
		        'menu-item-status' => 'publish'
	        )
        ),

	    // Footer Menu
        'landing' => array(
	        'location' => 'footer-navigation',
	        'menu-item-data' => array(
		        'menu-item-title' => 'Landing Page',
		        'menu-item-type' => 'custom',
		        'menu-item-url' => 'https://jnews.io/landing/',
		        'menu-item-status' => 'publish'
	        )
        ),
        'buy' => array(
	        'location' => 'footer-navigation',
	        'menu-item-data' => array(
		        'menu-item-title' => 'Buy JNews',
		        'menu-item-type' => 'custom',
		        'menu-item-url' => 'https://themeforest.net/item/jnews-wordpress-blog-news-magazine-newspaper-theme/20566392?ref=jegtheme&license=regular&open_purchase_for_item_id=20566392',
		        'menu-item-status' => 'publish'
	        )
        ),
        'about-1' => array(
	        'location' => 'footer-navigation',
	        'menu-item-data' => array(
		        'menu-item-title' => 'About Me',
		        'menu-item-type' => 'post_type',
		        'menu-item-object' => 'page',
		        'menu-item-object-id' => '{{post:about:id}}',
		        'menu-item-status' => 'publish'
	        )
        ),
        'contact-1' => array(
	        'location' => 'footer-navigation',
	        'menu-item-data' => array(
		        'menu-item-title' => 'Contact',
		        'menu-item-type' => 'post_type',
		        'menu-item-object' => 'page',
		        'menu-item-object-id' => '{{post:contact:id}}',
		        'menu-item-status' => 'publish'
	        )
        ),
    ),

    'widget_position' => array(
        'Contact',
    ),

    'widget' => array(
        'widget.json',
    ),

    'customizer' => array(
        'style.json',
    ),

    'plugin' => array(
        'jnews-essential',
        'jnews-gallery',
        'jnews-instagram',
        'jnews-jsonld',
        'jnews-meta-header',
        'jnews-social-login',
        'jnews-social-share',
        'jnews-view-counter',
        'mailchimp-for-wp'
    )

);