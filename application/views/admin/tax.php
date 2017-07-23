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
                <!-- ADD TAX MODAL -->
                <div class="modal fade" id="addTax" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content modal-md">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Tax</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() ?>managetax/addtax" method="POST">
                                    <div class="form-group form-inline">
                                        <label>Tax Name</label>
                                        <input type="text" name="taxName" class="form-control" required>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label>Tax Value</label>
                                        <div class="input-group">
                                            <input type="number" name="precentage" class="form-control" required>
                                        <span class="input-group-addon"><b>%</b></span>
                                        </div>
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
                <!-- END ADD TAX MODAL -->
                <!-- EDIT TAX MODAL -->
                <?php foreach ($taxData->result_array() as $key): ?>
                <div class="modal fade" id="editTax-<?php echo $key['ID_TAX'] ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Cashier</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url() ?>Managetax/edittax" method="POST">
                                    <div class="form-group form-inline">
                                        <label>Tax Name </label>
                                        <input type="text" hidden name="idTax" value="<?php echo $key['ID_TAX'] ?>">
                                        <input type="text" name="editTaxName" class="form-control" required value="<?php echo $key['NAMETAX'] ?>">
                                    </div>
                                    <div class="form-group form-inline">
                                        <label>Tax Status </label>
                                        <select name="editStatus" class="form-control">
                                            <option value="--1">------ Select Once -------</option>

                                        </select>
                                    </div>
                                    <div class="form-group form-inline">
                                        <label>Tax Value</label>
                                        <div class="input-group">
                                            <input type="number" name="editPrecentage" class="form-control" required value="<?php echo $key['PRECENTAGE'] ?>">
                                        <span class="input-group-addon"><b>%</b></span>
                                        </div>
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
                <!-- END EDIT TAX MODAL -->

                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-success" data-toggle="modal" data-target="#addTax"><span class="fa fa-plus"></span> Add Tax</button>
                    </div><hr>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Tax List</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Tax Name</th>
                                            <th class="col-lg-1">%</th>
                                            <th>Status</th>
                                            <th class="col-lg-3 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($taxData->result_array() as $key): ?>
                                            <tr>
                                                <td><?php echo $key['NAMETAX'] ?></td>
                                                <td><?php echo $key['PRECENTAGE'] ?></td>
                                                <td>TEST</td>
                                                <td class="text-center">
                                                    <a href="#" data-toggle="modal" data-target="#editTax-<?php echo $key['ID_TAX'] ?>" class="btn btn-warning btn-sm" style="width:100px">Edit</span></a> |
                                                    <a href="<?php echo base_url('admin/tax/delete/').$key['ID_TAX'] ?>" class="btn btn-danger btn-sm" style="width:100px">Delete</span></a>
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
