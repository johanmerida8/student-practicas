
<?php $__env->startSection("title", "New Menu"); ?>
<?php $__env->startSection("content"); ?>
<form action="/menus" method="post">
    <?php echo csrf_field(); ?>
    <div>
        Name:
        <input type="text" name="name" class="form-control">
    </div>
    <div>
        Description:
        <input type="text" name="description" class="form-control">
    </div>
    <div>
        Quantity:
        <input type="text" name="quantity" class="form-control">
    </div>
    <div>
        Price:
        <input type="text" name="price" class="form-control">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/listmenus" class="btn btn-primary">Go back</a>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\NITRO\Desktop\project database\cafe\resources\views/menus/new.blade.php ENDPATH**/ ?>