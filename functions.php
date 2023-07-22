Need to add the below mentioned snippet inside the child theme functions.php file.

#-- The number of products column of the single store page --#
function single_store_page_product_columns($columns){
  if(dokan_is_store_page()){    
    return $columns = 4;
  } else {
    return $columns;
  }
}
add_filter( 'loop_shop_columns', 'single_store_page_product_columns');
