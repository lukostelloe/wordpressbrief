<?php
get_header();
?>
<div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
<div style="padding:20px;">
<?php the_title()?>
</div>
<div style="display:flex;flex-direction:column;justify-content:center;align-items:center;width:80%;">
<?php
the_content();?>
</div>
<div style="width:100%;">
<?php
get_footer();
?>
</div>
</div>