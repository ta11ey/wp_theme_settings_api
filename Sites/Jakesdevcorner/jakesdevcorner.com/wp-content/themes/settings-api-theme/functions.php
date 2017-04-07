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

  register_setting(
    'general',
    'show_header'
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
?>
