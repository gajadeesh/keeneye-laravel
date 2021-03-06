<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Head Hunter</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        
                    <?php endif; ?>

                    <button 
                            type="button" 
                            class="btn btn-primary btn-lg" 
                            data-toggle="modal" 
                            data-target="#favoritesModal">
                            Add Head hunter
                        </button>

                        

                        <div class="modal fade" id="favoritesModal" 
                            tabindex="-1" role="dialog" 
                            aria-labelledby="favoritesModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" 
                                data-dismiss="modal" 
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" 
                                id="favoritesModalLabel">Add</h4>
                            </div>
                            <div class="modal-body">
                                 <form method="post" action="<?php echo e(url('headhunterAdd')); ?>">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" name="head_name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Description :</label>
                                        <input type="text" class="form-control" name="head_des"/>
                                    </div>
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                          
                            </div>
                        </div>
                        </div>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                
                            </tr>
                            <?php $__currentLoopData = $headhunter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headhunters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($headhunters->name); ?></td>
                                <td><?php echo e($headhunters->description); ?></td>
                                
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>