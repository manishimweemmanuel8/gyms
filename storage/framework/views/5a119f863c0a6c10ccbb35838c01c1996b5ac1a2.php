<?php $__env->startSection('content'); ?>

  <aside class="right-side right-padding">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h2>Add Corporate Customer</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="">
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Corporate Customer</a>
                    </li>
                    <li>
                        <a href="add_users.html" class="activated">Add Corporate Customer</a>
                    </li>
                </ol>
            </section>
            <!--section ends-->
            <div class="container-fluid">
                <!--main content-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Basic charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <i class="fa fa-fw fa-user"></i> Add Corporate Customer
                                </h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form id="add_users_form" method="post" action="<?php echo e(route('client.store')); ?>" class="form-horizontal">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="form-body">

                                                
                                              
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="usr_name">
                                                        Names
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-user-md text-primary"></i>
                                                            </span>
                                                            <input type="text" class="form-control" id="usr_name" placeholder="names" name="names">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="contact">
                                                        Card Code
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-numnber text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder="Card Code" id="contact" class="form-control" name="cardCode" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-md-3 control-label" for="contact">
                                                        Contact Number
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-phone text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder="Phone Number" id="contact" class="form-control" name="phone" />
                                                        </div>
                                                    </div>
                                                </div>

                                               <!-- <hr class="new5" > -->
                                                <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <i class="fa fa-fw fa-money"></i> Subscription Plan
                                                </h4>
                                               
                                            </div>
                                               
                                                
                                                 <div class="form-group">
                                                     <label class="col-md-3 control-label" for="usr_name">
                                                        Subscriptions
                                                        <span class='require'>*</span>
                                                    </label>
                                                     <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-cart text-primary"></i>
                                                            </span>
                                                        <select class="form-control" name="subscription_id" id="courses">
                                                            <option value="">--- Select subscriptions ---</option>
                                                            <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($subscription->id); ?>"><?php echo e($subscription->name); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                                   <div class="form-group">
                                                    <label class="col-md-3 control-label" for="contact">
                                                        Expire Date
                                                        <span class='require'>*</span>
                                                    </label>
                                                    <div class="col-md-7">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-date text-primary"></i>
                                                            </span>
                                                            <input type="date" id="contact" class="form-control" name="expirydate" />
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        
                                                         <button type="submit" class="btn btn-primary">Add</button>
                                                        
                                                        <input type="reset" class="btn btn-white " value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <!-- col-md-6 -->
                <!--row -->
                <!--row ends-->
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('receptionist.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Mac OS emm/job/etouch/Project/gms/resources/views/receptionist/client/create.blade.php ENDPATH**/ ?>