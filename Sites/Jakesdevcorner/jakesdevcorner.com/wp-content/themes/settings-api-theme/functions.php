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
 add_action('admin_menu', 'sandbox_create_menu_page');
 add_action('admin_menu', 'sandbox_plugin_menu');

 function sandbox_plugin_menu() {
   add_plugins_page(
     'My Custom Plugin',
     'Sandbox Plugin',
     'administrator',
     'sandbox_plugin',
     'sandbox_plugin_page'
   );
 }

 function sandbox_plugin_page() {
   echo 'sup I\'m a plugin page bitch';
 }
 function sandbox_create_menu_page () {
   add_menu_page(
     'Sandbox Options',
     'Sandbox',
     'administrator',
     'sandbox',
     'sandbox_menu_page_display'
   );

   add_submenu_page(
     'sandbox',
     'Sub Menu Dog',
     'menu text dog',
     'administrator',
     'sandbox_options',
     'sandbox_submenu_page_display'
   );
 }

 function sandbox_submenu_page_display() {
   // Create a header in the default WordPress 'wrap' container
    $html = '<div class="wrap">';
        $html .= '<h2>Sandbox Options</h2>';
    $html .= '</div>';

    // Send the markup to the browser
    echo $html;
 }

 function sandbox_menu_page_display() {
   $html = '<div class="wrap" >';
    $html .= '<h2>Sandbox</h2>';
   $html .= '</div>';
   echo $html;
 }

 function sandbox_initialize_theme_options() {
   add_settings_section(
      'general_settings_section',
      'Sandbox Options',
      'sandbox_general_options_callback',
      'general'
    );

    /**
    * setting to toggle visibility of elements on page
    */
  add_settings_field(
    'show_header',
    'Header',
    'sandbox_toggle_header_callback',
    'general',
    'general_settings_section',
    array(
      'Activate this setting to display the header.'
    )
  );

  add_settings_field(
    'show_content',
    'Content',
    'sandbox_toggle_content_callback',
    'general',
    'general_settings_section',
    array(
      'Activate this setting to display the content.'
    )
  );

  add_settings_field(
    'show_footer',
    'Footer',
    'sandbox_toggle_footer_callback',
    'general',
    'general_settings_section',
    array(
      'Activate this setting to display the footer.'
    )
  );

  register_setting(
    'general',
    'show_header'
  );

  register_setting(
    'general',
    'show_content'
  );

  register_setting(
    'general',
    'show_footer'
  );
 };// end sandbox_initialize_theme_options

 function sandbox_general_options_callback() {
   echo '<p>Select which areas of content you wish to display.</p>';
 };


 function sandbox_toggle_header_callback($args) {
   $html = '<input type="checkbox" id="show_header" name="show_header" value="1" '
    . checked(1, get_option('show_header'), false)
    . '/>';

    $html .= '<label for="show_header">'
      . $args[0]
      . '</label>';
    echo $html;
 }

 function sandbox_toggle_content_callback($args) {
   $html = '<input type="checkbox" id="show_content" name="show_content" value="1" '
    . checked(1, get_option('show_content'), false)
    . '/>';

    $html .= '<label for="show_content">'
      . $args[0]
      . '</label>';
    echo $html;
 }

 function sandbox_toggle_footer_callback($args) {
   $html = '<input type="checkbox" id="show_footer" name="show_footer" value="1" '
    . checked(1, get_option('show_footer'), false)
    . '/>';

    $html .= '<label for="show_footer">'
      . $args[0]
      . '</label>';
    echo $html;
 }


?>
