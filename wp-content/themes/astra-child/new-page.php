<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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

?>

<br><br><br><br><br><br><br><br><br><br>
<!-- Display selected items and total price -->
<div id="selected-items">
    <h2>Selected Items:</h2>
    <?php  
    // Start the unordered list
    echo '<ul id="selected_items_list">';
    foreach ($dataArray as $index => $item) {
        echo '<li>' . $item['name'] . ' - $' . $item['price'] . ' <button class="remove-item" data-index="' . $index . '">Remove</button></li>';
    }
    echo '</ul>';
    ?>
    <h2>Total Amount:</h2>
    <p id="total-amount"><?php echo $totalPrice; ?></p>
</div>

<script>
jQuery(document).ready(function() {
    // Click event listener for remove button
    jQuery(document).on('click', '.remove-item', function() {
        // Get the index of the item to be removed from the button's data attribute
        var index = jQuery(this).data('index');
        
        // Send an AJAX request to the server to handle item removal
        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'remove_item',
                index: index,
            },
            success: function(response) {
                // If removal is successful, update the selected items list and total amount
                location.reload();
                
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>