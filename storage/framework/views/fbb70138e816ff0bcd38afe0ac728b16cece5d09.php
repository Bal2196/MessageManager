<?php $__env->startSection('content'); ?>
<table>
  <form method="post" action="/">
    <?php echo csrf_field(); ?>
  <tr>
    <td><input type="text" name="name" placeholder="Name" value="<?php echo e(old('name')); ?>" required></td>
    <td><input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required></td>
  </tr>
  <tr>
    <td><textarea name="message" placeholder="What would you like to say..." required><?php echo e(old('message')); ?></textarea></td>
    <td><input type="submit" value="Send"></td>
  </tr>
  </form>
</table>

<?php if($errors->any()): ?>
<ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('messages/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\MessageManager\resources\views//messages/create.blade.php */ ?>