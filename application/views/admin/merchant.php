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
                <div class="modal fade" id="addMerchant" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Merchant</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() ?>ManageMerchant/addmerchant" method="POST">
                                    <div class="form-group">
                                        <label>Merchant Name</label>
                                        <input type="text" name="merchantName" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="merchantUsername" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Merchant Content</label>
                                        <textarea name="merchantContent" class="form-control" rows="10"></textarea>
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
                <?php foreach ($merchantData->result_array() as $key): ?>
                <div class="modal fade" id="editMerchant-<?php echo $key['ID_MERCHANT'] ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Merchant</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() ?>ManageMerchant/editmerchant" method="POST">
                                    <div class="form-group">
                                        <label>Merchant Name</label>
                                        <input type="text" hidden name="idMerchant" value="<?php echo $key['ID_MERCHANT'] ?>">
                                        <input type="text" name="editMerchantName" class="form-control" required value="<?php echo $key['NAME_MERCHANT'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Merchant Content</label>
                                        <textarea name="editMerchantContent" class="form-control" rows="10"><?php echo $key['MERCHANT_CONTENT'] ?></textarea>
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
                        <button class="btn btn-success" data-toggle="modal" data-target="#addMerchant"><span class="fa fa-plus"></span> Add Merchant</button>
                    </div><hr>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Merchant List</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width:10px;">Statistik</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th class="col-lg-3 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($merchantData->result_array() as $key): ?>
                                            <tr>
                                                <td class="text-center"><a href="#"><span class="fa fa-desktop"></span></a></td>
                                                <td><?php echo $key['NAME_MERCHANT'] ?></td>
                                                <td><?php echo substr($key['MERCHANT_CONTENT'],0,100) ?></td>
                                                <td class="text-center">
                                                    <a href="#" data-toggle="modal" data-target="#editMerchant-<?php echo $key['ID_MERCHANT'] ?>" class="btn btn-warning btn-sm" style="width:100px">Edit</span></a> |
                                                    <a href="<?php echo base_url('admin/merchant/delete/').$key['ID_MERCHANT'] ?>" class="btn btn-danger btn-sm" style="width:100px">Delete</span></a>
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
