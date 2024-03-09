<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Process form data
    
//     // Redirect user to another page to prevent form resubmission
//     header("Location: " . home_url() . "/new-page/");
//     exit(); // Stop further execution
// }


/**Template Name: New age Template */

get_header();

// Initialize session variables
if (!isset($_SESSION['selectedItems'])) {
    $_SESSION['selectedItems'] = '';
}
if (!isset($_SESSION['totalPrice'])) {
    $_SESSION['totalPrice'] = 0;
}

// Retrieve selected items from the hidden input field and store them in session
if (isset($_POST['selected-items'])) {
    $_SESSION['selectedItems'] = $_POST['selected-items'];
}

// Retrieve total price from the form and store it in session
$totalPrice = 0;
if (!empty($_POST['items'])) {
    foreach ($_POST['items'] as $item) {
        $totalPrice += $item;
    }
    $_SESSION['totalPrice'] = $totalPrice;
}

// Retrieve selected items and total price from session
$selectedItems = $_SESSION['selectedItems'];
$totalPrice = $_SESSION['totalPrice'];

// Decode JSON data and check if decoding was successful
$dataArray = json_decode(stripslashes($selectedItems), true);
if ($dataArray === null) {
    $dataArray = []; // Set empty array if JSON decoding fails
}
//print_r($selectedItems)
?>


<section class="hero hero-service corporate relative before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-[rgb(0,0,0,0.5)]">

    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_blog-inner.webp" alt="create-menu" class="w-full min-h-[200px] object-cover">




    <div class="absolute top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] flex items-center md:gap-2.5 gap-1.5 justify-center w-[90%]">
        <?php custom_astra_breadcrumbs(); ?>
    </div>

</section>

<!-- Display selected items and total price -->

<section class="create-list  md:mb-[120px] lg:mt-[70px] md:mt-12 mt-8 mb-[80px] lg:pb-100 md:pb-10">
    <div class="container m-auto md:px-4 !px-0">

        <div class="text-center">
            <h2 class="lg:text-[42px] text-3xl bagdoll-display text-primary">Create your lists</h2>

            <p class="lg:text-xl md:text-lg text-base text-dark-grey font-medium md:w-[50%] m-auto mt-4">Start adding your
                favourite food items, beverages, starters and so many things.</p>
        </div>


        <div class="menu-content-list md:rounded-lg md:bg-white lg::mt-16 md:mt-12 mt-8">
            <div class="bg-primary md:rounded-tl-lg md:rounded-tr-lg py-2.5 lg:mb-14 md:mb-8">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_logo.svg" alt="logo" class="md:w-28 md:h-28 w-14 h-14 m-auto">
            </div>


            <div class="md:flex hidden gap-2 items-center justify-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
                <span class="lg:text-xl md:text-lg text-base text-primary font-semibold uppercase">menu</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal-spoons.svg" width="27" height="26" alt="maharwal-spoons">
            </div>

            <div id="selected-items">
                <div class="menu-item-list lg:px-14 md:px-8 px-4 ">
                    <div class="grid grid-cols-12 xl:gap-24 md:gap-10 pt-2.5  lg:pb-16 md:pb-10">
                        <div class="md:col-span-4 col-span-12">
                            <div class="beverage-list md:mt-10 mt-6">
                                <?php
                                $groupedItems = [];
                                foreach ($dataArray as $item) {
                                    $category = $item['category'];
                                    $groupedItems[$category][] = $item;
                                }
                                // Start the unordered list
                                foreach ($groupedItems as $category => $items) {
                                ?>
                                    <h3 class="md:text-3xl text-2xl bagdoll-display text-primary lg:mb-8 md:mb-6 mb-4">
                                        <?php echo $category; ?></h3>
                                    <?php foreach ($items as $index => $item) { ?>
                                        <div class="flex items-center justify-between md:mb-5 mb-2.5 whole_list_each">
                                            <div class="flex items-center gap-2.5">
                                                <button type="submit" class="remove-item md:text-xl text-sm font-semibold leading-none py-1 px-1.5 
                                                rounded text-white bg-[#FF5454] input-button" data-index="<?php echo $item['id']; ?>" data-price="<?php echo $item['price']; ?>">
                                                    <i class="fa-solid fa-xmark"></i></button>
                                                <label for="Drink" class="md:text-base text-xs font-semibold text-dark-grey uppercase"><?php echo $item['name']; ?>
                                                </label>
                                            </div>
                                            <h4 class="md:text-base text-xs font-semibold text-dark-grey uppercase">₹<?php echo $item['price']; ?></h4>
                                        </div>
                                <?php }
                                } ?>


                                <?php
                                // }
                                ?>
                                <h2 data-price="<?php echo $totalPrice; ?>" id="total_pricing" class="md:text-3xl text-2xl bagdoll-display text-primary lg:mb-8 md:mb-6 mb-4">
                                    Total Amount: <span id="total-amount" class="md:text-3xl text-2xl bagdoll-display text-primary lg:mb-8 md:mb-6 mb-4">
                                        <?php echo $totalPrice; ?></span></h2>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center bg-white relative">
                    <a href="#" class="btn md:relative md:left-auto md:top-0 md:translate-x-0 fixed bottom-16 left-[50%] shadow-3xl md:w-auto sm:w-[40%] w-[65%] m-auto translate-x-[-50%] z-20 md:text-sm text-xs font-semibold hover:text-primary hover:bg-white transition text-white bg-primary border border-primary lg:px-10 md:px-5 px-3 lg:py-5 md:py-3 py-2 rounded-large inline-block uppercase whitespace-nowrap">DOWNLOAD WITH PRICE</a>
                    <a href="#" class="btn md:relative md:left-auto md:top-0 md:translate-x-0 fixed bottom-6 left-[50%] shadow-3xl md:w-auto sm:w-[40%] w-[65%] m-auto translate-x-[-50%] z-20 md:text-sm text-xs font-semibold hover:text-primary hover:bg-white transition text-white bg-primary border border-primary lg:px-10 md:px-5 px-3 lg:py-5 md:py-3 py-2 rounded-large inline-block uppercase whitespace-nowrap md:ml-2">DOWNLOAD WITHOUT PRICE</a>
                    <div class="relative md:block hidden before:content-[''] before:absolute before:h-full before:w-full before:left-0 before:top-0 before:bg-gradient-to-b before:from-white before:to-[rgb(255, 255, 255, 0.2)]">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/maharwal_venues-bottom.webp" alt="venues-bottom" class="w-full">
                    </div>

                </div>
            </div>

        </div>
</section>


<script>
    jQuery(document).ready(function() {

        jQuery('.remove-item').click(function(){
            var removeitemprice = parseFloat(jQuery(this).data('price')); // Get the price of the item to be removed
            var totalamount = parseFloat(jQuery('#total_pricing').data('price')); // Get the current total price
            var newtotalamount = totalamount - removeitemprice; // Calculate the new total price

            jQuery('#total_pricing').data('price', newtotalamount); // Update the data-price attribute
            jQuery('#total_pricing #total-amount').text(newtotalamount); // Update the displayed total amount

            // Remove the item from the UI
            jQuery(this).closest('.whole_list_each').remove(); // Assuming each item has a container with class 'flex'
        });
        // Click event listener for remove button
        jQuery(document).on('click', '.remove-item', function() {
            // Get the index of the item to be removed from the button's data attribute
            var id = jQuery(this).data('index');


            // var removeitemprice = jQuery(this).data('price');
            // var totalamount = jQuery('#total_pricing').data('price');
            // var newtotalamount = totalamount - removeitemprice ;

            // jQuery("#total_pricing").attr("data-price", newtotalamount);

            // // Update the displayed total price
            // jQuery("#total_pricing").text('Total Amount:'+newtotalamount);
            // console.log(newtotalamount);



            // Send an AJAX request to the server to handle item removal
            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'remove_item',
                    id: id,
                },
                dataType: 'json',
                success: function(response) {
                     console.log(response)
                    // if (response && response.success === "success") {
                    // // If removal is successful, update the selected items list and total amount
                    // location.reload();
                    // }

                    

                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>

<?php get_footer(); ?>