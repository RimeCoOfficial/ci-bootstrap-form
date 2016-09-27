<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="form-group <?php if (!empty($error['captcha'])) echo 'has-error'; ?>">
    <?php
    if (isset($recaptcha_html))
    {
        echo $recaptcha_html;
    }
    ?>

    <?php if (!empty($error['captcha'])) { ?><span class="help-block"><?php echo $error['captcha']; ?></span><?php } ?>
</div>