
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/75b710a8ef.js" crossorigin="anonymous"></script>

<form role="search" method="get" id="searcher" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="filter-search" style="scale:0; opacity:0;">
    
        <div class="checkbox cb-filter">
            <input class="car-filter" id="filters-close" onclick="filterPopdown()"> 
            <label for="filters-close" title="<?php echo esc_attr_x( 'Filter', 'label' ) ?>"><i class="fa-solid fa-xmark"></i></label>
        </div>
        
        <div class="tag">
            <div class="price">
                <h5>Price</h5>
                <div class="fil-list">
                    <div class="checkbox">
                        <input type="radio" name="rent-price" class="car-filter" id="cheap" value="cheap"
                        <?php echo (isset($_GET['rent-price']) && $_GET['rent-price'] === 'cheap') ? 'checked' : ''; ?>>
                        <label for="cheap">$</label>
                    </div>
                    <div class="checkbox">
                        <input type="radio" name="rent-price" class="car-filter" id="mid" value="mid"
                        <?php echo (isset($_GET['rent-price']) && $_GET['rent-price'] === 'mid') ? 'checked' : ''; ?>>
                        <label for="mid">$$</label>
                    </div>
                    <div class="checkbox">
                        <input type="radio" name="rent-price" class="car-filter" id="expensive" value="expensive"
                        <?php echo (isset($_GET['rent-price']) && $_GET['rent-price'] === 'expensive') ? 'checked' : ''; ?>>
                        <label for="expensive">$$$</label>
                    </div>
                </div>
            </div> 
              
            <div class="type fil-list sel-fil">
                <h5>Car type</h5>
                <select name="type" id="car-type">
                    <option value="">Any</option>
                    <?php 
                        $car_types = array(
                            'suv' => 'SUV',
                            'sedan' => 'Sedan',
                            'truck' => 'Truck',
                            'convertible' => 'Convertible',
                        );

                        foreach ($car_types as $value => $label) {
                            $selected = ($_GET['car-type'] == $value) ? 'selected' : '';
                            echo '<option value="' . esc_attr($value) . '" ' . $selected . '>' . esc_html($label) . '</option>';
                        }
                    ?>
                </select>
            </div>


            <div class="brand fil-list sel-fil">
                <h5>Car brand</h5>
                <select name="brand" id="car-brand">
                    <option value="">Any</option>
                    <?php 
                        $car_brands = array(
                            'toyota' => 'Toyota',
                            'hyundai' => 'Hyundai',
                            'proton' => 'Proton',
                        );

                        foreach ($car_brands as $brand_value => $brand_label) {
                            $brand_selected = ($_GET['car-brand'] == $brand_value) ? 'selected' : '';
                            echo '<option value="' . esc_attr($brand_value) . '" ' . $brand_selected . '>' . esc_html($brand_label) . '</option>';
                        }
                    ?>
                </select>
            </div>

            <div id="set-time-both">
                <div class="from">
                    <h5>From</h5>
                    <input type="date" name="from" id="from" value="<?php echo esc_attr(isset($_GET['from']) ? $_GET['from'] : ''); ?>">
                </div>

                <div class="to">
                    <h5>To</h5>
                    <input type="date" name="to" id="to" value="<?php echo esc_attr(isset($_GET['to']) ? $_GET['to'] : ''); ?>">
                </div>
            </div>
        </div>

        <?php
            echo '<a href="' . remove_query_arg(array('rent-price','brand', 'type','from','to')) . '" class="remove-filter-button">Remove Filter</a>';
        ?>

    </div>
    
    <div class="search-bar">
        
                
        <div class="checkbox">
            <input id="filters-open" class="car-filter" onclick="filterPopup()"
            >
            <label for="filters-open"
            title="<?php echo esc_attr_x( 'Filter', 'label' ) ?>"><i class="fa-solid fa-filter"></i></label>  
        </div>

        <input type="name" class="search-field"
    placeholder="<?php echo esc_attr_x( 'Search the car you want to rent', 'placeholder' ) ?>"
    value="<?php echo get_search_query() ?>" name="s"
    title="<?php echo esc_attr_x( 'Search', 'label' ) ?>"
    <?php
    // Add the 'post_type' parameter to specify the custom post type(s) you want to search in
    $custom_post_types = array('car'); // Replace with your custom post type slug(s)
    $post_type_query = '';

    if (!empty($_GET['post_type']) && in_array($_GET['post_type'], $custom_post_types)) {
        $post_type_query = 'post_type=' . sanitize_text_field($_GET['post_type']);
    } elseif (isset($_GET['post_type'])) {
        // Handle invalid post_type values, if necessary
    }

    echo $post_type_query;
    ?>
/>


        <button type="submit" class="search-button"
        title="<?php echo esc_attr_x( 'Search', 'label' ) ?>"
        ><i class="fa-solid fa-magnifying-glass"></i></button>
    </div>

</form>
