<?php include(APPDIR. 'views/admin/layouts/header.php'); ?>

<div id="wrapper">
    <?php include(APPDIR. 'views/admin/layouts/nav.php'); ?>

    <div class="main">
        <div class="main-content">
            <div class="container-fluid">

                <div class="col-lg-6">
                    <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="/admin/listing/store">
                        <?php include(APPDIR. 'views/admin/layouts/errors.php'); ?>

                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Description</label>
                            <input type="text" name="description" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Website Url</label>
                            <input type="text" name="website_url" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="name" class="control-label">Phones</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select name="categories[]" id="msa" multiple required>
                                <?php foreach($categories as $category) { ?>
                                <option value="<?php echo $category->id; ?>">
                                    <?php echo $category->title ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label">Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="file" name="images[]" multiple required>
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