<?php
$category = $data['ProductCategory'];
?>
<font size="+1"><b>
<?php echo $this->Html->link($category['name'], array('action' => 'home', 'category' => $category['slug']), array('class' => 'active', 'style' => 'line-height: 30px;', 'icon' => 'arrow-right white')); ?>
<?php echo "&nbsp;"; ?>
<?php echo $this->Html->link($category['product_count'], array('controller' => 'products', 'action' => 'view', $category['slug']), array('class'=>'badge badge-info') ); ?>
</b></font>
