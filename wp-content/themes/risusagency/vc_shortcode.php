<?php
// Blog & News

if
(function_exists('vc_map'))
{
	vc_map( array(

			"name" => esc_html__("DC Blog And News", 'risusagency'),

			"base" => "blogs",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__('Number', 'risusagency'),
					"param_name" => "num",
					"description" => esc_html__('Enter Number of posts to Show.', 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__('Text Limit', 'risusagency'),
					"param_name" => "text_limit",
					"description" => esc_html__('Enter text limit for posts to Show.', 'risusagency')
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( 'Category', 'risusagency'),
					"param_name" => "cat",
					"value" => array_flip( (array)risusagency_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
					"description" => esc_html__( 'Choose Category.', 'risusagency')
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Order By", 'risusagency'),
					"param_name" => "sort",
					'value' => array_flip( array('select'=>esc_html__('Select Options', 'risusagency'), 'date'=>esc_html__('Date', 'risusagency'), 'title'=>esc_html__('Title', 'risusagency') , 'name'=>esc_html__('Name', 'risusagency') , 'author'=>esc_html__('Author', 'risusagency'), 'comment_count' =>esc_html__('Comment Count', 'risusagency'), 'random' =>esc_html__('Random', 'risusagency') ) ),
					"description" => esc_html__("En<em></em>ter the sorting order.", 'risusagency')
				),
				array(
					"type" => "dropdown",

					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Order", 'risusagency'),
					"param_name" => "order",
					'value' => array_flip(array('select'=>esc_html__('Select Options', 'risusagency'), 'ASC'=>esc_html__('Ascending', 'risusagency'), 'DESC'=>esc_html__('Descending', 'risusagency') ) ),
					"description" => esc_html__("Enter the sorting order.", 'risusagency')
				),
			)


		)

	);
}


// Blog List

if
(function_exists('vc_map'))
{
	vc_map( array(

			"name" => esc_html__("Blog List", 'risusagency'),

			"base" => "blog_list",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__('Number', 'risusagency'),
					"param_name" => "num",
					"description" => esc_html__('Enter Number of posts to Show.', 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__('Text Limit', 'risusagency'),
					"param_name" => "text_limit",
					"description" => esc_html__('Enter text limit for posts to Show.', 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__('Read More Button Link', 'risusagency'),
					"param_name" => "link",
					"description" => esc_html__('Enter the read more button link.', 'risusagency')
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__( 'Category', 'risusagency'),
					"param_name" => "cat",
					"value" => array_flip( (array)risusagency_get_categories( array( 'taxonomy' => 'category', 'hide_empty' => FALSE ), true ) ),
					"description" => esc_html__( 'Choose Category.', 'risusagency')
				),
				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Order By", 'risusagency'),
					"param_name" => "sort",
					'value' => array_flip( array('select'=>esc_html__('Select Options', 'risusagency'), 'date'=>esc_html__('Date', 'risusagency'), 'title'=>esc_html__('Title', 'risusagency') , 'name'=>esc_html__('Name', 'risusagency') , 'author'=>esc_html__('Author', 'risusagency'), 'comment_count' =>esc_html__('Comment Count', 'risusagency'), 'random' =>esc_html__('Random', 'risusagency') ) ),
					"description" => esc_html__("En<em></em>ter the sorting order.", 'risusagency')
				),
				array(
					"type" => "dropdown",

					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Order", 'risusagency'),
					"param_name" => "order",
					'value' => array_flip(array('select'=>esc_html__('Select Options', 'risusagency'), 'ASC'=>esc_html__('Ascending', 'risusagency'), 'DESC'=>esc_html__('Descending', 'risusagency') ) ),
					"description" => esc_html__("Enter the sorting order.", 'risusagency')
				),
			)


		)

	);
}



//Custom Heading
if
(function_exists('vc_map'))
{



	vc_map( array(



			"name"      => esc_html__("DC Heading", 'risusagency'),



			"base"      => "heading",



			"class"     => "",



			"icon" => "icon-st",



			"category"  => 'Content',



			"params"    => array(



				array(



					"type"      => "textarea",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Text", 'risusagency'),



					"param_name"=> "text",



					"value"     => "",



					"description" => esc_html__("Heading", 'risusagency')



				),

				array(



					"type" => "dropdown",



					"heading" => esc_html__('Element Tag', 'risusagency'),



					"param_name" => "tag",



					"value" => array(

						esc_html__('h1', 'risusagency') => 'h1',

						esc_html__('h2', 'risusagency') => 'h2',



						esc_html__('h3', 'risusagency') => 'h3',



						esc_html__('h4', 'risusagency') => 'h4',



						esc_html__('h5', 'risusagency') => 'h5',



						esc_html__('h6', 'risusagency') => 'h6',



						esc_html__('p', 'risusagency')  => 'p',



						esc_html__('div', 'risusagency') => 'div'

					),

					"description" => esc_html__("Section Element Tag", 'risusagency'),

				),

				array(

					"type" => "dropdown",

					"heading" => esc_html__('Text Align', 'risusagency'),

					"param_name" => "align",

					"value" => array(

						esc_html__('left', 'risusagency') => 'left',

						esc_html__('right', 'risusagency') => 'right',

						esc_html__('center', 'risusagency') => 'center',

						esc_html__('justify', 'risusagency') => 'justify',

					),



					"description" => esc_html__("Section Overlay", 'risusagency'),



				),

				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Font Size", 'risusagency'),



					"param_name"=> "size",



					"value"     => "",



					"description" => esc_html__("Ex: 14px", 'risusagency')



				),

				array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color", 'risusagency'),
					"param_name"=> "color",
					"value"     => "",
					"description" => esc_html__("", 'risusagency')
				),

				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Margin Bottom", 'risusagency'),



					"param_name"=> "bot",



					"value"     => "",



					"description" => esc_html__("", 'risusagency')



				),

				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Class Extra", 'risusagency'),



					"param_name"=> "class",



					"value"     => "",



					"description" => esc_html__("", 'risusagency')



				),
				
				array(



					"type"      => "textfield",



					"holder"    => "div",



					"class"     => "",



					"heading"   => esc_html__("Line Height", 'risusagency'),



					"param_name"=> "line_height",



					"value"     => "",



					"description" => esc_html__("", 'risusagency')



				),

			)));



}

//Special Heading
if
(function_exists('vc_map'))
{
vc_map( array(
"name"      => esc_html__("Special Heading", 'risusagency'),
"base"      => "sheading",
"class"     => "",
"icon" => "icon-st",
"category"  => 'Content',
"params"    => array(
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Text", 'risusagency'),
					"param_name"=> "subhead",
					"value"     => "",
					"description" => esc_html__("Sub Heading", 'risusagency')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Sub Head Font Size", 'risusagency'),
					"param_name"=> "subsize",
					"value"     => "",
					"description" => esc_html__("Ex: 14px", 'risusagency')
					),
					array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color", 'risusagency'),
					"param_name"=> "subcolor",
					"value"     => "",
					"description" => esc_html__("Subhead Color", 'risusagency')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Text", 'risusagency'),
					"param_name"=> "mainhead",
					"value"     => "",
					"description" => esc_html__("Main Heading", 'risusagency')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Main Head Font Size", 'risusagency'),
					"param_name"=> "mainsize",
					"value"     => "",
					"description" => esc_html__("Ex: 14px", 'risusagency')
					),
					array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Main Color", 'risusagency'),
					"param_name"=> "maincolor",
					"value"     => "",
					"description" => esc_html__("Main head Color", 'risusagency')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Text", 'risusagency'),
					"param_name"=> "paragraph",
					"value"     => "",
					"description" => esc_html__("Paragraph Heading", 'risusagency')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Paragraph Font Size", 'risusagency'),
					"param_name"=> "parasize",
					"value"     => "",
					"description" => esc_html__("Ex: 14px", 'risusagency')
					),
					array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color", 'risusagency'),
					"param_name"=> "paracolor",
					"value"     => "",
					"description" => esc_html__("Paragraph Color", 'risusagency')
					),
					array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Margin Bottom", 'risusagency'),
					"param_name"=> "mbottom",
					"value"     => "",
					"description" => esc_html__("Ex: 70px", 'risusagency')
					),

)));
}

/*-----------------------------------------------------------------------------------*/
/* Map to VC - Counter
/*-----------------------------------------------------------------------------------*/
if
(function_exists('vc_map'))
{
	vc_map( array(
		"name"					=>esc_html__( "Counter", 'risusagency' ),
		"description"			=>esc_html__( "Counter", 'risusagency' ),
		"base"					=> "risusagency_counter",
		'category'				=> "Content",
		"icon"					=> "icon-wpb-risusagency-counter",
		"params"				=> array(
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Number", 'risusagency' ),
				"param_name"	=> "number",
				"value"			=> "197",
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Title", 'risusagency' ),
				"param_name"	=> "title",
				"value"			=> "",
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Color", 'risusagency' ),
				"param_name"	=> "color",
				"value"			=> "#666666",
			),
			array(
				"type"			=> "textarea_html",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Content", 'risusagency' ),
				"param_name"	=> "content",
				"value"			=> "Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.",
				"group"	=>esc_html__( 'Content', 'risusagency' ),
			),
		)
	) );
}


/*-----------------------------------------------------------------------------------*/
/* Map to VC - Iconbox
/*-----------------------------------------------------------------------------------*/
if
(function_exists('vc_map'))
{
	vc_map( array(
		"name"					=> esc_html__( "Iconbox", 'risusagency' ),
		"description"			=> esc_html__( "Box with Icon and Content.", 'risusagency' ),
		"base"					=> "risusagency_iconbox",
		'category'				=> "Content",
		"icon" 					=> "icon-st",
		"params"				=> array(
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Icon", 'risusagency' ),
				"param_name"	=> "icon",
				"value"			=> "fa-phone",
				"description"	=> esc_html__( "Can be any Fontawesome Icon (fa-phone) or Simple Line Icon (sl-users)", 'risusagency' ),
			),
			array(
				"type"			=> "attach_image",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Image Alternative", 'risusagency' ),
				"param_name"	=> "iconimg",
				"value"			=> "",
				"description"	=> esc_html__( "Select an image instead of using a Font Icon", 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Style", 'risusagency' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Icon next to Box style 1' => '1',
					'Icon next to Box style 2' => '2',
					'Icon next to Box style 3' => '4',
					'Icon above Box' => '3',
				),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Icon Color", 'risusagency' ),
				"param_name"	=> "iconcolor",
				"value"			=> array(
					'Accent Color' => 'accent',
					'Greyscale' => 'grey',
					'Custom Color' => 'custom',
				),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Color", 'risusagency' ),
				"param_name"	=> "customcolor",
				"value"			=> "",
				'dependency' => Array( 'element' => 'iconcolor', 'value' => Array('custom') ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Custom Class", 'risusagency' ),
				"param_name"	=> "class",
				"value"			=> "",
				"description"	=> esc_html__( "Use this field to add a custom class.", 'risusagency' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=> esc_html__( "Title", 'risusagency' ),
				"param_name"	=> "title",
				"value"			=> "",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Title Color", 'risusagency' ),
				"param_name"	=> "titlecolor",
				"value"			=> "",
				"description"	=> "Pick Title Text Color.",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
			
			array(
				"type"			=> "textarea_html",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Content", 'risusagency' ),
				"param_name"	=> "content",
				"value"			=> "Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Content Color", 'risusagency' ),
				"param_name"	=> "contentcolor",
				"value"			=> "",
				"description"	=> "Pick Content Text Color.",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=> esc_html__( "Iconbox Title/Button URL (links the complete iconbox to this url)", 'risusagency' ),
				"param_name"	=> "url",
				"value"			=> "",
				"description"	=> "Enter URL or leave empty. ",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=> esc_html__( "Iconbox Button Text ", 'risusagency' ),
				"param_name"	=> "buttontext",
				"value"			=> "",
				"description"	=> "Enter Button Text or leave empty.",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Button Text Color", 'risusagency' ),
				"param_name"	=> "buttontcolor",
				"value"			=> "",
				"description"	=> "Pick Button Text Color.",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Button Background Color", 'risusagency' ),
				"param_name"	=> "buttonbgcolor",
				"value"			=> "",
				"description"	=> "Pick Button Background Color.",
				"group"	=> esc_html__( 'Content', 'risusagency' ),
			),
		)
	) );
}




//Portfolio Filter
if(function_exists('vc_map')){
   vc_map( array(
   "name"      => __("DC Portfolio Filter", 'risusagency'),
   "base"      => "foliof",
   "class"     => "",
   "icon" => "icon-st",
   "category"  => 'Content',
   "params"    => array(
	   
	  array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=> esc_html__( "Icon Color", 'risusagency' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Style 1' => 'style1',
					'Style 2' => 'style2',
					'Style 3' => 'style3',
				),
			),

      array(
         "type"      => "textfield",
         "holder"    => "div",
         "class"     => "",
         "heading"   => __("Text Show All Portfolio", 'risusagency'),
         "param_name"=> "all",
         "value"     => "",
         "description" => __("Text Filter Show All Portfolio.", 'risusagency')
      ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number portfolio per page", 'risusagency' ),
         "param_name" => "num",
         "value" => "10",
         "description" => __("Enter Number Portfolio.", 'risusagency' )
      ), 
      
    )));
}

// Buttons

if
(function_exists('vc_map'))
{


	vc_map( array(

			"name" => esc_html__("DC Buttons", 'risusagency'),

			"base" => "button",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(


				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon", 'risusagency'),

					"param_name" => "icon",

					"value" => '',

					"description" => esc_html__("Ex: download. Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Button Text", 'risusagency'),

					"param_name" => "btntext",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Button Link", 'risusagency'),

					"param_name" => "btnlink",

					"value" => '',

					"description" => esc_html__("", 'risusagency')

				),
				array(
					"type" => "dropdown",
					"heading" => esc_html__('Style Button', 'risusagency'),
					"param_name" => "style",
					"value" => array(
						esc_html__('Select Style', 'risusagency') => 'no',
						esc_html__('Small', 'risusagency') => 'small',
						esc_html__('Medium', 'risusagency') => 'medium',
						esc_html__('Large', 'risusagency') => 'large',
						esc_html__('Small/Background: transparent', 'risusagency') => 'stransparent',
						esc_html__('Medium/Background: transparent', 'risusagency') => 'mtransparent',
						esc_html__('Large/Background: transparent', 'risusagency') => 'ltransparent',
						esc_html__('Large/Border/Transparent', 'risusagency') => 'lbtransparent',
						esc_html__('Small/White', 'risusagency') => 'swhite',
						esc_html__('Medium/White', 'risusagency') => 'mwhite',
						esc_html__('Large/White', 'risusagency') => 'lwhite',
						esc_html__('Small/dark', 'risusagency') => 'sdark',
						esc_html__('Medium/dark', 'risusagency') => 'mdark',
						esc_html__('Large/dark', 'risusagency') => 'ldark',

					),
					"description" => esc_html__("", 'risusagency'),
				),

			)
		));

}
// Blocqouter Solid

if
(function_exists('vc_map'))
{
	vc_map( array(
			"name"      => esc_html__("DC Blockquote Solid", 'risusagency'),
			"base"      => "blocquote",
			"class"     => "",
			"icon" => "icon-st",
			"category"=>'Content',
			"params"=>array(
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Title", 'risusagency'),
					"param_name" => "title",
					"value" => "",
					"description" => esc_html__("Title display in Blockquote Table.", 'risusagency')
				),
				array(
					"type" => "textarea",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Text ", 'risusagency'),
					"param_name" => "text",
					"value" => "",
					"description" => esc_html__("Text display in blocquote", 'risusagency')
				),


			)


		)

	);
}

// Pricing Table (use)
if
(function_exists('vc_map'))
{
	vc_map( array(
			"name" => esc_html__("DC Pricing Table", 'risusagency'),
			"base" => "pricingtable",
			"class" => "",
			"category" => 'Content',
			"icon" => "icon-st",
			"params" => array(
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Title Pricing", 'risusagency'),
					"param_name" => "title",
					"value" => "",
					"description" => esc_html__("Title display in Pricing Table.", 'risusagency')
				),
				
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Add Class", 'risusagency'),
					"param_name" => "class",
					"value" => "",
					"description" => esc_html__("Add extra class.", 'risusagency')
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Price Pricing", 'risusagency'),
					"param_name" => "price",
					"value" => "",
					"description" => esc_html__("Price display in Pricing Table.", 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Per Month", 'risusagency'),
					"param_name" => "month",
					"value" => "",
					"description" => esc_html__("Per Month display in Pricing Table.", 'risusagency')
				),
				array(
					"type" => "textarea_html",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Detail Pricing", 'risusagency'),
					"param_name" => "content",
					"value" => "",
					"description" => esc_html__("Content Pricing Table.", 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Label Button", 'risusagency'),
					"param_name" => "buttontext",
					"value" => "",
					"description" => esc_html__("Text display in button.", 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link Button", 'risusagency'),
					"param_name" => "link",
					"value" => "",
					"description" => esc_html__("Link in button, Leave a blank do not show.", 'risusagency')
				),

			)));
}

//Newsletters
if
(function_exists('vc_map'))
{

	vc_map( array(

			"name"      => esc_html__("DC Newsletters", 'risusagency'),

			"base"      => "newsletter_risusagency",

			"class"     => "",

			"icon" => "icon-st",

			"category"  => 'Content',

			"params"    => array(

				array(

					"type"      => "textfield",

					"holder"    => "div",

					"class"     => "",

					"heading"   => esc_html__("Button Submit", 'risusagency'),

					"param_name"=> "btntext",

					"value"     => "",

					"description" => esc_html__("", 'risusagency')

				),

			)));

}


//Call To Action

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Call To Action Box", 'risusagency'),

			"base" => "ctabox",

			"class" => "",

			"icon" => "icon-st",

			"category" => 'Content',

			"params" => array(

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Title Box", 'risusagency'),

					"param_name" => "title",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon 1", 'risusagency'),

					"param_name" => "icon1",

					"value" => "",

					"description" => esc_html__("Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Label Button 1", 'risusagency'),

					"param_name" => "btn1",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Link Button 1", 'risusagency'),

					"param_name" => "link1",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon 2", 'risusagency'),

					"param_name" => "icon2",

					"value" => "",

					"description" => esc_html__("Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Label Button 2", 'risusagency'),

					"param_name" => "btn2",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Link Button 2", 'risusagency'),

					"param_name" => "link2",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),

			)));

}

//Our Team

if
(function_exists('vc_map'))
{
	vc_map( array(
			"name" => esc_html__("DC Our Team", 'risusagency'),
			"base" => "team",
			"class" => "",
			"icon" => "icon-st",
			"category" => 'Content',
			"params" => array(
				array(
					"type" => "attach_image",
					"holder" => "div",
					"class" => "",
					"heading" => "Photo Member",
					"param_name" => "photo",
					"value" => "",
					"description" => esc_html__("", 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Name", 'risusagency'),
					"param_name" => "name",
					"value" => "",
					"description" => esc_html__("Member's Name", 'risusagency')
				),
				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Job", 'risusagency'),
					"param_name" => "job",
					"value" => "",
					"description" => esc_html__("Member's job.", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 1", 'risusagency'),
					"param_name"=> "icon1",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 1",
					"param_name"=> "url1",
					"value"     => "",
					"description" => esc_html__("Url.", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 2", 'risusagency'),
					"param_name"=> "icon2",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 2",
					"param_name"=> "url2",
					"value"     => "",
					"description" => esc_html__("Url.", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 3", 'risusagency'),
					"param_name"=> "icon3",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 3",
					"param_name"=> "url3",
					"value"     => "",
					"description" => esc_html__("Url.", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 4", 'risusagency'),
					"param_name"=> "icon4",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 4",
					"param_name"=> "url4",
					"value"     => "",
					"description" => esc_html__("Url.", 'risusagency')
				),
								array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 5", 'risusagency'),
					"param_name"=> "icon5",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 5",
					"param_name"=> "url5",
					"value"     => "",
					"description" => esc_html__("Url.", 'risusagency')
				),
								array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Icon 6", 'risusagency'),
					"param_name"=> "icon6",
					"value"     => "",
					"description" => esc_html__("EX: facebook, twitter,linkedin... Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')
				),
				array(
					"type"      => "textfield",
					"holder"    => "div",
					"class"     => "",
					"heading"   => "Url 6",
					"param_name"=> "url6",
					"value"     => "",
					"description" => esc_html__("Url.", 'risusagency')
				),
			)));
}


//Facts

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Facts Box", 'risusagency'),

			"base" => "facts",

			"class" => "",

			"icon" => "icon-st",

			"category" => 'Content',

			"params" => array(

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Icon", 'risusagency'),

					"param_name" => "icon",

					"value" => "",

					"description" => esc_html__("Find here: <a target='_blank' href='https://icomoon.io/#preview-free'>https://icomoon.io/#preview-free</a>", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Number", 'risusagency'),

					"param_name" => "number",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Title", 'risusagency'),

					"param_name" => "title",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
				array(
					"type"      => "colorpicker",
					"holder"    => "div",
					"class"     => "",
					"heading"   => esc_html__("Color Title", 'risusagency'),
					"param_name"=> "color",
					"value"     => "",
					"description" => esc_html__("", 'risusagency')
				),

				array(
					"type" => "dropdown",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Do You Want Border-Right?", 'risusagency'),
					"param_name" => "border",
					"value" => array(

						esc_html__('Select', 'risusagency') => 'yesno',

						esc_html__('No', 'risusagency') => 'no',

						esc_html__('Yes', 'risusagency') => 'yes',

					),
					"description" => esc_html__("", 'risusagency')
				),

			)));

}


//Clients Logo

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name"      => esc_html__("DC Clients Logo", 'risusagency'),

			"base"      => "logos",

			"class"     => "",

			"icon" => "icon-st",

			"category"  => 'Content',

			"params"    => array(

				array(

					"type" => "attach_images",

					"holder" => "div",

					"class" => "",

					"heading" => "Logo Client",

					"param_name" => "gallery",

					"value" => "",

					"description" => esc_html__("Note: Add link to <b>caption</b> image.", 'risusagency')

				),

			)));

}

//Slider(use)

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name"      => esc_html__("DC Slider", 'risusagency'),

			"base"      => "slider",

			"class"     => "",

			"icon" => "icon-st",

			"category"  => 'Content',

			"params"    => array(

				array(

					"type" => "attach_images",

					"holder" => "div",

					"class" => "",

					"heading" => "Slider Images",

					"param_name" => "gallery",

					"value" => "",

					"description" => esc_html__("Note: Add link to <b>caption</b> image.", 'risusagency')

				),


			)));

}

//Contact Address

if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Contact Address", 'risusagency'),

			"base" => "c-address",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(

					"type" => "attach_images",

					"holder" => "div",

					"class" => "",

					"heading" => "Upload Icon",

					"param_name" => "icon",

					"value" => "",

					"description" => esc_html__("Note: Upload Icon.", 'risusagency')

				),

				array(

					"type" => "textarea_html",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Content Box", 'risusagency'),

					"param_name" => "content",

					"value" => "",

					"description" => esc_html__("", 'risusagency')

				),
		)

		));

}

// Testimonials

if
(function_exists('vc_map'))
{



	vc_map( array(

			"name" => esc_html__("DC Testimonial", 'risusagency'),

			"base" => "testimonial",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Number Show", 'risusagency' ),
					"param_name" => "number",
					"value" => ''
				),
			)

		));

}

// Services

if
(function_exists('vc_map'))
{



	vc_map( array(

			"name" => esc_html__("DC Services", 'risusagency'),

			"base" => "services",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Number Show", 'risusagency' ),
					"param_name" => "number",
					"value" => ''
				),
			)

		));

}

//Social
if
(function_exists('vc_map'))
{


	vc_map( array(

			"name" => esc_html__("DC Social", 'risusagency'),

			"base" => "social",

			"class" => "",

			"category" => 'Content',

			"icon" => "icon-st",

			"params" => array(


				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link twitter", 'risusagency' ),
					"param_name" => "link1",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link github", 'risusagency' ),
					"param_name" => "link2",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link dribbble", 'risusagency' ),
					"param_name" => "link3",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link linkedin", 'risusagency' ),
					"param_name" => "link4",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link behance", 'risusagency' ),
					"param_name" => "link5",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link facebook", 'risusagency' ),
					"param_name" => "link6",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link instagram", 'risusagency' ),
					"param_name" => "link7",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link youtube", 'risusagency' ),
					"param_name" => "link8",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link skype", 'risusagency' ),
					"param_name" => "link9",
					"value" => ''
				),

				array(
					"type" => "textfield",
					"holder" => "div",
					"class" => "",
					"heading" => esc_html__("Link google", 'risusagency' ),
					"param_name" => "link10",
					"value" => ''
				),
			)

		));

}


/*-----------------------------------------------------------------------------------*/
/* Map to VC - Box - Imagebox Shortcode
/*-----------------------------------------------------------------------------------*/
function risusagency_imagebox_vc() {
	vc_map( array(
		"name"					=>esc_html__( "Imagebox", 'risusagency' ),
		"description"			=>esc_html__( "Box with Content and Button", 'risusagency' ),
		"base"					=> "risusagency_imagebox",
		'category'				=> "Content",
		"icon"					=> "icon-wpb-risusagency-imagebox",
		"params"				=> array(
			array(
				"type"			=> "attach_image",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Image", 'risusagency' ),
				"param_name"	=> "img",
				"value"			=> "",
				"description"	=>esc_html__( "If you want to use an Image you can upload it here.", 'risusagency' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Title", 'risusagency' ),
				"param_name"	=> "img_title",
				"value"			=> ""
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Link Image to this URL", 'risusagency' ),
				"param_name"	=> "url",
				"value"			=> "",
				"description"	=>esc_html__( "Enter URL or leave empty", 'risusagency' )
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Margin Bottom", 'risusagency' ),
				"param_name"	=> "margin_bot",
				"value"			=> "",
				"description"	=>esc_html__( "ex : 40px", 'risusagency' )
			),
			array(
				"type"			=> "textarea_html",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Content", 'risusagency' ),
				"param_name"	=> "content",
				"value"			=> "Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.",
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Style", 'risusagency' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Boxed' => '1',
					'Simple' => '2',
					'Boxed Content Left' => '3',
					'Simple Content Left' => '4',
				),
			),
		)
	) );
}
add_action( 'vc_before_init', 'risusagency_imagebox_vc' );



/*-----------------------------------------------------------------------------------*/
/* Map to VC - Divider
/*-----------------------------------------------------------------------------------*/
function risusagency_divider_vc() {
	vc_map( array(
		"name"					=>esc_html__( "Divider", 'risusagency' ),
		"description"			=>esc_html__( "Divider & Separator", 'risusagency' ),
		"base"					=> "risusagency_divider",
		'category'				=> "Structure",
		"icon"					=> "icon-wpb-risusagency-divider",
		"params"				=> array(
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Divider Style", 'risusagency' ),
				"param_name"	=> "style",
				"value"			=> array(
					'Thin Light Grey' => '1',
					'Dotted' => '2',
					'Line with Shadow' => '3',
					'Diagonal Lines' => '4',
					'Short Accent Color' => '5',
					'Short Dark Grey' => '6',
					'Dashed Line' => '7',
					'Centered Line with Icon' => '8',
					'Thin Light for dark Backgrounds' => '9',
				),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Margin", 'risusagency' ),
				"param_name"	=> "margin",
				"value"			=> "60px 0 60px 0",
				"description"	=>esc_html__( "Set Divider Margin - topmargin rightmargin bottommargin leftmargin", 'risusagency' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Icon", 'risusagency' ),
				"param_name"	=> "icon",
				"value"			=> "",
				"description"	=>esc_html__( "Can be any Fontawesome Icon (ie. fa-phone)", 'risusagency' ),
				'dependency' => Array( 'element' => 'style', 'value' => Array('8') ),
			),
		)
	) );
}
add_action( 'vc_before_init', 'risusagency_divider_vc' );

/*-----------------------------------------------------------------------------------*/
/* Map to VC - New Divider
/*-----------------------------------------------------------------------------------*/
function risusagency_newdivider_vc() {
	vc_map( array(
		"name" =>esc_html__( "New Divider", 'risusagency' ),
		"description" =>esc_html__( "Divider & Separator", 'risusagency' ),
		"base" => "risusagency_newdivider",
		"category" => 'Structure',
		"icon" => "icon-wpb-risusagency-divider",
		"params" => array(
			array(
				"type" => "dropdown",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Line Style",
				"param_name" => "style",
				"value" => array(
					"Solid" => "solid",
					"Dashed" => "dashed",
					"Dotted" => "dotted",
					"Transparent" => "transparent",
				),
				"description" => "",
			),
			array(
	            "type" => "colorpicker",
	            "admin_label" => false,
	            "class" => "",
	            "heading" => "Line Color",
	            "value" => "#999999",
	            "param_name" => "line_color",
	        ),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Width",
				"param_name" => "width",
				"value" => "100%",
				"save_value" => true,
				"description" => "Width of the separator. Can be px or %. Default: 100%",
			),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Thickness",
				"param_name" => "thickness",
				"value" => "1px",
				"save_value" => true,
				"description" => "Tickness of the separator. Default: 1px",
			),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Top Margin",
				"param_name" => "topmargin",
				"value" => "",
				"save_value" => true,
				"description" => "Top Margin. For example: 20px",
			),
			array(
				"type" => "textfield",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Bottom Margin",
				"param_name" => "bottommargin",
				"value" => "",
				"save_value" => true,
				"description" => "Top Margin. For example: 20px",
			),
			array(
				"type" => "dropdown",
				"admin_label"	=> false,
				"class" => "",
				"heading" => "Align",
				"param_name" => "align",
				"value" => array(
					"Center" => "center",
					"Left" => "left",
					"Right" => "right",
				),
				"description" => "",
			),
		)
	) );
}
add_action( 'vc_before_init', 'risusagency_newdivider_vc' );

/*-----------------------------------------------------------------------------------*/
/* Map to VC - Headline
/*-----------------------------------------------------------------------------------*/
function risusagency_headline_vc() {
	vc_map( array(
		"name"					=>esc_html__( "Headline", 'risusagency' ),
		"description"			=>esc_html__( "Insert a Custom Headline", 'risusagency' ),
		"base"					=> "risusagency_headline",
		'category'				=> "Text",
		"icon"					=> "icon-wpb-risusagency-headline",
		"params"				=> array(
			array(
				"type"			=> "textarea",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Content", 'risusagency' ),
				"param_name"	=> "content",
				"value"			=> "",
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> true,
				"class"			=> "",
				"heading"		=>esc_html__( "Headline Type", 'risusagency' ),
				"param_name"	=> "type",
				"value"			=> array(
					'h1' => 'h1',
					'h2' => 'h2',
					'h3' => 'h3',
					'h4' => 'h4',
					'h5' => 'h5',
					'h6' => 'h6',
					'Normal Text' => 'div',
				),
				"description"	=>esc_html__( "This is for SEO purposes and does not set the size (i.e. you can have an h1 that is small or an h6 that displays large)", 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font", 'risusagency' ),
				"param_name"	=> "font",
				"value"			=> array(
					'Standard Headline Font' => 'font-inherit',
					'Special Font' => 'font-special',
				),
				"description"	=>esc_html__( "Headline Font & Special Font can be defined in Theme Options", 'risusagency' ),
				"group"	=>esc_html__( 'Custom Styling', 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font Size", 'risusagency' ),
				"param_name"	=> "size",
				"value"			=> array(
					'Default' 		=> 'fontsize-inherit',
					'Extra Small' 	=> 'fontsize-xs',
					'Small' 		=> 'fontsize-s',
					'Medium' 		=> 'fontsize-m',
					'Large' 		=> 'fontsize-l',
					'Extra Large' 	=> 'fontsize-xl',
					'XXL' 			=> 'fontsize-xxl',
					'XXXL' 			=> 'fontsize-xxxl',
					'XXXXL' 			=> 'fontsize-xxxxl',
					'XXXXXL' 			=> 'fontsize-xxxxxl',
				),
				"description"	=>esc_html__( "Customize the Font Size or leave it at default (defined in Theme Options)", 'risusagency' ),
				"group"	=>esc_html__( 'Custom Styling', 'risusagency' ),
			),
			array(
				"type"			=> "colorpicker",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font Color", 'risusagency' ),
				"param_name"	=> "color",
				"value"			=> "",
				"description"	=>esc_html__( "Choose a custom Font Color or leave it at default (defined in Theme Options)", 'risusagency' ),
				"group"	=>esc_html__( 'Custom Styling', 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Font Weight", 'risusagency' ),
				"param_name"	=> "weight",
				"value"			=> array(
					'Default' => 'fontweight-inherit',
					'Font Weight 300' => 'fontweight-300',
					'Font Weight 400' => 'fontweight-400',
					'Font Weight 500' => 'fontweight-500',
					'Font Weight 600' => 'fontweight-600',
					'Font Weight 700' => 'fontweight-700',
					'Font Weight 800' => 'fontweight-800',
					'Font Weight 900' => 'fontweight-900',
				),
				"description"	=>esc_html__( "Choose a custom Font Weight or leave it at default (defined in Theme Options)", 'risusagency' ),
				"group"	=>esc_html__( 'Custom Styling', 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Line Height", 'risusagency' ),
				"param_name"	=> "lineheight",
				"value"			=> array(
					'Default' 		=> 'lh-inherit',
					'Line-Height 1.2' 	=> 'lh-12',
					'Line-Height 1.3' 	=> 'lh-13',
					'Line-Height 1.4' 	=> 'lh-14',
					'Line-Height 1.5' 	=> 'lh-15',
					'Line-Height 1.6' 	=> 'lh-16',
					'Line-Height 1.7' 	=> 'lh-17',
					'Line-Height 1.8'   => 'lh-18',
					'Line-Height 1.9' 	=> 'lh-19',
					'Line-Height 2.0' 	=> 'lh-20',
				),
				"description"	=>esc_html__( "For Large Fonts over more than 2 lines you might want to define that value", 'risusagency' ),
				"group"	=>esc_html__( 'Custom Styling', 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Bottom Line Style", 'risusagency' ),
				"param_name"	=> "bottom_lines",
				"value"			=> array(
					'Line Bottom' 		=> 'bottom-line',
					'Line Bottom Left' 		=> 'bottom-line-left',
					'No Line Bottom' 	=> 'no',
				),
				"group"	=>esc_html__( 'Custom Styling', 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Custom Text Transform", 'risusagency' ),
				"param_name"	=> "transform",
				"value"			=> array(
					'Default' => 'transform-inherit',
					'Uppercase' => 'transform-uppercase',
				),
				"group"	=>esc_html__( 'Custom Styling', 'risusagency' ),
			),
			array(
				"type"			=> "dropdown",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Text Align", 'risusagency' ),
				"param_name"	=> "align",
				"value"			=> array(
					'Center' => 'align-center',
					'Left' => 'align-left',
					'Right' => 'align-right',
				),
				"group"	=>esc_html__( 'Layout', 'risusagency' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Margin", 'risusagency' ),
				"param_name"	=> "margin",
				"value"			=> "0 0 20px 0",
				"description"	=>esc_html__( "Margin - topmargin rightmargin bottommargin leftmargin. Default: 0 0 20px 0", 'risusagency' ),
				"group"	=>esc_html__( 'Layout', 'risusagency' ),
			),
			array(
				"type"			=> "textfield",
				"admin_label"	=> false,
				"class"			=> "",
				"heading"		=>esc_html__( "Extra Class", 'risusagency' ),
				"param_name"	=> "class",
				"value"			=> "",
				"description"	=>esc_html__( "Add your own class and refer to it in your CSS file.", 'risusagency' ),
				"group"	=>esc_html__( 'Layout', 'risusagency' ),
			),
		)
	) );
}
add_action( 'vc_before_init', 'risusagency_headline_vc' );




//Google Map



if
(function_exists('vc_map'))
{

	vc_map( array(

			"name" => esc_html__("DC Google Map", 'risusagency'),

			"base" => "ggmap",

			"class" => "",

			"icon" => "icon-st",

			"category" => 'Content',

			"params" => array(

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("ID Map", 'risusagency'),

					"param_name" => "idmap",

					"value" => "",

					"description" => esc_html__("Ex: map-canvas, Please enter ID Map, map-canvas1, map-canvas2, map-canvas3, ..etc", 'risusagency')

				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Height Map", 'risusagency'),

					"param_name" => "height",

					"value" => 250,

					"description" => esc_html__("Please enter number height Map, 300, 350, 380, ..etc. Default: 250.", 'risusagency')

				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Latitude", 'risusagency'),

					"param_name" => "lat",

					"value" => 53.3525963,

					"description" => esc_html__("Please enter <a href='http://www.latlong.net/'>Latitude</a> google map. Default: 53.3525963.", 'risusagency')

				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Longitude", 'risusagency'),

					"param_name" => "long",

					"value" => -6.2623117,

					"description" => esc_html__("Please enter <a href='http://www.latlong.net/'>Longitude</a> google map. Default: -6.2623117", 'risusagency')



				),

				array(

					"type" => "textfield",

					"holder" => "div",

					"class" => "",

					"heading" => esc_html__("Zoom Map", 'risusagency'),

					"param_name" => "zoom",

					"value" => 18,

					"description" => esc_html__("Please enter Zoom Map, Default: 18", 'risusagency')

				),


				array(

					"type" => "attach_image",

					"holder" => "div",

					"class" => "",

					"heading" => "Icon Map marker",

					"param_name" => "icon",

					"value" => "",

					"description" => esc_html__("Icon Map marker, 58 x 67", 'risusagency')

				),



			)));



}

?>
