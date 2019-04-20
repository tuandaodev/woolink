<?php

function write_logs($file_name = '', $text = '') {

    if (empty($file_name)) {
        $t = date('Ymd');
        $file_name = "errors-{$t}.txt";
    }

    $folder_path = WOOLINK_PLUGIN_DIR . '/logs';
    $file_path = $folder_path . '/' . $file_name;

    if (!file_exists($folder_path)) {
        mkdir($folder_path, 0755, true);
    }

    $file = fopen($file_path, "a");

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s', time());

    $body = "\n" . $date . ' ';
    $body .= $text;

    fwrite($file, $body);
    fclose($file);
}

function fnc_link_to_previous_products($content) {
    if (is_product()) {
        global $product;
        $product_id = $product->get_id();
        $categories = wp_get_object_terms($product_id, 'product_cat');
        if (!$categories)
            return $content;

        $cat_ids = [];
        foreach ($categories as $category) {
            $children = get_categories(array('taxonomy' => 'product_cat', 'parent' => $category->term_id));
            if (count($children) == 0) {
                $cat_ids[] = $category->term_id;
            }
        }

        if (!$cat_ids)
            return $content;

        $DbModel = new DbModel();
        $previous_products = $DbModel->get_previous_products($product_id, $cat_ids);

        if (!$previous_products)
            return $content;

        $custom_content .= '<span class="previous_product">See also:</span>';

        foreach ($previous_products as $previous_prod) {
            $url = get_permalink($previous_prod['ID']);
            $custom_content .= '<a class="previous_product" href="' . $url . '">' . $previous_prod['post_title'] . '</a>';
        }

        $content .= $custom_content;
        return $content;
    }
    return $content;
}

add_filter('the_content', 'fnc_link_to_previous_products');
