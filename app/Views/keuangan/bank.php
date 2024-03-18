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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/">Keuangan</a></li>
                        <li class="breadcrumb-item active">Bank</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Bank</h3>
                            <p></p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <a href="#" class="small-box-footer"><i class="fas fa-arrow-circsle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->

                <!-- ./col -->
            </div>
            <div class="col-md-12">
                <!-- general form elements disabled -->
                <div class="card card-secondary">
                    <div class="card-header">

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                                    Tambah Kas Kecil
                                </button>

                                <div class="modal fade" id="modal-xl" style="color:black">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Extra Large Modal</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria- <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>Tanggal</label>
                                                                <div class="input-group">
                                                                    <input type="date" class="form-control" />

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Dari/Kepada</label><select class="form-control" style="width: 100%;">
                                                                    <option selected="selected"></option>
                                                                    <option></option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>No. Urut</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <!-- text input -->
                                                            <div class="form-group">
                                                                <label>No. Ref</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label>M/K</label><select class="form-control" style="width: 100%;">
                                                                    <option selected="selected"></option>
                                                                    <option>M</option>
                                                                    <option>K</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div id="frm">
                                                        <div class="row">

                                                        </div>
                                                        <div class="row" id="row1">
                                                            <div class="col-sm-2"><!-- text input -->
                                                                <div class="form-group">
                                                                    <label>Perkiraan</label><select class="form-control select2" style="width: 100%;" name='nama[1]' id="selectkod">
                                                                        <option selected="selected"></option>
                                                                        <option>11111 - Transfer Bank BRI</option>
                                                                        <option>11112 - Transfer Bank BCA</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3"><!-- text input -->
                                                                <div class="form-group"><label>Uraian</label>
                                                                    <div class="input-group"><input type="text" class="form-control" name='gudang[1]' id="gudang[1]" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"><!-- text input -->
                                                                <div class="form-group"><label>Jenis</label>
                                                                    <div class="input-group"><input type="text" class="form-control" name='ball[1]' id="ball[1]" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <div class="form-group"> <label>Bayar</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" name='qty[1]' id="qty[1]" /> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"> <!-- text input -->
                                                                <div class="form-group"> <label>No. Ch/Gb</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" name='harga[1]' id="harga[1]" /> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"> <!-- text input -->
                                                                <div class="form-group"> <label>Tanggal JT</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" name='jumlah[1]' id="jumlah" /> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"> <!-- text input -->
                                                                <div class="form-group"> <label>Penerimaan</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" name='jumlah[1]' id="jumlah" /> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-1"> <!-- text input -->
                                                                <div class="form-group"> <label>Pengeluaran</label>
                                                                    <div class="input-group"> <input type="text" class="form-control" name='jumlah[1]' id="jumlah" /> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">



                                                        </div>


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
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <div class="input-group">
                                            <input type="date" class="form-control" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Dari/Kepada</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected"></option>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>No. Ref</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>No. Urut</label>
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
                                            <th>Perkiraan</th>
                                            <th>Nama Perkiraan</th>
                                            <th>Uraian</th>
                                            <th>Jenis</th>
                                            <th>Bayar</th>
                                            <th>No. Ch/Gb</th>
                                            <th>Tanggal JT</th>
                                            <th>Penerimaan</th>
                                            <th>Pengeluaran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>11201</td>
                                            <td>Transfer Bank</td>
                                            <td>PELUNASAN BU PUJI</td>
                                            <td>1</td>
                                            <td>TUNAI</td>
                                            <td>-</td>
                                            <td>04/03/2023</td>
                                            <td>Rp. 1.350.000,-</td>
                                            <td>-</td>

                                        </tr>
                                        <tr>
                                            <td>11205</td>
                                            <td>Transfer Bank</td>
                                            <td>PENGISIHAN KE KAS KECIL</td>
                                            <td>1</td>
                                            <td>TUNAI</td>
                                            <td>-</td>
                                            <td>04/03/2023</td>
                                            <td>-</td>
                                            <td>Rp. 1.350.000,-</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                        <form action="/pembelian-print" method="post" target="_blank">
                            <div class="row no-print">

                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="logo" value="PRJ" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">

                                    <button type="submit" href="/pembelian-print" class="btn btn-default"><i class="fas fa-print"></i> Print</button>

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<script>
    $("#data").hide();
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
            $('#frm').append('<div class="row" id="row' + i + '"> <div class="col-sm-2"><!-- text input --> <div class="form-group"> <select class="form-control select2" style="width: 100%;" name= id="selectkod"> <option selected="selected"></option> <option>11111 - Transfer Bank BRI</option> <option>11112 - Transfer Bank BCA</option> </select> </div> </div> <div class="col-sm-3"><!-- text input --> <div class="form-group"> <div class="input-group"><input type="text" class="form-control" name= id="gudang[1]" /></div> </div> </div> <div class="col-sm-1"><!-- text input --> <div class="form-group"> <div class="input-group"><input type="text" class="form-control" name= id="ball[1]" /></div> </div> </div> <div class="col-sm-1"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name= id="qty[1]" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name= id="harga[1]" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name= id="jumlah" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control" name= id="jumlah" /> </div> </div> </div> <div class="col-sm-1"> <!-- text input --> <div class="form-group"><div class="input-group"> <input type="text" class="form-control" name= id="jumlah" /> </div> </div> </div> <div class="col-sm-1"> <button id="' + i + '" type="button" class="btn btn-danger rm"><i class="fas fa-minus"></i></button> </div></div>');

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

    $('#selectkod').on('change', function() {
        var a = $(this).attr('name');
        var split = a.match(/\d+/);
        alert('#gudang[' + split + ']');
        $('#gudang[' + split + ']').val("GPS").change();
        $('#harga[' + split + ']').val(30000).change();
        $('#ball[' + split + ']').val(20).change();


        // var id = this.value;


        //     $.ajax({
        //         type: "post",
        //         url: "getnamaitem",
        //         dataType: 'json',
        //         data: {
        //             id: id
        //         },
        //         success: function(response) {
        //             console.log(response)
        //         },
        //         error: (error) => {
        //             console.log(JSON.stringify(error));
        //         }
        //     })
        //     // $('#selectnam').val("MEJA NGAJI").change();
    });

    $('#qty').on('change', function() {
        var qty = this.value;
        var ball = $('#ball').val()
        var harga = $('#harga').val()
        var jumlah = qty * ball;
        $('#jumlah').val(jumlah * harga).change();
    })

    $('#sub').on('click', function() {
        $("#data").toggle(1000);
    })
</script>