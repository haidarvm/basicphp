<?php

/**
 * Form Builder Plugin
 * This class plugin builds a Bootstrap 5 form.
 *
 * @package  Form Builder
 *
 * @author   Raymund John Ang edit by haidar1 <raymund@open-nis.org>
 * @license  MIT License
 */

class Basic_Form {
    public function open($action, $class='form-horizontal', $method='post') {
        ?>
		<form class="<?= $class ?>" action="<?=!empty($action) ? $action: '#';?>" method="<?= $method ?>">
		<?php
    }

    public function input($type, $name, $label, $value=null, $required=false, $col=null, $style=null) {
        ?>
		<div class="<?=!empty($col) ? $col : 'col-12';?> mb-3">
			<label for="<?= $name ?>" class="form-label"><?= $label ?>:</label>
			<input type="<?= $type ?>" class="form-control" id="<?= $name ?>" placeholder="<?= $label ?>" name="<?= $name ?>" value="<?= $value ?>" <?php if ($required === true) {
            echo 'required';
        } ?> />
			<div class="invalid-feedback">
				Please enter your <?=$label;?>.
			</div>
		</div>
		<?php
    }

    public function textArea($name, $label, $value=null, $required=false) {
        ?>
		<div class="form-group">
			<label class="control-label col-sm-2" for="<?= $name ?>"><?= $label ?>:</label>
			<div class="col-sm-10"> 
				<textarea class="form-control" rows="5" id="<?= $name ?>" placeholder="Enter <?= $label ?>" name="<?= $name ?>" <?php if ($required === true) {
            echo 'required';
        } ?>><?= $value ?></textarea>
			</div>
		</div>
		<?php
    }

    public function button($type,  $label, $class='btn btn-primary btn-lg') {
        ?>
		<button class=" <?=$class;?>"  <?=!empty($type) ? 'type="'. $type.'"' : 'type="button"';?>><?=$label;?></button>
		<?php
    }

    public function csrfToken() {
        ?>
		<input type="hidden" name="csrf-token" value="<?= Basic::csrfToken() ?>">
		<?php
    }

    public function close() {
        ?>
		</form>
		<?php
    }
}
