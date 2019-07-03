 <?php $__env->startSection('content'); ?>
 <div class="container">
 <h1>Funcionarios</h1>
 <a href="<?php echo e(route('funcionarios.create')); ?>" class="btn btn-default">Novo Funcionario </a>

 <table class="table table-striped table-bordered table-hover">
 <thead>
 <tr>
 <th>ID</th>
 <th>Nome</th>
 <th>Cargo</th>
 <th>cpf</th>
 <th></th>
 </tr>
 </thead>
 <tbody>

 <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <tr>
 <td><?php echo e($funcionario->id); ?></td>
 <td><?php echo e($funcionario->Nome); ?></td>
 <td><?php echo e($funcionario->Cargo); ?></td>
 <td><?php echo e($funcionario->CPF); ?></td>
 <td>
 <a href="<?php echo e(route('funcionarios.edit',['id'=>$funcionario->id])); ?>" class="btn-sm btn-success">Editar</a>
 <a href="<?php echo e(route('funcionarios.destroy',['id'=>$funcionario->id])); ?>" class="btn-sm btn-danger">Remover</a>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</tbody>
</table>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('./layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\projetoPweb2\resources\views/funcionarios/funcionarios.blade.php ENDPATH**/ ?>