<?php $__env->startSection('content'); ?>
<aside class="right-side right-padding">
            <section class="content-header">
                <!--section starts-->
                <h2>Corporates Customer</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index-2.html">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Corporate Customer</a>
                    </li>
                    <li>
                        <a href="news.html">Corporates Customer</a>
                    </li>
                </ol>
            </section>


            <!-- Datatables -->
 
            
                

               

                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- First Basic Table strats here-->
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="fa fa-fw fa-picture-o"></i> Add File
                                </h3>
                            </div>
                            <div class="panel-body" style="padding:30px;">
                                <div class="row">
                                    <p>
                                        File  to Upload must be CSV file.
                                    </p>
                                    <?php if(Session::has('message')): ?>
        <p ><?php echo e(Session::get('message')); ?></p>
     <?php endif; ?>

                                    <form method='post' class="form-inline" action="<?php echo e(url('manager/uploadFile')); ?>" enctype='multipart/form-data' >
                                       <?php echo e(csrf_field()); ?>

                                       <input type='file' name='file' >
                                       <input type='submit' name='submit' value='Import'>
                                     </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->


            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i> Customers
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
                                            <th class="text-center">Card code</th>
                                            <th class="text-center">Names</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center"> Corporate</th>
                                            <th class="text-center">Edit/Save</th>
                                            <th class="text-center">Delete/Cancel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($customer->created_at); ?></td>
                                             <td><?php echo e($customer->cardCode); ?></td>
                                            <td><?php echo e($customer->names); ?></td>
                                            <td><?php echo e($customer->phone); ?></td>
                                            <td><?php echo e($customer->corporate_id); ?></td>
                                           <td>
                                                <a class="edit btn btn-primary" href="<?php echo e(route('customer.edit',['id'=>$customer->id])); ?>">
                                                    <i class="fa fa-fw fa-edit"></i> Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a class="delete btn btn-danger" href="<?php echo e(route('customer.destroy',['id'=>$customer->id])); ?>">
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
<?php echo $__env->make('manager.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Mac OS emm/job/etouch/Project/gms/resources/views/manager/customer/index.blade.php ENDPATH**/ ?>