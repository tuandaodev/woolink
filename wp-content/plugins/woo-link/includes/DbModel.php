<?php

require_once('function.php');
/**
 *
 * @author MT
 */

class DbModel {

    private $prefix;

    public function __construct() {
        $this->link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($this->link, "utf8");
        global $wpdb;
        $this->prefix = $wpdb->base_prefix;
    }
    
    public function query($query) {
        $result = mysqli_query($this->link, $query);
        
        if ($result) {
            $return = mysqli_fetch_all($result, MYSQLI_ASSOC);
        } else {
            $return = array();
        }
        
        return $return;
    }
    
    public function get_previous_products($product_id, $cat_ids) {
        if (!$cat_ids) return [];
        $cat_ids = implode(",", $cat_ids);
        $query = "  Select p.ID, p.post_title
                    FROM {$this->prefix}posts p
                    INNER JOIN {$this->prefix}term_relationships
                            ON {$this->prefix}term_relationships.object_id = p.ID
                    INNER JOIN {$this->prefix}term_taxonomy
                            ON {$this->prefix}term_relationships.term_taxonomy_id = {$this->prefix}term_taxonomy.term_taxonomy_id
                            AND {$this->prefix}term_taxonomy.taxonomy = 'product_cat'
                    Where post_type = 'product'
                    AND p.ID > $product_id
                    AND {$this->prefix}term_relationships.term_taxonomy_id IN ($cat_ids)
                    GROUP BY p.ID
                    ORDER BY p.ID ASC
                    LIMIT 3";
        $result = mysqli_query($this->link, $query);
        if ($result) {
            $return = mysqli_fetch_all($result, MYSQLI_ASSOC);
            if ($return) {
                return $return;
            } else {
                return [];
            }
        } else {
            return [];
        }
    }
}

