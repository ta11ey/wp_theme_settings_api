<!DOCTYPE html>
<html>
    <head>
        <title>The Complete Guide To The Settings API | Sandbox Theme</title>
    </head>
    <body>


       <?php $display_options = get_option( 'sandbox_theme_display_options' ); ?>
       <?php $social_options = get_option ( 'sandbox_theme_social_options' ); ?>


        <?php  if( $display_options['show_header']) {?>
          <div id="header">
              <h1>Sandbox Header</h1>
          </div><!-- /#header -->
        <?php } ?>

        <?php  if( $display_options['show_content']) {?>
          <div id="content">
              <p>This is theme content.</p>

              <?php echo $social_options['twitter'] ?
                '<a href="' . $social_options['twitter'] . '"> Twitter</a>' : '';?>
          </div><!-- /#content -->


        <?php } ?>

        <?php  if( $display_options['show_footer']) {?>
          <div id="footer">
              <p>&copy; <?php echo date('Y'); ?> All Rights Reserved.</p>
          </div><!-- /#footer -->
        <?php } ?>
    </body>
</html>
