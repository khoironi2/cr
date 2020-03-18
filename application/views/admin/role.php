<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>






    <div class="row">

        <div class="col-lg-6">
            <?= validation_errors(); ?>
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>

            <?= $this->session->flashdata('message'); ?>


            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>


            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php echo $r->role; ?></td>
                            <td>
                                <a class="badge badge-warning" href="<?= base_url('admin/roleaccess/') . $r->id; ?>">Accesst</a>
                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#Modaledit<?php echo $r->id; ?>">Edit</a>
                                <a class="badge badge-danger" href="<?= base_url('menu/delete/') . $r->id; ?>">Delete</a>


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
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
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




<!-- Modal Edit -->

<?php foreach ($role as $row) : ?>
    <div class="modal fade" id="Modaledit<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="<?= base_url('menu/update');  ?>">
                    <div class="modal-body">

                        <div class="form-group">

                            <input type="text" class="form-control" id="menu" name="menu" value="<?php echo $row->menu; ?>" placeholder="Role name">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $row->id; ?>">
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