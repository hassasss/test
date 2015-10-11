<?php
/**
 * Plugin Name: Hook Test
 * Description: A simple plugin to test hooks
 */

add_action('admin_menu','myfirstplugin_admin_actions');
function myfirstplugin_admin_actions(){
        add_options_page('myfirstplugin','myfirstplugin','manage_options',__FILE__,'myfirstplugin_admin');
}

function myfirstplugin_admin(){
?>
<html>
<body>
<form action="<?php add_option( 'message', $_POST['name'] );  ?>" method="post">
message: <input type="text" name="name"><br>
<input type="submit">
</form>
</body>
</html>
<?php
}
add_action('add_attachment', 'emaillo');
function emaillo() {
    $to = 'anhazz25@yahoo.com';
    $subject = 'wordpress';
    $body= get_option('message');
    wp_die($body);
    wp_mail( $to, $subject, $body );
}
?>

