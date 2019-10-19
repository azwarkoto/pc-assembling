<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Brand Processor
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('master/tambah_processor') ?>"><i class="fa fa-circle-o"></i> Master Rakit</a></li>
            <li><a href="<?= base_url('master/processor') ?>"><i class="fa fa-circle-o"></i> Processor</a></li>
            <li><a href="<?= base_url('master/tambah_processor') ?>"><i class="fa fa-circle-o"></i> Brand Processor</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Data Master Brand Processor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url('master/aksi_ubah_brand_processor') ?>" method="post">
                <div class="box-body">
                    <div class="form-group col-md-8">
                        <label for="brand">Brand Processor</label>
                        <?php foreach ($brand_processor as $b) : ?>
                            <input type="hidden" name="id" value="<?= $b->id ?>">
                            <input type="text" id="brand" name="brand_processor" class="form-control" autofocus value="<?= $b->brand_processor ?>">
                        <?php endforeach ?>
                    </div>
                    <div class="form-group col-md-8">
                        <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i> Ubah</button>
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->