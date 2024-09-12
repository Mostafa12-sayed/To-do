
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((
  ['name'  , 'value'=>'' ,'label'=>false ,'placeholder'=>'']
));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((
  ['name'  , 'value'=>'' ,'label'=>false ,'placeholder'=>'']
), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<label for="<?php echo e($name); ?>"><?php echo e($label); ?></label>


<textarea  name="<?php echo e($name); ?>" 

<?php echo e($attributes->class([
    'form-control',
    'is-invalid' => $errors->has($name),])); ?>

 id="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder); ?>"><?php echo e(old($name, $value)); ?></textarea>

<?php if($errors->has($name)): ?>
<div class="invalid-feedback">
  <?php echo e($errors->first($name)); ?>

</div>
<?php endif; ?><?php /**PATH E:\program setup\xampp\htdocs\To-Do\resources\views/components/textarea.blade.php ENDPATH**/ ?>