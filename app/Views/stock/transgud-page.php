<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Stock</a></li>
                        <li class="breadcrumb-item"><a href="#">Transfer Gudang</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Stock</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circsle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- retail start -->
                    <div class="card card-secondary">
                        <div class="card-header">

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                                        Tambah Data
                                    </button>

                                    <div class="modal fade" id="modal-xl" style="color:black">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Extra Large Modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Tanggal</label>
                                                                    <div class="input-group">
                                                                        <input type="date" class="form-control" />

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="form-group">
                                                                    <label>Gudang Tujuan</label><select class="form-control select2" style="width: 100%;">
                                                                        <option selected="selected"></option>
                                                                        <option></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div id="frm">
                                                            <div class="row">

                                                            </div>
                                                            <div class="row" id="row1">
                                                                <div class="col-sm-3"><!-- text input -->
                                                                    <div class="form-group">
                                                                        <label>Barang</label><select class="form-control select2" style="width: 100%;" name='nama[1]' id="selectkod">
                                                                            <option selected="selected"></option>
                                                                            <option></option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1"><!-- text input -->
                                                                    <div class="form-group"><label>No. Ref</label>
                                                                        <div class="input-group"><input type="text" class="form-control" name='gudang[1]' id="gudang[1]" /></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2"><!-- text input -->
                                                                    <div class="form-group"><label>Gudang Asal</label>
                                                                        <div class="input-group"><input type="text" class="form-control" name='ball[1]' id="ball[1]" /></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <div class="form-group"> <label>Ball</label>
                                                                        <div class="input-group"> <input type="text" class="form-control" name='qty[1]' id="qty[1]" /> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1"> <!-- text input -->
                                                                    <div class="form-group"> <label>Qty</label>
                                                                        <div class="input-group"> <input type="text" class="form-control" name='harga[1]' id="harga[1]" /> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1"> <!-- text input -->
                                                                    <div class="form-group"> <label>Satuan</label>
                                                                        <div class="input-group"> <input type="text" class="form-control" name='disc[1]' id="jumlah" /> </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2"> <!-- text input -->
                                                                    <div class="form-group"> <label>Jumlah</label>
                                                                        <div class="input-group"> <input type="text" class="form-control" name='jumlah[1]' id="jumlah" /> </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">



                                                            </div>
                                                            <!-- <div class="row">
                                                            <div class="col-sm-3"> 
                                                                <div class="form-group"> <label>PPN%</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" /> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3"> 
                                                                <div class="form-group"> <label>PPN</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" /> </div>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <button id="add" type="button" class="btn btn-default">Tambah Item</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Tanggal Terima</label>
                                            <div class="input-group">
                                                <input type="date" class="form-control" />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Gudang Tujuan</label>
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option selected="selected"></option>

                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No. Ref</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" />

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <a type="" id="sub" class="btn btn-primary" style="color: aliceblue;">Tampil</a>


                                </div>


                            </form>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                    <div class="row">
                        <div class="col-12" id="data">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Responsive Hover Table</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>No.Ref</th>
                                                <th>Gudang Asal</th>
                                                <th>Ball</th>
                                                <th>Qty</th>
                                                <th>Satuan</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>EXM-001 KURSI DINGKLIK</td>
                                                <td>BL31.00009</td>
                                                <td>GPS</td>
                                                <td>20</td>
                                                <td>2</td>
                                                <td>-</td>
                                                <td>40</td>

                                            </tr>
                                            <tr>
                                                <td>EXM-002 MEJA NGAJI</td>
                                                <td>BL31.00009</td>
                                                <td>GPS</td>
                                                <td>10</td>
                                                <td>4</td>
                                                <td>-</td>
                                                <td>40</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="/tg-print" target="_blank" class="btn btn-success float-right"><i class="fas fa-print"></i> Print Transfer Gudang</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script src="plugins/select2/js/select2.full.min.js"></script>
<script>
    var i = 1;
    var l = 0;
    $(document).ready(function() {
        var x = 1;
        var frm = document.getElementById("#add");
        $("#add").click(function(u) {
            x++;
            i++;
            l++;
            $('#' + l + '').hide();
            $('#frm').append('<div class="row" id="row' + i + '"> <div class="col-sm-3"><!-- text input --> <div class="form-group"> <select class="form-control select2" style="width: 100%;" name="nama[1]" id="selectkod"> <option selected="selected"></option> <option></option> </select> </div> </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"><div class="input-group"><input type="text" class="form-control" name="gudang[1]" id="gudang[1]" /></div> </div> </div> <div class="col-sm-2"><!-- text input --> <div class="form-group"><div class="input-group"><input type="text" class="form-control" name="ball[1]" id="ball[1]" /></div> </div> </div> <div class="col-sm-1"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name="qty[1]" id="qty[1]" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name="harga[1]" id="harga[1]" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group">  <div class="input-group"> <input type="text" class="form-control" name="disc[1]" id="jumlah" /> </div> </div> </div> <div class="col-sm-2"> <!-- text input --> <div class="form-group"><div class="input-group"> <input type="text" class="form-control" name="jumlah[1]" id="jumlah" /> </div> </div> </div> <div class="col-sm-1"> <button id="' + i + '" type="button" class="btn btn-danger rm"><i class="fas fa-minus"></i></button> </div>  </div>');

            $('.select2').select2();
        });
    })
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    });
    $(document).on('click', '.rm', function() {
        var button_id = $(this).attr("id");
        console.log('#row' + button_id + '');
        $('#row' + button_id + '').remove();
        $('#' + (button_id - 1) + '').show();
        i--;
        l--;
    });
</script>
<!-- /.content-wrapper -->