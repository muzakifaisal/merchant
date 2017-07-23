        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php if(isset($title) == 1){echo $title;} ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?php if(isset($title) == 1){echo $title;} ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- ADD MERCHANT MODAL -->
                <div class="modal fade" id="addCashier" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Cashier</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() ?>Manageuser/addcashier" method="POST">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="fullName" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- END ADD MERCHANT MODAL -->
                <!-- ADD MERCHANT MODAL -->
               <?php foreach ($cashierData->result_array() as $key): ?>
                <div class="modal fade" id="editCashier-<?php echo $key['ID_USER'] ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Cashier</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() ?>Manageuser/editcashier" method="POST">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" hidden name="idUser" value="<?php echo $key['ID_USER'] ?>">
                                        <input type="text" name="editFullName" class="form-control" required value="<?php echo $key['NAME'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="editUsername" class="form-control" required value="<?php echo $key['USERNAME'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input type="password" name="oldPassword" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="newPassword" class="form-control" required>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <!-- END ADD MERCHANT MODAL -->

                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-success" data-toggle="modal" data-target="#addCashier"><span class="fa fa-plus"></span> Add Cashier</button>
                    </div><hr>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Cashier List</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width:10px;">Statistik</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th class="col-lg-3 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cashierData->result_array() as $key): ?>
                                            <tr>
                                                <td class="text-center"><a href="#"><span class="fa fa-desktop"></span></a></td>
                                                <td><?php echo $key['NAME'] ?></td>
                                                <td><?php echo $key['USERNAME'] ?></td>
                                                <td class="text-center">
                                                    <a href="#" data-toggle="modal" data-target="#editCashier-<?php echo $key['ID_USER'] ?>" class="btn btn-warning btn-sm" style="width:100px">Edit</span></a> |
                                                    <a href="<?php echo base_url('admin/cashier/delete/').$key['ID_USER'] ?>" class="btn btn-danger btn-sm" style="width:100px">Delete</span></a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
