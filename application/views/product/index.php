<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>






    <div class="row">

        <div class="col-lg-6">
            <?= validation_errors(); ?>
            <?= form_error('nama_p', '<div class="alert alert-danger" role="alert">', '</div>') ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Add New Product</a>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($product as $m) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php echo $m->nama_p; ?></td>
                            <td><?php echo $m->harga_p; ?></td>
                            <td><?php echo $m->namajp; ?></td>
                            <td>
                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#Modaledit<?php echo $m->idp; ?>">Edit</a>
                                <a class="badge badge-danger" href="<?= base_url('product/delete/') . $m->idp; ?>">Delete</a>


                            </td>

                        </tr>

                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('product');  ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_p" name="nama_p" placeholder="product name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="harga_p" name="harga_p" placeholder="price">
                    </div>


                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Jenis Product</label>
                      </div>
                      <select name="idjp" class="custom-select" id="inputGroupSelect01">
                        <?php foreach ($product as $jp): ?>
                        <option value="<?php echo $jp->idjp; ?>"><?php echo $jp->namajp; ?></option>
                       
                         <?php endforeach ?>
                      </select>
                    </div>




                    <div class="form-group">
                        <input type="text" class="form-control" id="url_img" name="url_img" placeholder="url image">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="url_video" name="url_video" placeholder="url video">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="url_file" name="url_file" placeholder="url file">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- Modal Edit -->

<?php foreach ($product as $row) : ?>
    <div class="modal fade" id="Modaledit<?php echo $row->idp; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('product/update');  ?>">
                    <div class="modal-body">

                        <div class="form-group">

                            <input type="text" class="form-control" id="menu" name="menu" value="<?php echo $row->nama_p; ?>" placeholder="menu name">
                            <input type="hidden" class="form-control" name="idp" value="<?php echo $row->idp; ?>">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach ?>