<?php


class Baron {
    function update_post_meta_ing($post_id, $key, $value){
        $data['id_post'] = $post_id;
        $dta['name'] = $key;
        $data['kol'] = $value;
        global $wpdb;
        $wpdb->insert( 'ingredients', $data );
        prn($post_id);
        prn($key);
        prn($value);
    }
} 