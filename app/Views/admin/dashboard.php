<?php include(APPDIR. 'views/admin/layouts/header.php'); ?>

<div id="wrapper">
    <?php include(APPDIR. 'views/admin/layouts/nav.php'); ?>

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">

                <div class="col-lg-6">
                    <form class="form-vertical" role="form" method="post" action="">
                        <?php include(APPDIR. 'views/admin/layouts/errors.php'); ?>

                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" value="">
                        </div>



                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include(APPDIR. 'views/admin/layouts/footer.php') ?>