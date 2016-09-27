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
    'value'         => '1',
    'checked'       => set_value($id, $value),
);
$element_empty = array(
    'name'          => $id,
    'id'            => $id.'_empty',
    'value'         => '0',
    'type'          => 'hidden',
);
?>

<div class="form-group">
    <div class="col-md-offset-3 col-md-5 col-sm-offset-2 col-sm-6">
        <div class="checkbox">
            <label>

                <?php echo form_checkbox($element_empty); ?>
                <?php echo form_checkbox($element); ?>

                <?php echo $element_config['label']; ?>
            
            </label>
        </div>
    </div>
</div>