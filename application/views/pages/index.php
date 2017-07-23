<!-- Page Content -->
<div class="container"><br>
    <div class="col-lg-12 text-center">
        <h1>Food Court</h1>   
        <img src="<?php echo base_url() ?>assets/images/food.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird">   
        <p>Food Is My Best Friend</p>
    </div><hr>
        <div class="row">
            <div class="col-lg-8">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 text-center">
                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo base_url() ?>uploads/ayam.png" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item One</a></h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" data-toggle="modal" data-target="#info">Info</button>
                                <button class="btn btn-info" data-toggle="modal" data-target="#menu">Menu</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 text-center">
                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo base_url() ?>uploads/martabak.jpg" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Two</a></h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" data-toggle="modal" data-target="#info">Info</button>
                                <button class="btn btn-info" data-toggle="modal" data-target="#menu">Menu</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 text-center">
                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo base_url() ?>uploads/sosis.jpg" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Three</a></h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" data-toggle="modal" data-target="#info">Info</button>
                                <button class="btn btn-info" data-toggle="modal" data-target="#menu">Menu</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 text-center">
                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo base_url() ?>uploads/sosis.jpg" alt=""></a>
                            <div class="card-block">
                                <h4 class="card-title"><a href="#">Item Three</a></h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-info" data-toggle="modal" data-target="#info">Info</button>
                                <button class="btn btn-info" data-toggle="modal" data-target="#menu">Menu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="row">
                    <h4>Order</h4>
                    <div class="col-lg-12 form-group">
                        <label>Table Number</label>
                        <input type="number" class="form-control" name="tableNumber">
                    </div>
                    <div class="col-lg-12 form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" name="customerName">
                    </div>
                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <td class="col-lg-6">Menu Item</td>
                                <td class="col-lg-1">Qty</td>
                                <td class="col-lg-5">Merchant</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama Menu 1</td>
                                <td class="text-center">4</td>
                                <td>MD01</td>
                            </tr>
                            <tr>
                                <td>Nama Menu 2</td>
                                <td class="text-center">3</td>
                                <td>MD01</td>
                            </tr>
                            <tr>
                                <td>Nama Menu 3</td>
                                <td class="text-center">2</td>
                                <td>MD01</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><a href="#" class="btn btn-primary">Proses</a></td>
                                <td></td>
                                <td><a href="#" class="btn btn-danger">Cancel</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Modal Info Merchant -->
        <div class="modal fade" id="info" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>This is a large modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Menu Merchant -->
        <div class="modal fade" id="menu" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Menu</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Makanan</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table table-hover table-responsive col-lg-12" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th>Select</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>lalalalaaaaaaaa</td>
                                                    <td>100000</td>
                                                    <td><input type="number" class="form-control col-lg-6"></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Minuman</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table table-hover table-responsive col-lg-12" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Price</th>
                                                    <th>Qty</th>
                                                    <th>Select</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>lalasdalsldkn</td>
                                                    <td>99999900</td>
                                                    <td><input type="number" class="form-control col-lg-6"></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->


