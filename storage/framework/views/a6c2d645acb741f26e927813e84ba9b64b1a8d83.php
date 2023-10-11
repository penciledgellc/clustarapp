<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'disabled' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'disabled' => false,
]); ?>
<?php foreach (array_filter(([
    'disabled' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
   $name = '';
    $id = !empty($id) ? $id : '';

    if( !empty($repeater_id) ){
        if( !empty($parent_rep) ){
            $name = "$parent_rep".'['.$repeater_id.']['.$index.']['.$id.']';
        }else{
            $name = "$repeater_id".'['.$index.']['.$id.']';
        }
    }else{
        $name = $id;
    }
    $time_24hr   = 'false';
    if( !empty($time_24hr) &&  $time_24hr){
        $time_24hr   = 'true';
    }
?>
<?php if( !empty($repeater_type) && $repeater_type == 'single' ): ?>
    <div class="op-tooltip">
        <input type="text" <?php if(!empty($parent_rep)): ?> data-parent_rep="<?php echo e($parent_rep); ?>" <?php endif; ?>  data-id="<?php echo e($id ?? ''); ?>"  name="<?php echo e($name); ?>" data-time_24hr ="<?php echo e($time_24hr); ?>"  value="<?php echo e($value ?? ''); ?>" class="op-input-field time form-control <?php echo e($class ?? ''); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>">
        <i class="op-infotips icon-clock" href="#"></i>
    </div>
<?php else: ?>
    <li class="form-group-wrap">
        <?php if( !empty($label_title) ): ?>
            <div class="form-group-half">
                <div class="op-textcontent">
                    <h6>
                        <?php echo $label_title; ?>

                        <?php if( empty($repeater_id) && config('optionbuilder.developer_mode') == 'yes' ): ?>
                            <span class="op-alert">setting(‘<?php echo e($tab_key); ?>.<?php echo e($id); ?>’)</span>
                        <?php endif; ?>
                    </h6>
                    <?php if( !empty( $label_desc) ): ?>
                        <em><?php echo $label_desc; ?></em>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="form-group-half">
            <div class="op-textcontent">
                <div class="op-tooltip">
                    <input type="text" <?php if(!empty($parent_rep)): ?> data-parent_rep="<?php echo e($parent_rep); ?>" <?php endif; ?>  data-id="<?php echo e($id ?? ''); ?>"  name="<?php echo e($name); ?>"   data-time_24hr ="<?php echo e($time_24hr); ?>"  value="<?php echo e($value ?? ''); ?>" class="op-input-field time form-control <?php echo e($class ?? ''); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>">
                    <i class="op-infotips icon-clock" href="#"></i>
                </div>
                <?php if( !empty($field_desc) ): ?><span><?php echo $field_desc; ?></span> <?php endif; ?>           
            </div>
        </div>
    </li>
<?php endif; ?>
<?php /**PATH /Applications/MAMP/htdocs/getclustar/vendor/larabuild/optionbuilder/resources/views/components/timepicker.blade.php ENDPATH**/ ?>