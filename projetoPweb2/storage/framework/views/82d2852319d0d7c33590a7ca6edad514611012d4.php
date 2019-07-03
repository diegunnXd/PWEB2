<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editando Funcionario: <?php echo e($funcionario->name); ?></h1>
    <?php if($errors->any()): ?>
    <ul class="alert alert-warning">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>

    <?php echo Form::open(['url'=>"funcionarios/$funcionario->id/update", 'method'=>'put']); ?>


    <!-- Nome Form Input -->

    <div class="form-group">
    <?php echo Form::label('nome', 'Nome:'); ?>

    <?php echo Form::text('nome', $funcionario->Nome, ['class'=>'form-control']); ?>

    </div>

    <!-- Descricao Form Input -->

    <div class="form-group">
            <?php echo Form::label('cargo', 'Cargo:'); ?>

            <?php echo Form::text('cargo', $funcionario->Cargo, ['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
            <?php echo Form::label('cpf', 'Cpf:'); ?>

            <?php echo Form::text('cpf', $funcionario->CPF, ['class'=>'form-control']); ?>

    </div>

    <div class="form-group">
    <?php echo Form::submit('Salvar Dados', ['class'=>'btn btn-primary']); ?>

    </div>

    <?php echo Form::close(); ?>


 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('./layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\projetoPweb2\resources\views/funcionarios/edit.blade.php ENDPATH**/ ?>