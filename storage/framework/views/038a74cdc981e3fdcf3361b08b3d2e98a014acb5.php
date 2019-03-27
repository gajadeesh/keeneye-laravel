<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Recruit</div>

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
                            Recruit
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
                                id="favoritesModalLabel">Recrite</h4>
                            </div>
                            <div class="modal-body">
                                 <form method="post" action="<?php echo e(url('recruitAdd')); ?>">
                                    <div class="form-group">
                                        <label for="headhunterName">Head Hunter:</label>
                                        
                                        
                                        <select name="headhunterRecruit" class="form-control" id="">
                                            <?php $__currentLoopData = $headhunter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $headhunters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($headhunters->name); ?>"><?php echo e($headhunters->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position :</label>
                                        <select name="positionRecruit" class="form-control" id="">
                                                <option value="SE">SE</option>
                                                <option value="QA">QA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="candidateName">Candidate Name :</label>
                                        <select name="candidateRecruit" class="form-control" id="">
                                            <?php $__currentLoopData = $candidate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidates): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($candidates->name); ?>"><?php echo e($candidates->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Status :</label>
                                        <select name="statusRecruit" class="form-control" id="">
                                                <option value="true">True</option>
                                                <option value="false">False</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    <button type="submit" class="btn btn-success">Recruit</button>
                                </form>
                            </div>
                          
                            </div>
                        </div>
                        </div>
                    <br/>
                    <table class="table table-bordered table-stripped">
                            <tr>
                                <th>Head Hunter Name</th>
                                <th>Position</th>
                                <th>Candidate Name</th>
                                <th>Status</th>
                                
                            </tr>
                            <?php $__currentLoopData = $recruit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recruits): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($recruits->headhunterName); ?></td>
                                <td><?php echo e($recruits->position); ?></td>
                                <td><?php echo e($recruits->candidateName); ?></td>
                                <td><?php if($recruits->recruited == "true"): ?>
                                    <button class="btn btn-success">Recruited</button>
                                    <?php else: ?>
                                        <button class="btn btn-danger">Not Recruited</button>
                                    <?php endif; ?>
                                    
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>