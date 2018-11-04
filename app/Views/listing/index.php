<?php include(APPDIR. 'views/admin/layouts/header.php'); ?>

<div id="wrapper">
    <?php include(APPDIR. 'views/admin/layouts/nav.php'); ?>

    <div class="main">

        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Listings</h3>
                <?php include(APPDIR. 'views/admin/layouts/errors.php'); ?>
                <div class="row">
                    <div class="col-md-6">
                        <!-- BASIC TABLE -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Listing</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($listings as $listing){ ?>
                                        <tr>
                                            <td>
                                                <?php echo $listing->name ?>
                                            </td>
                                            <td>
                                                <form action="/admin/listing/edit/<?php echo $listing->id  ?>" method="get">
                                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                                            class="btn btn-success btn-xs"><span class="fa fa-pencil fa-fw"></span></button></p>
                                                </form>
                                            </td>
                                            </td>
                                            <td>
                                                <form action="/admin/listing/delete/<?php echo $listing->id ?>" method="post">
                                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                                            class="btn btn-danger btn-xs"><span class="fa fa-trash fa-fw"></span></button></p>
                                                </form>
                                            </td>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC TABLE -->
                    </div>

                </div>
            </div>


<?php include(APPDIR. 'views/admin/layouts/footer.php') ?>