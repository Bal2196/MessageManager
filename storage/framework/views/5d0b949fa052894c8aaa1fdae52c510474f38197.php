<?php $__env->startSection('content'); ?>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
  </tr>
  <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($message->name); ?></td>
    <td><?php echo e($message->email); ?></td>
    <td><?php echo e($message->message); ?></td>
    <td>
      <form method="post" action="/<?php echo e($message->id); ?>">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
        <input type="submit" value="Delete">
      </form>
  </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('messages/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\MessageManager\resources\views/messages/index.blade.php */ ?>