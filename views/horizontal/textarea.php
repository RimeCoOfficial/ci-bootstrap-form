<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
if (empty($value)) $value = NULL;

$this->load->config('form_element', TRUE);
$element_config = $this->config->item($id, 'form_element');

$element = array(
    'name'          => $id,
    'id'            => $id,
    'value'         => set_value($id, html_entity_decode($value), FALSE),
    'maxlength'     => !empty($element_config['max_length']) ? $element_config['max_length'] : NULL,
    'style'         => 'resize: none',
    'rows'          => !empty($element_config['rows']) ? $element_config['rows'] : 5,

    'class'         => 'form-control',

    'id'            => $id,

    // html5 tag - not supported in Internet Explorer 9 and earlier versions.
    'placeholder'   => !empty($element_config['placeholder']) ? $element_config['placeholder'] : NULL,
    'autocomplete'  => 'off',
);

if (!empty($element_config['required'])) $element['required'] = NULL;

$form_error = form_error($element['name']);
if (!empty($form_error)) $error[ $element['name'] ] = $form_error;
if (!empty($error[ $element['name'] ])) $element['id'] = 'inputError';
?>

<div class="form-group <?php if (!empty($error[ $element['name'] ])) echo 'has-error'; ?>">
    <?php echo form_label($element_config['label'], $element['id'], array('class' => 'control-label col-md-3 col-sm-2')); ?>

    <div class="col-md-5 col-sm-6">
        <?php echo form_textarea($element); ?>
    </div>

    <div class="col-md-4 col-sm-4">
        <span class="small text-muted">
            <?php if (!empty($element['placeholder'])) echo $element['placeholder']; ?>
        </span>
    </div>

    <div class="clearfix"></div>
    
    <div class="col-md-5 col-md-push-3 col-sm-6 col-sm-push-2">
        <?php if (!empty($error[ $element['name'] ])): ?>
            <span class="help-block"><?php echo $error[ $element['name'] ]; ?></span>
        <?php endif; ?>
    </div>
</div>