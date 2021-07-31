<?php render_head() ?>
<?php render_side() ?>
<?php if(isset($path)) $this->load->view($path); ?>
<?php render_foot() ?>