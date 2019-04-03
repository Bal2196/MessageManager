<?php $__env->startSection('content'); ?>
<table>
  <form method="post" action="/">
    <?php echo e(csrf_field()); ?>

  <tr>
    <td><input type="text" name="name" placeholder="Name" required></td>
    <td><input type="email" name="email" placeholder="Email" required></td>
  </tr>
  <tr>
    <td><textarea name="message" placeholder="What would you like to say..." required></textarea></td>
    <td><input type="submit" value="Send"></td>
  </tr>
  </form>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\MessageManager\resources\views/home.blade.php */ ?>