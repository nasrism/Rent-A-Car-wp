<?php
get_header();
?>
<div class="items-container">
  
<?php 
get_search_form();
get_template_part('filter-function');
echo 'you search for:';
get_template_part('content');
get_footer();
?> 