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
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php echo $sm->title; ?></td>
                            <td><?php echo $sm->menu; ?></td>
                            <td><?php echo $sm->url; ?></td>
                            <td><?php echo $sm->icon; ?></td>
                            <td><?php echo $sm->is_active; ?></td>

                            <td>
                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#SubmenuModaledit<?= $sm->idsm; ?>">Edit</a>
                                <a class="badge badge-danger" href="<?= base_url('menu/deletesubmenu/') . $sm->idsm; ?>">Delete</a>


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
                            <?php foreach ($menu as $m) : ?>

                                <option value="<?php echo $m->id; ?>"><?php echo $m->menu; ?></option>

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

<?php foreach ($subMenu as $sm) : ?>
    <div class="modal fade" id="SubmenuModaledit<?= $sm->idsm; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="text" class="form-control" id="title" name="title" value="<?= $sm->title; ?>" placeholder="menu name">
                            <input type="text" hidden class="form-control" name="id" value="<?= $sm->idsm; ?>" placeholder="menu name">

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Menu from</label>
                            </div>

                            <select name="menu_id" class="custom-select" id="inputGroupSelect01">
                                <option value="<?php echo $m->id; ?>" selected><?= $sm->menu; ?></option>
                                <?php foreach ($menu as $m) : ?>

                                    <option value="<?php echo $m->id; ?>"><?php echo $m->menu; ?></option>

                                <?php endforeach ?>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control" id="url" name="url" value="<?= $sm->url; ?>" placeholder="menu name">

                        </div>

                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm->icon; ?>" placeholder="menu name">

                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $sm->is_active; ?>" placeholder="menu name">

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