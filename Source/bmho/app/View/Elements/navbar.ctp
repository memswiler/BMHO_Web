<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse">
                <ul class="nav">
					<?php if (AuthComponent::user('id')) : ?>
						<?php if (!empty($user['Shop']['id'])) : ?>
							<li class="dropdown <?php echo $this->params->controller == 'shops' ? 'active' : ''; ?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									Manage
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu">
									<li class="<?php echo $this->params->controller == 'system' && $this->action == 'manager_dashboard' ? 'active' : ''; ?>">
										<?php echo $this->Html->link(__('Dashboard'), array('controller' => 'system', 'action' => 'dashboard', 'manager' => true)) ?>
									</li>
									<li class="<?php echo $this->params->controller == 'products' ? 'active' : ''; ?>">
										<?php echo $this->Html->link(__('Items'), array('controller' => 'products', 'action' => 'index', 'manager' => true)) ?>
									</li>
									<li class="<?php echo $this->params->controller == 'enquiries' ? 'active' : ''; ?>">
										<?php echo $this->Html->link(__('Inquiries'), array('controller' => 'enquiries', 'action' => 'index', 'manager' => true)) ?>
									</li>
									<li class="divider"></li>
									<li class="<?php echo $this->params->controller == 'settings' && $this->action != 'home' ? 'active' : ''; ?>">
										<?php echo $this->Html->link(__('Settings'), array('controller' => 'shops', 'action' => 'edit', 'manager' => true)); ?>
									</li>
								</ul>
							</li>
						<?php else : ?> &nbsp;
<!--
							<li>
								<div class="btn-group">
									<a class="btn btn-info" href="<?php echo $this->webroot . 'manager/shops/register'; ?>"><i class="icon-shopping-cart icon-white"></i> <?php echo __('Sell'); ?></a>
                           <a href="#" class="btn btn-info btn-large"><i class="icon-white icon-star"></i> Try Free!<hr><br>1 Item<br>1 Month</a>						
                           <a href="#" class="btn btn-primary btn-large"><i class="icon-white icon-star"></i> Basic - 1 Item / $1 / 1 Mo.</a>
                           <a href="#" class="btn btn-success btn-large"><i class="icon-white icon-star"></i> Basic Plus - 10 Items /  $10 / 10 Months.</a>
                           <a href="#" class="btn btn-warning btn-large"><i class="icon-white icon-star"></i> Premium - Unl Items /  $50 / Months.</a>
								
								</div>
							</li>
-->									
						<?php endif; ?>
					<?php endif; ?>

					<?php if (AuthComponent::user('role') == 'admin') : ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php echo __('Manage'); ?>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="<?php echo $this->params->controller == 'system' && $this->action == 'admin_dashboard' ? 'active' : ''; ?>">
									<?php echo $this->Html->link(__('Dashboard'), array('controller' => 'system', 'action' => 'dashboard', 'admin' => true)) ?>
								</li>
								<li class="<?php echo $this->params->controller == 'shops' ? 'active' : ''; ?>">
									<?php echo $this->Html->link(__('Sellers'), array('controller' => 'shops', 'action' => 'index', 'admin' => true)) ?>
								</li>
								<li class="<?php echo $this->params->controller == 'products' ? 'active' : ''; ?>">
									<?php echo $this->Html->link(__('Items'), array('controller' => 'products', 'action' => 'index', 'admin' => true)) ?>
								</li>
								<li class="<?php echo $this->params->controller == 'users' ? 'active' : ''; ?>">
									<?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index', 'admin' => true)) ?>
								</li>
								<li class="<?php echo $this->params->controller == 'product_categories' ? 'active' : ''; ?>">
									<?php echo $this->Html->link(__('Categories'), array('controller' => 'product_categories', 'action' => 'index', 'admin' => true)) ?>
								</li>
								<li class="divider"></li>
								<li class="<?php echo $this->params->controller == 'settings' ? 'active' : ''; ?>">
									<?php echo $this->Html->link(__('Settings'), array('controller' => 'settings', 'action' => 'edit', 'admin' => true)); ?>
								</li>
							</ul>
						</li>
					<?php endif; ?>
                </ul>

				<div id="menuUser">
					<?php echo $this->element('navbar_user'); ?>  
				</div>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
<div class="container">
   <div class="container pull-left">
      <div class="hero-unit" style="position:relative; min-height: 0px; min-width: 200px; line-height: 10px;background-image: url(<?php echo Router::Url( '/', true ) . Configure::read('MyApp.banner'); ?>); background-repeat: no-repeat; background-position: left middle">
         <div class="container">
            <div class="pull-right" style="position: absolute; top: 0px; left: 280px; right: 210px; line-height: 20px;">
               <h3 style="display: inline-block"><?php echo __('Welcome to'); ?></h3> <h2 style="display: inline-block"><?php echo Configure::read('MyApp.website_title'); ?></h2><br>
               <p align="right"><?php echo Configure::read('MyApp.website_desc'); ?></align>
            </div>
            <div class="pull-right" style="position: absolute; top: 15px; right: 15px; line-height: 30px;">
            <a href="register/basic" class="btn btn-primary btn-small" style="width:160px"><div class="pull-left"><i class="icon-white icon-shopping-cart" style="align: left"></i></div> Basic <div class="pull-right"> $1/month </div> </a><br>
            <a href="register/basic-plus" class="btn btn-warning btn-small" style="width:160px"><div class="pull-left"><i class="icon-white icon-plus" style="align: left"></i></div> Basic Plus <div class="pull-right"> $5/month </div> </a><br>
            <a href="register/premium" class="btn btn-success btn-small" style="width:160px"><div class="pull-left"><i class="icon-white icon-star" style="align: left"></i></div> Premium <div class="pull-right">$10/month </div> </a>
            </div>
         </div>
      </div>
     <img class="top" style="position: absolute; top: 60px; right: 10px; z-index:100;" src="<?php echo $this->webroot . 'img/ribbon-free.jpg'; ?>"/>
   </div>
</div><!-- container -->
<?php $this->start('scriptBottom'); ?>
<script>
//	$(document).ready(function() {
	function reloadUserMenu() {
		$.ajax({
			url: "<?php echo $this->webroot . 'users/status'; ?>",
			cache: false
		}).done(function(html) {
			$('#menuUser').html(html);
		});
	}
//	});

	window.reloadUserStatus = function() {
		$.ajax({
			url: "<?php echo $this->webroot . 'users/status'; ?>",
			cache: false
		}).done(function(html) {
			$('#menuUser').html(html);
		});
	};
</script>
<?php
$this->end();
