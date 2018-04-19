<?php

//Add all custom functions, hooks, filters, ajax etc here

include('functions/start.php');

include('functions/clean.php');

//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          background-size: 227px 85px !important;
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
		    </style>';
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Global Site Settings',
		'menu_title'	=> 'Global Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ab3d6d3e2822',
	'title' => 'Contact Section',
	'fields' => array(
		array(
			'key' => 'field_5ab3d6d77d7b5',
			'label' => 'Cotnact Section Title',
			'name' => 'contact_section_title',
			'type' => 'text',
			'instructions' => 'Enter a title for the contact section at the bottom of the site. This will house your physical address, phone number, etc. The title should have something to do with contacting the subject of the website. Text is limited to 20 characters including spaces.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 20,
		),
		array(
			'key' => 'field_5abd461b08ccf',
			'label' => 'Cotnact Form Title',
			'name' => 'contact_form_title',
			'type' => 'text',
			'instructions' => 'Enter text to display overtop of your contact form. This should suggest that the user sends you an email or signs up for your email list, whichever is relevant. Text is limited to 32 characters including spaces.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 32,
		),
		array(
			'key' => 'field_5ab3d6e47d7b6',
			'label' => 'Address Line 1',
			'name' => 'address_line_1',
			'type' => 'text',
			'instructions' => 'Enter the first line of your address.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab3eca30b8e8',
			'label' => 'Address Line 2',
			'name' => 'address_line_2',
			'type' => 'text',
			'instructions' => 'Enter the second line of your address.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab3d76d7d7b7',
			'label' => 'Phone Number',
			'name' => 'phone_number',
			'type' => 'text',
			'instructions' => 'Enter the phone number you would like to display.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab3d77a7d7b8',
			'label' => 'Email Address',
			'name' => 'email_address',
			'type' => 'text',
			'instructions' => 'Enter the email address you would like to display.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5abbffcc1d191',
			'label' => 'Contact Form Shortcode',
			'name' => 'contact_form_shortcode',
			'type' => 'text',
			'instructions' => 'Paste in the shortcode for the footer\'s contact form. This will be generated by Mailchimp for WP, or Contact Form 7, depending on the site\'s spec. Once this is entered, it is recommended to make no changes to it.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5a947c89c08a9',
			'label' => 'Footer Social Media Links',
			'name' => 'social_nav',
			'type' => 'repeater',
			'instructions' => 'Choose which buttons you would like to display for social media in the footer\'s contact section. For each button, choose an icon and enter a URL the icon should link to. For example, choose a Yelp icon and paste in the link to your business\'s Yelp page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 6,
			'layout' => 'table',
			'button_label' => 'Add Social Icon',
			'sub_fields' => array(
				array(
					'key' => 'field_5a947cbec08aa',
					'label' => 'Social Icon',
					'name' => 'social_icon',
					'type' => 'radio',
					'instructions' => 'Choose which icon should be displayed',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'fab fa-facebook' => 'Facebook',
						'fab fa-instagram' => 'Instagram',
						'fab fa-twitter' => 'Twitter',
						'fab fa-youtube' => 'YouTube',
						'fab fa-yelp' => 'Yelp',
						'fab fa-linkedin' => 'LinkedIn',
						'fab fa-google-plus-g' => 'Google+',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_5a947d13c08ab',
					'label' => 'Social URL',
					'name' => 'social_url',
					'type' => 'text',
					'instructions' => 'Paste a URL for this icon to link to.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5a6662881c713',
	'title' => 'Global Site Options',
	'fields' => array(
		array(
			'key' => 'field_5a6662f1584d8',
			'label' => 'Site Logo',
			'name' => 'site_logo',
			'type' => 'image',
			'instructions' => 'Choose an image for the site\'s logo. This will be displayed in the navigation bar at the top left.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5ad4ff2e9c367',
			'label' => 'Font Pairing',
			'name' => 'font_pairing',
			'type' => 'select',
			'instructions' => 'Select which font pairing is right for your site.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				1 => 'Pairing 1 - Nunito Sans and Merriweather',
				2 => 'Pairing 2 - Montserrat and Playfair Display',
				3 => 'Pairing 3 - Ubuntu and Zilla Slab',
				4 => 'Pairing 4 - IBM Plex Serif and Merriweather',
				5 => 'Pairing 5 - Muli and Raleway',
				6 => 'Pairing 6 - Zilla Slab and Open Sans',
			),
			'default_value' => array(
				0 => 1,
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ab3f6df5cde0',
			'label' => 'Primary Color',
			'name' => 'primary_color',
			'type' => 'color_picker',
			'instructions' => 'Enter the site\'s primary color. Once this is entered correctly, it is recommended to make no changes.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#C36256',
		),
		array(
			'key' => 'field_5abd0f348d271',
			'label' => 'Secondary Color',
			'name' => 'secondary_color',
			'type' => 'color_picker',
			'instructions' => 'Enter the site\'s secondary color. Once this is entered correctly, it is recommended to make no changes.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#2F4858',
		),
		array(
			'key' => 'field_5abd2ce6553c1',
			'label' => 'Tertiary Color',
			'name' => 'tertiary_color',
			'type' => 'color_picker',
			'instructions' => 'Enter the site\'s tertiary color. Once this is entered correctly, it is recommended to make no changes.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#895EBD',
		),
		array(
			'key' => 'field_5ab41edb152db',
			'label' => 'Primary Font Code',
			'name' => 'primary_font_code',
			'type' => 'text',
			'instructions' => 'Enter the site\'s primary font code. Once this is entered correctly, it is recommended to make no changes.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ab41ee7152dc',
			'label' => 'Secondary Font Code',
			'name' => 'secondary_font_code',
			'type' => 'text',
			'instructions' => 'Enter the site\'s secondary font code. Once this is entered correctly, it is recommended to make no changes.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ac62076db1eb',
			'label' => 'Google Analytics Code',
			'name' => 'google_analytics_code',
			'type' => 'text',
			'instructions' => 'Paste in the code provided by Google Analytics if you want to use this service. If left blank, Google Analytics will not be used on the site. If this field is filled correctly, it is recommended to not edit it unless you want to switch the site to a different Google Analytics account.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ac620b4db1ec',
			'label' => 'Google Sitemap Verification',
			'name' => 'google_sitemap_verification',
			'type' => 'text',
			'instructions' => 'Paste in code for Google Sitemap Verification. If you do not wish to use this service or if you wish to verify in a different way, this field can be left blank. If this field is filled correctly, it is recommended to not edit it.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ac62124db1ed',
			'label' => 'Bing Sitemap Verification',
			'name' => 'bing_sitemap_verification',
			'type' => 'text',
			'instructions' => 'Paste in code provided by Bing for Bing Sitemap Verification. If you wish to not use this service or if you wish to verify with a different method, this field may be left blank. If this field is filled correctly, it is recommended to not edit it.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ab2b89a2a1f3',
	'title' => 'Panels',
	'fields' => array(
		array(
			'key' => 'field_5ab2c51f28bb0',
			'label' => 'Panels',
			'name' => 'panels',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Panel',
			'sub_fields' => array(
				array(
					'key' => 'field_5ab2c53528bb1',
					'label' => 'Panel Type',
					'name' => 'panel_type',
					'type' => 'select',
					'instructions' => 'Select Panel Type',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'intro' => 'Intro Panel',
						'cards' => 'Cards Panel',
						'wysiwyg' => 'Text Panel',
					),
					'default_value' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5ab3fad321445',
					'label' => 'Panel ID',
					'name' => 'panel_id',
					'type' => 'text',
					'instructions' => 'Create an ID for this panel from alphanumeric characters and no capitals (a-z0-9). This will allow you to add an item to the navigation to scroll to this panel. To create the navigation link, go to Appearance > Menus, select "main_nav," add a Custom Link, and paste this panel\'s ID into the "href" field, adding a pound sign at the beginning. Name the navigation item whatever you would like. Example of a valid panel ID: panel1. Example of link to panel1: #panel1.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'id-goes-here',
					'prepend' => '#',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ab2c5b628bb2',
					'label' => 'Main Blurb',
					'name' => 'main_blurb',
					'type' => 'text',
					'instructions' => 'Enter text to be displayed as the large main callout for this panel. Text is limited to 50 characters including spaces.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ab2c53528bb1',
								'operator' => '==',
								'value' => 'intro',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => 50,
				),
				array(
					'key' => 'field_5ab2c5db28bb3',
					'label' => 'Intro text',
					'name' => 'intro_text',
					'type' => 'wysiwyg',
					'instructions' => 'Enter text to be used as the description in the welcome section (first panel) of the site. This can elaborate on the main blurb, or provide more important information about the subject of the website. Text is recommended to be 900 characters, or two full paragraphs, or less.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ab2c53528bb1',
								'operator' => '==',
								'value' => 'intro',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'visual',
					'toolbar' => 'basic',
					'media_upload' => 0,
					'delay' => 0,
				),
				array(
					'key' => 'field_5ab2c64bef0ac',
					'label' => 'CTA Title',
					'name' => 'cta_title',
					'type' => 'text',
					'instructions' => 'If you would like this panel to have a button below the panel title, enter the text this button should display. Text is limited to 14 characters including spaces.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ab2c53528bb1',
								'operator' => '==',
								'value' => 'intro',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => 14,
				),
				array(
					'key' => 'field_5ab2c685ef0ad',
					'label' => 'CTA Link',
					'name' => 'cta_link',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ab2c53528bb1',
								'operator' => '==',
								'value' => 'intro',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ab4126f727bf',
					'label' => 'Panel Background Image',
					'name' => 'panel_background_image',
					'type' => 'image',
					'instructions' => 'Choose a background image for this card. If none is selected, the background will be the theme\'s Secondary Color.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ab2c53528bb1',
								'operator' => '==',
								'value' => 'cards',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5ab2bfd2ba782',
					'label' => 'Cards Panel',
					'name' => 'cards',
					'type' => 'repeater',
					'instructions' => 'Click \'Add Card\' to create a new card. Each card has an image, title, blurb, and optional URL the card can link to.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ab2c53528bb1',
								'operator' => '==',
								'value' => 'cards',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 4,
					'layout' => 'block',
					'button_label' => 'Add Card',
					'sub_fields' => array(
						array(
							'key' => 'field_5ab2bff1ba783',
							'label' => 'Card Image',
							'name' => 'card_image',
							'type' => 'image',
							'instructions' => 'Choose the image for this card. Recommended images are icons and images with content that will be visible at relatively small sizes.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5ab2c017ba784',
							'label' => 'Card Title',
							'name' => 'card_title',
							'type' => 'text',
							'instructions' => 'Create a title for this card. Text is limited to 25 characters including spaces.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5ab2c021ba785',
							'label' => 'Card Blurb',
							'name' => 'card_blurb',
							'type' => 'text',
							'instructions' => 'Enter a blurb, or description text, for this card. This text should be relevant to the card\'s other content, including its image and title. Text is limited to 265 characters including spaces.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => 265,
						),
						array(
							'key' => 'field_5ab2c02cba786',
							'label' => 'Card Link (Optional)',
							'name' => 'card_link',
							'type' => 'text',
							'instructions' => 'Enter a URL for the card to link to',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5ab2c05aa47ef',
					'label' => 'Text Panel',
					'name' => 'text_panel',
					'type' => 'repeater',
					'instructions' => 'This panel allows for custom text and content. Click \'Add Column\' to create a column for your content. For two columns, add another. Columns are limited to 2. When you have two columns, the top text box will be the left column, and the bottom text box will be the right column. Total content for both columns combined should be less than 8 paragraphs and 2 small images.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ab2c53528bb1',
								'operator' => '==',
								'value' => 'wysiwyg',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 2,
					'layout' => 'block',
					'button_label' => 'Add Column',
					'sub_fields' => array(
						array(
							'key' => 'field_5ab2c084a47f0',
							'label' => 'Content Column',
							'name' => 'content_column',
							'type' => 'wysiwyg',
							'instructions' => 'Enter column content.',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ab3d65c79c3c',
	'title' => 'Welcome Gate',
	'fields' => array(
		array(
			'key' => 'field_5ab3d6657b86f',
			'label' => 'Statement',
			'name' => 'statement',
			'type' => 'text',
			'instructions' => 'Enter text to be used as the main callout in the welcome section (first panel) of the site. This should say something important about the subject of the website. This is limited to 46 characters max including spaces.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 46,
		),
		array(
			'key' => 'field_5ab3d6867b870',
			'label' => 'Main Blurb',
			'name' => 'main_blurb',
			'type' => 'text',
			'instructions' => 'Enter text to be used as the description in the welcome section (first panel) of the site. This can elaborate on the main blurb, or provide more important information about the subject of the website. Text is limited to 600 characters or less including spaces.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 600,
		),
		array(
			'key' => 'field_5ab3d6907b871',
			'label' => 'Background Image',
			'name' => 'background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

?>
