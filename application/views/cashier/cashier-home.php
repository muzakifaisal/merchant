<!-- Page Content -->
<div class="container"><br>
    <div class="col-lg-12 text-center">
        <h1>Food Court</h1>   
        <img src="<?php echo base_url() ?>assets/images/food.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird">   
        <p>Food Is My Best Friend</p>
    </div><hr>
        <div class="row">
            <div class="col-lg-12">
                <form action="#" class="form-inline">
                    <div class="form-group">
                        <label>No Table</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Find</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered" id="tableOrder">
                    <thead>
                        <tr>
                            <td>ID Order</td>
                            <td>No Table</td>
                            <td>Customer Name</td>
                            <td>Total Price</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                        <tr>
                            <td>adadasdasd</td>
                            <td>asdfsdfs</td>
                            <td>sdf</td>
                            <td>sdf</td>
                            <td><button class="btn btn-info" data-toggle="modal" data-target="#orderModal">asd</button></td>
                        </tr>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal Info Merchant -->
        <div class="modal fade" id="orderModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Header</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label>ID Menu</label>
                                <input type="text" name="idMenu" class="form-control col-lg-4" readonly>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" name="dateOrder" class="form-control col-lg-4" readonly>
                            </div>
                            <div class="form-group">
                                <label>Customer</label>
                                <input type="text" name="customer" class="form-control col-lg-4" readonly>
                            </div>
                            <div class="form-group">
                                <table class="table table-striper">
                                    <thead>
                                        <tr>
                                            <th>Menu Item</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>menu 1</td>
                                            <td>2</td>
                                            <td>100000</td>
                                            <td>10000</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <tr class="pull-right">
                                            <td>SUB Total</td>
                                            <td>:</td>
                                            <td><input type="text" name="subTotal" class="form-control col-lg-3" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <td>:</td>
                                            <td><input type="text" name="tax" class="form-control col-lg-3" readonly></td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>:</td>
                                            <td><input type="text" name="total" class="form-control col-lg-3" readonly></td>
                                        </tr>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->


