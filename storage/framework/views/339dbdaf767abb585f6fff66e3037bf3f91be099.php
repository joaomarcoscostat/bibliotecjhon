    <?php $__env->startSection('content'); ?>

        
            <h2>Inserir livro na estante:</h2>

            <form class="form" method="post" action="<?php echo e(route('livros.store')); ?>">

                <?php echo csrf_field(); ?>
                <input    type="text" name="nome" placeholder="Titulo"   class="form-control">
                <input    type="text" name="autor" placeholder="Autor"    class="form-control">
                <textarea type="text" name="descricao" placeholder="Descrição"class="form-control"></textarea>

                
                    <div class="form-group">
                        
                        <input type="file" class="form-control-file" name="capa" > 
                        
                    </div>
                

                <button style="width:540px" type="submit" class="btn btn-secondary btn-lg btn-block">Adcionar Livro</button>

            </form>

        

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('Templates.templateGeral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bibliotecjhon\resources\views/create.blade.php ENDPATH**/ ?>