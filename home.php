<?php
if(!is_paged() ) {
  // we're on the home page and this is the first page of results
  get_header();
  get_template_part('layouts/newspaper'); // on posts page? no pagination?
  get_footer();
}
else {
  // otherwise, we're on the second+ page, and we should just show them like a date archive
  get_template_part('archive');
}
?>
