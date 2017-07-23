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
                                <h4 class="modal-title">Add Menu</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Menu Name</label>
                                        <input type="text" class="form-control" name="menuName" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp. </span>
                                            <input type="text" class="form-control" name="menuPrice">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="menuCategory" required class="form-control">
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Menu Detail</label>
                                        <textarea name="menuDetail" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Menu Image</label>
                                        <input type="file" class="form-control" name="menuImg" required>
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
                
                <div class="modal fade" id="editMerchant-" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Menu</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label>Menu Name</label>
                                        <input type="text" class="form-control" name="menuName" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp. </span>
                                            <input type="text" class="form-control" name="menuPrice">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="menuCategory" required class="form-control">
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Menu Detail</label>
                                        <textarea name="menuDetail" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Menu Image</label>
                                        <input type="file" class="form-control" name="menuImg" required>
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

                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-success" data-toggle="modal" data-target="#addMerchant"><span class="fa fa-plus"></span> Add Menu</button>
                    </div><hr>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Menu List</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1">Image</th>
                                            <th class="col-md-3">Menu Name</th>
                                            <th class="col-md-1">Price</th>
                                            <th class="col-md-1">Category</th>
                                            <th class="col-md-5">Detail</th>
                                            <th class="col-md-1">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                <td><img src="<?php echo base_url('uploads/mucho.png') ?>" class="img-responsive" style="max-width:50px;max-height:50px;"></td>
                                                <td>menu name</td>
                                                <td>100000</td>
                                                <td>Makanan</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut molestias corrupti sit voluptatibus impedit</td>
                                                <td class="text-center">
                                                    <a href="#" data-toggle="modal" data-target="#editMerchant-" class="btn btn-warning btn-sm"><span class="fa fa-pencil"></span></a>
                                                    <a href="" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                                </td>
                                            </tr>
                                        
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
