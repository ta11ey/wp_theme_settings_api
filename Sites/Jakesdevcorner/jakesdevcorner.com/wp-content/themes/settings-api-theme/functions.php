<?php
/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */

/**
 * Initializes the theme options page by registering the Sections,
 * Fields, and Settings.
 *
 * This function is registered with the 'admin_init' hook.
 */
 add_action('admin_init', 'sandbox_initialize_theme_options');
 add_action('admin_menu', 'sandbox_theme_menu');



 function sandbox_theme_menu () {
   add_theme_page(
     'Sandbox Theme Page',
     'Sandbox Theme Custom',
     'administrator',
     'sandbox_theme',
     'sandbox_theme_display'
   );
 }


 function sandbox_theme_display() {
   ?>
    <!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">

        <!-- Add the icon to the page -->
        <div id="icon-themes" class="icon32"></div>
        <h2>Sandbox Theme Options</h2>

        <!-- Make a call to the WordPress function for rendering errors when settings are saved. -->
        <?php settings_errors(); ?>

        <!-- Create the form that will be used to render our options -->
        <form method="post" action="options.php">
            <?php settings_fields( 'sandbox_theme_display_options' ); ?>
            <?php do_settings_sections( 'sandbox_theme_display_options' ); ?>
            <?php submit_button(); ?>
        </form>

    </div><!-- /.wrap -->
<?php

 }

 function sandbox_initialize_theme_options() {
   if (false == get_option('sandbox_theme_display_options')) {
     add_option('sandbox_theme_display_options');
   }


   add_settings_section(
      'general_settings_section',
      'Display Options',
      'sandbox_general_options_callback',
      'sandbox_theme_display_options'
    );

    add_settings_field(
      'show_header',                      // ID used to identify the field throughout the theme
      'Header',                           // The label to the left of the option interface element
      'sandbox_toggle_header_callback',   // The name of the function responsible for rendering the option interface
      'sandbox_theme_display_options',    // The page on which this option will be displayed
      'general_settings_section',         // The name of the section to which this field belongs
      array(                              // The array of arguments to pass to the callback. In this case, just a description.
            'Activate this setting to display the header.'
      )
    );

  add_settings_field(
      'show_content',
      'Content',
      'sandbox_toggle_content_callback',
      'sandbox_theme_display_options',
      'general_settings_section',
      array(
          'Activate this setting to display the content.'
      )
  );

  add_settings_field(
      'show_footer',
      'Footer',
      'sandbox_toggle_footer_callback',
      'sandbox_theme_display_options',
      'general_settings_section',
      array(
          'Activate this setting to display the footer.'
      )
  );

  register_setting(
      'sandbox_theme_display_options',
      'sandbox_theme_display_options'
  );
 };// end sandbox_initialize_theme_options

 function sandbox_general_options_callback() {
   echo '<p>Select which areas of content you wish to display.</p>';
 };


 function sandbox_toggle_header_callback($args) {
   $options = get_option('sandbox_theme_display_options');

   $html = '<input type="checkbox" id="show_header" name="sandbox_theme_display_options[show_header]" value="1" '
    . checked(1, $options['show_header'], false)
    . '/>';

    $html .= '<label for="show_header">'
      . $args[0]
      . '</label>';
    echo $html;
 }

 function sandbox_toggle_content_callback($args) {
   $options = get_option('sandbox_theme_display_options');

   $html = '<input type="checkbox" id="show_content" name="sandbox_theme_display_options[show_content]" value="1" '
    . checked(1, $options['show_content'], false)
    . '/>';

    $html .= '<label for="show_content">'
      . $args[0]
      . '</label>';
    echo $html;
 }

 function sandbox_toggle_footer_callback($args) {
   $options = get_option('sandbox_theme_display_options');

   $html = '<input type="checkbox" id="show_footer" name="sandbox_theme_display_options[show_footer]" value="1" '
    . checked(1, $options['show_footer'], false)
    . '/>';

    $html .= '<label for="show_footer">'
      . $args[0]
      . '</label>';
    echo $html;
 }



/**
* initializes themes social options by registering the Sections, Fields, and settings
*/
?>
