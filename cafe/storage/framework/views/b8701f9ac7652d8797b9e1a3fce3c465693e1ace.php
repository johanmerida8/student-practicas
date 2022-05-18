
<?php $__env->startSection("title", "New Cliente"); ?>
<?php $__env->startSection("content"); ?>
<form action="/clientes" method="post">
    <?php echo csrf_field(); ?>
    <div>
        Firstname:
        <input type="text" name="firstname" class="form-control">
    </div>
    <div>
        Lastname:
        <input type="text" name="lastname" class="form-control">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/listclientes" class="btn btn-primary">Go back</a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NITRO\Desktop\project database\cafe\resources\views/clientes/new.blade.php ENDPATH**/ ?>