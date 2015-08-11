<?php
   //$TODO: BreadCrumbs
   //$TODO: Limit MaxDepth = 2 ?!?
   
   // sort categories by ordered value
   $orderedCategories = Hash::sort($productCategories, '{n}.ProductCategory.order', 'asc');
   // nest categories ... children under parents
   $productCategories = Hash::nest($orderedCategories);
   // generate a categoryTree node containing entire tree
   $treeOptions = array('id' => 'categoryTree', 'model' => 'ProductCategory', 'element' => 'category_node' );
   echo $this->Tree->generate($productCategories, $treeOptions);
?>
<br>
<?php echo $this->Html->link(__('Suggest Category'), array('controller' => 'product_categories', 'action' => 'add', ''), array('class' => 'btn btn-small btn-primary', 'icon' => 'edit white')); ?>

