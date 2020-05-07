<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hasil Validasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
    <!-- Fixed navbar -->
   
    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Hasil Validasi</h3>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered">                                
                        <tr>
                            <td colspan="3">
                                <center>
                                <h1>Visitor Management System</h1>
                                <p>V.1.0.0</p>
                                <hr>
                            </td>
                        </tr>
                    </table>
                   <?php foreach ($get_visitor as $k): ?>   
        
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Foto</th>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Kontak</th>
                            <th>Nomer Identitas</th>
                            <th>Jenis Identitas</th>
                            <th>Keperluan</th>
                            <th>Bertemu dengan</th>
                        </tr>
                        <tr>
                              <td><a href="<?= base_url('uploads/').$k->image ?>"><img width="100px"  src="<?= base_url('uploads/').$k->image ?> "></a></td>
                            <td><?= $k->id ?></td>
                            <td><?= $k->nama_lengkap ?></td>
                            <td><?= $k->kontak ?></td>
                            <td><?= $k->nomer_id ?></td>
                            <td><?= $k->id_card ?></td>
                            <td><?= $k->keperluan ?></td>
                            <td><?= $k->bertemu_dengan ?></td>

                        </tr>
                    </table>
                 <?php endforeach ?>
        
                </div>
                <div class="panel-footer">
                    <center><a class="btn btn-danger" href="./validasi">Kembali</a></center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>