<?php

/**Template Name: Create Template

 */

get_header(); ?>


<div id="form-container">
    <form id="custom-form" method="post" action="<?php echo home_url(); ?>/new-page/">
        <label for="price-range">Select Price Range:</label>
        <select id="price-range" name="price-range">
            <option value="1" selected>100-200</option>
            <option value="1.5">200-300</option>
            <option value="2">200-300</option>
            <option value="2.5">200-300</option>
            <option value="3">200-300</option>
            <!-- Add other options here -->
        </select>

        <!-- Sample items with prices -->
        <input type="checkbox" id="item1" name="items[]" value="50" data-price="50">
        <label for="item1">Item 1 - $50</label><br>
        <input type="checkbox" id="item2" name="items[]" value="75" data-price="75">
        <label for="item2">Item 2 - $75</label><br>
        
        <input type="checkbox" id="item3" name="items[]" value="100" data-price="100">
        <label for="item3">Item 3 - $100</label><br>

        <input type="checkbox" id="item4" name="items[]" value="125" data-price="125">
        <label for="item4">Item 2 - $125</label><br>
        <!-- Add more items here -->

        <button type="submit">Submit</button>
        <!-- Hidden input field to store selected items -->
        <input type="hidden" id="selected-items" name="selected-items">
    </form>
</div>



<?php get_footer(); ?>
