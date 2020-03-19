<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>






    <div class="row">

        <div class="col-lg">


            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubmenuModal">Add New Submenu</a>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Product</th>
                        <th scope="col">Paket Price</th>
                        <th scope="col">Revisi Max</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($paket as $sm) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php echo $sm->nama_pp; ?></td>
                            <td><?php echo $sm->nama_p; ?></td>
                            <td><?php echo $sm->harga_pp; ?></td>
                            <td><?php echo $sm->max_revisi; ?></td>
                            <td><?php echo $sm->harga_total; ?></td>

                            <td>
                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#SubmenuModaledit<?= $sm->idpp; ?>">Edit</a>
                                <a class="badge badge-danger" href="<?= base_url('menu/deletesubmenu/') . $sm->idpp; ?>">Delete</a>


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
                <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= base_url('menu');  ?>">
                <div class="modal-body">

                    <div class="form-group">

                        <input type="text" class="form-control" id="menu" name="menu" placeholder="menu name">
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

<!-- Modal Add New Submenu -->


<div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Submenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo site_url('menu/submenu');  ?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title">

                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="menu_id">Menu From</label>
                        </div>

                        <select name="menu_id" class="custom-select" id="menu_id">
                            <option selected>Choose..</option>
                            <?php foreach ($paket as $m) : ?>

                                <option value="<?php echo $m->nama_pp; ?>"><?php echo $m->nama_pp; ?></option>

                            <?php endforeach ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="url">Url</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="url">

                    </div>

                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="icon code">

                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Status</label>
                        </div>

                        <select name="is_active" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose..</option>

                            <option value="1">Active</option>
                            <option value="0">Not Active</option>

                        </select>

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



<!-- Modal Edit -->

<?php foreach ($paket as $sm) : ?>
    <div class="modal fade" id="SubmenuModaledit<?= $sm->idpp; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Submenu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('menu/updatesubmenu');  ?>">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="nama_pp" value="<?= $sm->nama_pp; ?>" placeholder="paket name">
                            <input type="text" hidden class="form-control" name="idpp" value="<?= $sm->idpp; ?>" placeholder="">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Max revisi</label>
                            </div>

                            <select name="menu_id" class="custom-select" id="inputGroupSelect01">
                                <option selected><?= $sm->max_revisi; ?></option>
                                <?php foreach ($paket as $m) : ?>

                                    <option value="<?php echo $m->max_revisi; ?>"><?php echo $m->max_revisi; ?></option>

                                <?php endforeach ?>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control" id="url" name="harga_total" value="<?= $sm->harga_total; ?>" placeholder="menu name">

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