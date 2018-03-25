<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
?>

<a href="#" class="btn btn-primary popup-simple-btn"><?php echo $atts['btn_text'] ?></a>

<div class="popup-simple-body">
    <div class="wrapper">
        <div class="popup-content">
            <a class="close-btn" href="#">
                <i class="fas fa-times"></i>
            </a>

            <h2><?php echo $atts['popup_title'] ?></h2>
            <?php echo $atts['popup_text'] ?>
        </div>
    </div>
</div>