<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
$this->load->config('form_element', TRUE);
$element_config = $this->config->item($id, 'form_element');

$element = array(
    'name'          => $id,
    'id'            => $id,
    'value'         => set_value($id),
    
    'maxlength'     => $element_config['max_length'],

    'class'         => 'form-control',

    // html5 tag - not supported in Internet Explorer 9 and earlier versions.
    'placeholder'   => !empty($element_config['placeholder']) ? $element_config['placeholder'] : NULL,
    'type'          => 'password',
    'autocomplete'  => 'off',
);

$form_error = form_error($element['name']);
if (!empty($form_error)) $error[ $element['name'] ] = $form_error;
if (!empty($error[ $element['name'] ])) $element['id'] = 'inputError';
?>

<div class="form-group <?php if (!empty($error[ $element['name'] ])) echo 'has-error'; ?>">
    <?php echo form_label($element_config['label'], $element['id'], array('class' => 'control-label')); ?>
    
    <?php echo form_password($element); ?>
    
    <?php if (!empty($error[ $element['name'] ])): ?>
        <span class="help-block"><?php echo $error[ $element['name'] ]; ?></span>
    <?php endif; ?>
</div>