<input type="<?php echo  $type ?>" name="<?php echo  $name ?>" id="<?php echo  $name ?>" value="<?php echo  $value ?>"
       class="form-control"
    <?php if (config_item('yupii_all_to_uppercase')) : ?>
        onChange="this.value = this.value.toUpperCase();"
    <?php endif; ?>
       data-valueant='<?php echo  $value ?>' <?php echo  $extra_attributes ?> autocomplete="off">