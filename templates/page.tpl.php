<?php

	$headerArray = array();
	$headerArray[0] = "start.png";
	$headerArray[1] = "wind.jpg";
	$headerArray[2] = "water.jpg";

	$img = rand ( 0 , 2 );

	if ($node = menu_get_object()) {
    		$variables['node'] = $node;
  	}
	$type = _node_extract_type($node);
	$cType = explode("_",  node_type_get_name($type));
	$cType = $cType[0];

	$subArray = array();
	$subArray['Småhus'] = 'other.png';
	$subArray['Lägenhet'] = 'apartment.jpg';
	$subArray['Företag'] = 'company.jpg';
	$subArray['Klimat'] = 'klimat.jpg';
	$subArray['Skola'] = 'skola.jpg';
	$subArray['Om'] = 'about.jpg';
	$subArray['Nyheter'] = 'nyheter.jpg';

	if (!isset($subArray[$cType])) {
		$subArray[$cType] = 'wind.jpg';
	}
?>

<div id="page">
	<div class="container-fluid" id="header-fluid">
            	<?php if($is_front): ?>
                        <header id='header' class="header-main" style="background-image: url(<?php print $front_page; ?>/sites/all/themes/energi/images/<?php print $headerArray[$img]; ?>)"  role="banner">
                <?php else: ?>
                        <header id='header' class="header-sub" style="background-image: url(<?php print $front_page; ?>/sites/all/themes/energi/images/<?php if (isset($subArray[$cType])) { print $subArray[$cType]; } ?>)"  role="banner">
                <?php endif; ?>
			<div class="faded">
			<div class='container-fluid header-container'>
        	                <div class="row header-row">
                	                <div id="logo" class="col-sm-6">
                        	                <?php if ($logo): ?><div id="site-logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="logo-img img-responsive"/></a><?php endif; ?>
                        		                <h1 id="site-title">
                                		                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
                                	                </h1>
                                	        </div>
                                	</div>
                                	<div id="search" col-sm-6">
                                	        <?php if ($page['navigation']): ?><div class="navigation"><?php print render($page['navigation']); ?></div><?php endif; ?>
                                	</div>
                                	<div id="contacted" col-sm-6">
                                	        <?php if ($page['contacted']): ?><div class="contacted"><?php print render($page['contacted']); ?></div><?php endif; ?>
                                	</div>
				</div>

				<div class="row">
                                	<div class="navs">
                                                <nav class="navbar navbar-default">
                                                        <div class="container-fluid container-fluid-menu">
                                                                <div class="navbar-header">
                                                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                                                                <span class="icon-bar"></span>
                                                                                <span class="icon-bar"></span>
                                                                        <span class="icon-bar"></span>
                                                                        </button>
                                                                        <a class="navbar-brand" href="#">ENERGIRÅDGIVNINGEN</a>
                                                                </div>
                                                                <div class="collapse navbar-collapse" id="myNavbar">
                                                                        <?php
                                                                                $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
                                                                                print drupal_render($main_menu_tree);
                                                                        ?>

                                                                        <ul class="nav navbar-nav navbar-right">
                                                                                <li class="dropdown">
                                                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">KOMMUNER<span class="caret"></span></a>
                                                                                        <ul class="dropdown-menu">
                                                                                        <?php
                                                                                                $kommuner_menu_tree = menu_tree(variable_get('menu_kommuner_links_source', 'menu-kommuner'));
                                                                                                print drupal_render($kommuner_menu_tree);
                                                                                        ?>
                                                                                        </ul>
                                                                                </li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </nav>
                                	</div>
				</div>
				
                                <div class="row">
					<center>
                                        <div class="container">
	                                        <div class="col-md-2">
						</div>
	                                        <div class="col-md-8">
                                                        <?php if ($page['slogan']): ?><div class="slogan"><?php print render($page['slogan']); ?></div><?php endif; ?>
                                                </div>
	                                        <div class="col-md-2">
						</div>
                                        </div>
					</center>
                                </div>
                        </div>
		</div>
		</header>
	</div>

	<div class='container-fluid'>
		<div class='container-fluid main-container'>
			<main id="content" class="content-area" role="main">
				<div class='row'>
                	        	<?php if($is_front): ?>
                        	                <div class="col-md-9 col-sm-8">
                                	                <section>
								<?php print $messages; ?>
                                                        	<?php if ($page['header']): ?><div id="top_bar"><?php print render($page['header']); ?></div><?php endif; ?>
                                                        	<div id="content-wrap">
                                                                	<?php print render($title_prefix); ?>
                                                                	<?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
                                                                	<?php print render($title_suffix); ?>
                                                                	<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
                                                                	<?php print render($page['help']); ?>
                                                                	<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                                                                	<?php print render($page['content']); ?>
                                                                	<?php print render($page['under-content']); ?>
                                                        	</div>
							</section>
						</div>
                                	        <div class="col-md-3 col-sm-4">
                                        	        <aside>
								<?php if ($page['sidebar_first']): ?><?php print render($page['sidebar_first']); ?><?php endif; ?>
        	                                        </aside>
                	                        </div>
                                	<?php else: ?>
                                        	<div class="col-md-3 col-sm-4">
                                        	        <aside>
								<?php if ($page['sidebar_second']): ?><?php print render($page['sidebar_second']); ?><?php endif; ?>
	                                                </aside>
        	                                </div>
                	                        <div class="col-md-9 col-sm-8">
							<section>
								<?php print $messages; ?>
                                                                <?php if ($page['header']): ?><div id="top_bar"><?php print render($page['header']); ?></div><?php endif; ?>
                                                                <div id="content-wrap">
                                                                        <?php print render($title_prefix); ?>
                                                                        <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
                                                                        <?php print render($title_suffix); ?>
                                                                        <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
                                                                        <?php print render($page['help']); ?>
                                                                        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                                                                        <?php print render($page['content']); ?>
                                                                        <?php print render($page['under-content']); ?>
                                                                </div>
                                                	</section>
	                                        </div>
        	                        <?php endif; ?>             
				</div>
			</main>
		</div>
	</div>

	<div class='container-fluid'>
		<footer id="footer">
			<div class='row'>
				<div class="col-md-12">
                                        <?php print render($page['footer']); ?>
                                </div>
			</div>
                        <div class="row">
                               	<div class="col-md-4 col-md-push-8">
                               	        <?php print render($page['footer_third']); ?>
                               	</div>
                               	<div class="col-md-4 col-md-pull-4">
                               	        <?php print render($page['footer_first']); ?>
                               	</div>
                               	<div class="col-md-4 col-md-pull-4" id="footer-contact">
                               	        <?php print render($page['footer_second']); ?>
                               	</div>
                       	</div>
		</footer>
	</div>
</div>
