<?php include(APPDIR. 'views/website/layouts/header.php'); ?>

<?php

use App\Models\Listing;

?>

<main class="section-main">
    <div class="container container-palette bg-first">
        <div class="container">
            <div class="swap-md-down row">
                <div class="col-md-8 swap-bottom left-side">
                    <div class="widget widget-recentproperties">
                        <div class="row result-container row-flex">
                            <?php foreach($listings as $listing){ ?>
                            <div class="col-xs-12">
                                <div class="thumbnail thumbnail-property thumbnail-property-list nohover">
                                    <?php $listing_images = new Listing(); 
                                    $images = $listing_images->get_listing_images($listing->id); 
                                    ?>
                                    <?php foreach($images as $image){?>
                                    <div class="thumbnail-image"><img src="<?php echo $image->image_name ?>" alt="" /></div>
                                    <?php } ?>
                                    <div class="caption">
                                        <div class="header">
                                            <div class="left">
                                                <h2 class="thumbnail-title"><a href="">
                                                        <?php echo $listing->name ?></a></h2>
                                            </div>
                                        </div>
                                        <ul class="list-comment">
                                            <li>
                                                <p>Email:
                                                    <?php echo $listing->email ?>
                                                </p>
                                                <p>Phone:
                                                    <?php echo $listing->phone ?>
                                                </p>
                                                <p>Website:
                                                    <?php echo $listing->website_url ?>
                                                </p>
                                                <p>Description:
                                                    <?php echo $listing->description ?>
                                                </p>
                                                <p>Address:
                                                    <?php echo $listing->address ?>
                                                </p>
                                                <p>Categories:
                                                    <?php $listing_category = new Listing();
                                                     $categories = $listing_category->get_listing_category($listing->id);
                                                     foreach($categories as $category){
                                                        echo $category->title. ' ';
                                                     }
                                                     ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include(APPDIR. 'views/website/layouts/footer.php'); ?>