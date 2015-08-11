<?php
   if ( isset($ProductCategory) &&  isset($ProductCategory['slug']) ) {
      $caption = 'Newest in ' . $ProductCategory['name'];
      }
   else {
      $caption = 'Newest in All Categories';
      }
   $this->set('title_for_layout', $caption ); 
?>

<div class="row-fluid">
   <div class="container" style="max-width: 100%; overflow:hidden">
      <div class="pull-left" >
         <?php echo $this->element('category_tree'); ?>
      </div>
      <div class="pull-right" style="position: relative; left: 15px; top: 0px; max-width: 80%; overflow: hidden">
         <?php echo $this->element('scroller'); ?>
      </div>
   </div>
</div>


<?php
   echo '<h3>' . $caption . '</h3>';
?>

<?php echo $this->element('products'); ?>
