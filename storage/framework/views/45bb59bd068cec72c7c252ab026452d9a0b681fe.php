<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Candidates</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <button 
                            type="button" 
                            class="btn btn-primary btn-lg" 
                            data-toggle="modal" 
                            data-target="#favoritesModal">
                            Add Candidates
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
                                 <form method="post" action="<?php echo e(url('candidateAdd')); ?>">
                                 
                                    <div class="form-group">
                                        
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" name="candy_name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description :</label>
                                        <input type="text" class="form-control" name="candy_des"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position :</label>
                                        <input type="text" class="form-control" name="candy_position"/>
                                    </div>
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>

                            
                </div>
            </div>
        </div>
        <br/>
        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Position</th>
                                
                            </tr>
                            <?php $__currentLoopData = $candidate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidates): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($candidates->name); ?></td>
                                <td><?php echo e($candidates->description); ?></td>
                                <td><?php echo e($candidates->position); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>