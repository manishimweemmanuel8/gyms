<?php $__env->startSection('content'); ?>
<aside class="right-side right-padding">
            <section class="content-header">
                <!--section starts-->
                <h2>Corporates Payment</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Corporate Payment</a>
                    </li>
                    <li>
                        <a href="news.html">Corporates Payment</a>
                    </li>
                </ol>
            </section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Corporates
                            </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered text-center" id="fitness-table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Corporate</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Subscribution(Month)</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Expired Date</th>
                                            <th class="text-center">Edit/Save</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($payment->created_at); ?></td>
                                             <td><?php echo e($payment->corporate_id); ?></td>
                                            <td><?php echo e($payment->corporate_id); ?> Email</td>
                                            <td><?php echo e($payment->month); ?></td>
                                            <td><?php echo e($payment->amount); ?></td>
                                            <td><?php echo e($payment->expirydate); ?></td>
                                           <td>
                                                <a class="edit btn btn-primary" href="<?php echo e(route('payment.edit',['id'=>$payment->id])); ?>">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="<?php echo e(route('payment.destroy',['id'=>$payment->id])); ?>">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                           
                                      </tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Mac OS emm/job/etouch/Project/gms/resources/views/manager/payment/index.blade.php ENDPATH**/ ?>