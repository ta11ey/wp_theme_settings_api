<?php
/**
 * Internationalization helper.
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2016, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       1.0
 */

if ( ! class_exists( 'Kirki_l10n' ) ) {

	/**
	 * Handles translations
	 */
	class Kirki_l10n {

		/**
		 * The plugin textdomain
		 *
		 * @access protected
		 * @var string
		 */
		protected $textdomain = 'kirki';

		/**
		 * The class constructor.
		 * Adds actions & filters to handle the rest of the methods.
		 *
		 * @access public
		 */
		public function __construct() {

			add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		}

		/**
		 * Load the plugin textdomain
		 *
		 * @access public
		 */
		public function load_textdomain() {

			if ( null !== $this->get_path() ) {
				load_textdomain( $this->textdomain, $this->get_path() );
			}
			load_plugin_textdomain( $this->textdomain, false, Kirki::$path . '/languages' );

		}

		/**
		 * Gets the path to a translation file.
		 *
		 * @access protected
		 * @return string Absolute path to the translation file.
		 */
		protected function get_path() {
			$path_found = false;
			$found_path = null;
			foreach ( $this->get_paths() as $path ) {
				if ( $path_found ) {
					continue;
				}
				$path = wp_normalize_path( $path );
				if ( file_exists( $path ) ) {
					$path_found = true;
					$found_path = $path;
				}
			}

			return $found_path;

		}

		/**
		 * Returns an array of paths where translation files may be located.
		 *
		 * @access protected
		 * @return array
		 */
		protected function get_paths() {

			return array(
				WP_LANG_DIR . '/' . $this->textdomain . '-' . get_locale() . '.mo',
				Kirki::$path . '/languages/' . $this->textdomain . '-' . get_locale() . '.mo',
			);

		}

		/**
		 * Shortcut method to get the translation strings
		 *
		 * @static
		 * @access public
		 * @param string $config_id The config ID. See Kirki_Config.
		 * @return array
		 */
		public static function get_strings( $config_id = 'global' ) {

			$translation_strings = array(
				'background-color'      => esc_attr__( 'Background Color', 'switty' ),
				'background-image'      => esc_attr__( 'Background Image', 'switty' ),
				'no-repeat'             => esc_attr__( 'No Repeat', 'switty' ),
				'repeat-all'            => esc_attr__( 'Repeat All', 'switty' ),
				'repeat-x'              => esc_attr__( 'Repeat Horizontally', 'switty' ),
				'repeat-y'              => esc_attr__( 'Repeat Vertically', 'switty' ),
				'inherit'               => esc_attr__( 'Inherit', 'switty' ),
				'background-repeat'     => esc_attr__( 'Background Repeat', 'switty' ),
				'cover'                 => esc_attr__( 'Cover', 'switty' ),
				'contain'               => esc_attr__( 'Contain', 'switty' ),
				'background-size'       => esc_attr__( 'Background Size', 'switty' ),
				'fixed'                 => esc_attr__( 'Fixed', 'switty' ),
				'scroll'                => esc_attr__( 'Scroll', 'switty' ),
				'background-attachment' => esc_attr__( 'Background Attachment', 'switty' ),
				'left-top'              => esc_attr__( 'Left Top', 'switty' ),
				'left-center'           => esc_attr__( 'Left Center', 'switty' ),
				'left-bottom'           => esc_attr__( 'Left Bottom', 'switty' ),
				'right-top'             => esc_attr__( 'Right Top', 'switty' ),
				'right-center'          => esc_attr__( 'Right Center', 'switty' ),
				'right-bottom'          => esc_attr__( 'Right Bottom', 'switty' ),
				'center-top'            => esc_attr__( 'Center Top', 'switty' ),
				'center-center'         => esc_attr__( 'Center Center', 'switty' ),
				'center-bottom'         => esc_attr__( 'Center Bottom', 'switty' ),
				'background-position'   => esc_attr__( 'Background Position', 'switty' ),
				'background-opacity'    => esc_attr__( 'Background Opacity', 'switty' ),
				'on'                    => esc_attr__( 'ON', 'switty' ),
				'off'                   => esc_attr__( 'OFF', 'switty' ),
				'all'                   => esc_attr__( 'All', 'switty' ),
				'cyrillic'              => esc_attr__( 'Cyrillic', 'switty' ),
				'cyrillic-ext'          => esc_attr__( 'Cyrillic Extended', 'switty' ),
				'devanagari'            => esc_attr__( 'Devanagari', 'switty' ),
				'greek'                 => esc_attr__( 'Greek', 'switty' ),
				'greek-ext'             => esc_attr__( 'Greek Extended', 'switty' ),
				'khmer'                 => esc_attr__( 'Khmer', 'switty' ),
				'latin'                 => esc_attr__( 'Latin', 'switty' ),
				'latin-ext'             => esc_attr__( 'Latin Extended', 'switty' ),
				'vietnamese'            => esc_attr__( 'Vietnamese', 'switty' ),
				'hebrew'                => esc_attr__( 'Hebrew', 'switty' ),
				'arabic'                => esc_attr__( 'Arabic', 'switty' ),
				'bengali'               => esc_attr__( 'Bengali', 'switty' ),
				'gujarati'              => esc_attr__( 'Gujarati', 'switty' ),
				'tamil'                 => esc_attr__( 'Tamil', 'switty' ),
				'telugu'                => esc_attr__( 'Telugu', 'switty' ),
				'thai'                  => esc_attr__( 'Thai', 'switty' ),
				'serif'                 => _x( 'Serif', 'font style', 'switty' ),
				'sans-serif'            => _x( 'Sans Serif', 'font style', 'switty' ),
				'monospace'             => _x( 'Monospace', 'font style', 'switty' ),
				'font-family'           => esc_attr__( 'Font Family', 'switty' ),
				'font-size'             => esc_attr__( 'Font Size', 'switty' ),
				'font-weight'           => esc_attr__( 'Font Weight', 'switty' ),
				'line-height'           => esc_attr__( 'Line Height', 'switty' ),
				'font-style'            => esc_attr__( 'Font Style', 'switty' ),
				'letter-spacing'        => esc_attr__( 'Letter Spacing', 'switty' ),
				'top'                   => esc_attr__( 'Top', 'switty' ),
				'bottom'                => esc_attr__( 'Bottom', 'switty' ),
				'left'                  => esc_attr__( 'Left', 'switty' ),
				'right'                 => esc_attr__( 'Right', 'switty' ),
				'center'                => esc_attr__( 'Center', 'switty' ),
				'justify'               => esc_attr__( 'Justify', 'switty' ),
				'color'                 => esc_attr__( 'Color', 'switty' ),
				'add-image'             => esc_attr__( 'Add Image', 'switty' ),
				'change-image'          => esc_attr__( 'Change Image', 'switty' ),
				'no-image-selected'     => esc_attr__( 'No Image Selected', 'switty' ),
				'add-file'              => esc_attr__( 'Add File', 'switty' ),
				'change-file'           => esc_attr__( 'Change File', 'switty' ),
				'no-file-selected'      => esc_attr__( 'No File Selected', 'switty' ),
				'remove'                => esc_attr__( 'Remove', 'switty' ),
				'select-font-family'    => esc_attr__( 'Select a font-family', 'switty' ),
				'variant'               => esc_attr__( 'Variant', 'switty' ),
				'subsets'               => esc_attr__( 'Subset', 'switty' ),
				'size'                  => esc_attr__( 'Size', 'switty' ),
				'height'                => esc_attr__( 'Height', 'switty' ),
				'spacing'               => esc_attr__( 'Spacing', 'switty' ),
				'ultra-light'           => esc_attr__( 'Ultra-Light 100', 'switty' ),
				'ultra-light-italic'    => esc_attr__( 'Ultra-Light 100 Italic', 'switty' ),
				'light'                 => esc_attr__( 'Light 200', 'switty' ),
				'light-italic'          => esc_attr__( 'Light 200 Italic', 'switty' ),
				'book'                  => esc_attr__( 'Book 300', 'switty' ),
				'book-italic'           => esc_attr__( 'Book 300 Italic', 'switty' ),
				'regular'               => esc_attr__( 'Normal 400', 'switty' ),
				'italic'                => esc_attr__( 'Normal 400 Italic', 'switty' ),
				'medium'                => esc_attr__( 'Medium 500', 'switty' ),
				'medium-italic'         => esc_attr__( 'Medium 500 Italic', 'switty' ),
				'semi-bold'             => esc_attr__( 'Semi-Bold 600', 'switty' ),
				'semi-bold-italic'      => esc_attr__( 'Semi-Bold 600 Italic', 'switty' ),
				'bold'                  => esc_attr__( 'Bold 700', 'switty' ),
				'bold-italic'           => esc_attr__( 'Bold 700 Italic', 'switty' ),
				'extra-bold'            => esc_attr__( 'Extra-Bold 800', 'switty' ),
				'extra-bold-italic'     => esc_attr__( 'Extra-Bold 800 Italic', 'switty' ),
				'ultra-bold'            => esc_attr__( 'Ultra-Bold 900', 'switty' ),
				'ultra-bold-italic'     => esc_attr__( 'Ultra-Bold 900 Italic', 'switty' ),
				'invalid-value'         => esc_attr__( 'Invalid Value', 'switty' ),
				'add-new'           	=> esc_attr__( 'Add new', 'switty' ),
				'row'           		=> esc_attr__( 'row', 'switty' ),
				'limit-rows'            => esc_attr__( 'Limit: %s rows', 'switty' ),
				'open-section'          => esc_attr__( 'Press return or enter to open this section', 'switty' ),
				'back'                  => esc_attr__( 'Back', 'switty' ),
				'reset-with-icon'       => sprintf( esc_attr__( '%s Reset', 'switty' ), '<span class="dashicons dashicons-image-rotate"></span>' ),
				'text-align'            => esc_attr__( 'Text Align', 'switty' ),
				'text-transform'        => esc_attr__( 'Text Transform', 'switty' ),
				'none'                  => esc_attr__( 'None', 'switty' ),
				'capitalize'            => esc_attr__( 'Capitalize', 'switty' ),
				'uppercase'             => esc_attr__( 'Uppercase', 'switty' ),
				'lowercase'             => esc_attr__( 'Lowercase', 'switty' ),
				'initial'               => esc_attr__( 'Initial', 'switty' ),
				'select-page'           => esc_attr__( 'Select a Page', 'switty' ),
				'open-editor'           => esc_attr__( 'Open Editor', 'switty' ),
				'close-editor'          => esc_attr__( 'Close Editor', 'switty' ),
				'switch-editor'         => esc_attr__( 'Switch Editor', 'switty' ),
				'hex-value'             => esc_attr__( 'Hex Value', 'switty' ),
			);

			// Apply global changes from the kirki/config filter.
			// This is generally to be avoided.
			// It is ONLY provided here for backwards-compatibility reasons.
			// Please use the kirki/{$config_id}/l10n filter instead.
			$config = apply_filters( 'kirki/config', array() );
			if ( isset( $config['i18n'] ) ) {
				$translation_strings = wp_parse_args( $config['i18n'], $translation_strings );
			}

			// Apply l10n changes using the kirki/{$config_id}/l10n filter.
			return apply_filters( 'kirki/' . $config_id . '/l10n', $translation_strings );

		}
	}
}
