    <?php $__env->startSection('content'); ?>
     <h2>Livros disponíveis:</h2>

     <span> <a style="margin-bottom:10px" href="<?php echo e(route('livros.create')); ?>" class="btn btn-dark"><img style="margin-right:10px;" src="icons/png/plus-2x.png" alt="icon name"> Adicionar </a></span>
            
        <div>
            <table class="table table-striped table-dark" >
                <tr>
                    <th style="width:50px">Capa</th>
                    <th style="width:1000px">Descrição</th>
                    <th>Autor</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    

                </tr>


                <?php $__empty_1 = true; $__currentLoopData = $livros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $livro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><img class="imagem" src="<?php echo e($livro->capa); ?>"> </td>
                        <td><?php echo e($livro->descricao); ?></td>
                        <td><?php echo e($livro->autor); ?></td>
                        <td>
                        <form style="width:5px">
                                <button type="submit" value="remover" class="buttonIconPencil"></button>
                        </form>
                        </td>
                        
                        <td>
                        <form style="width:5px" action="<?php echo e(route('livros.destroy', $livro->id)); ?>" class="form-horizontal" method="post" style="display: inline-block">
                                <?php echo csrf_field(); ?>

                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" value="remover" class="buttonIconTrash"></button>
                        </form>
                        <td>

                    </tr> 
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <p>Nenhuma Categoria Cadastrada</p>

                    
                <?php endif; ?>
            </table>

        </div>
    
        <footer>

            <label >“Livros dão alma ao universo, asas para a mente, voo para a imaginação, e vida a tudo”. – Platão</label>

         </footer>
<?php $__env->stopSection(); ?>




           
   

  


 
<?php echo $__env->make('Templates.templateGeral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bibliotecjhon\resources\views/livro.blade.php ENDPATH**/ ?>