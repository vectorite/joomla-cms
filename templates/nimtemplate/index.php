<?php
/**
 * @copyright   Copyright (C) 2013 New Internet Marketing. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');
$copyYear = 2013; 
$curYear = date('Y');

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
	$logo = '<img src="'. JURI::root() . $this->params->get('logoFile') .'" alt="'. $sitename .'" />';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="'. $sitename .'">'. htmlspecialchars($this->params->get('sitetitle')) .'</span>';
}
else
{
	$logo = '<span class="site-title" title="'. $sitename .'">'. $sitename .'</span>';
}
// Add Bootstrap Framework
JHtml::_('bootstrap.framework');

// Load optional Bootstrap bugfixes

JHtmlBootstrap::loadCss($includeMaincss = true);


$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/custom.css');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<jdoc:include type="head" />
<link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName');?>' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12 banner hidden-phone">
		<a href="/"><img src="templates/nimtemplate/images/banner.jpg" alt="Home. " class="center-in-span" /></a>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4 phone visible-phone">
		<h2>561-820-4851</h2>
		</div>
	</div>

<div class="container-fluid">
<div class="row-fluid">
  <nav class="span12 navbar">
    <div class="navbar-inner">
      <div class="container-fluid"> 
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		</a>
		<a class="brand" href="#">Richter Law PA</a>
          <div class="nav-collapse collapse">
          
          <jdoc:include type="modules" name="nav" style="none" />
        </div>
      </div>
    </div>
  </nav>
</div>

	<div class="row-fluid">
		<div class="span3">
		<jdoc:include type="modules" name="left-of-content" style="html5" />
		</div>
		<div class="span9">
		<jdoc:include type="modules" name="slideshow" style="html5" />
		<jdoc:include type="modules" name="social" style="html5" />
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		</div>
	<div class="row-fluid">
		<div class="span12">
		<jdoc:include type="modules" name="below-content" style="html5" />
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
		</div>
		<div class="span4">
		</div>
		<div class="span4">
		</div>
	</div>
	<div class="row-fluid">
		<div class="span3">
		</div>
		<div class="span3">
		</div>
		<div class="span3">
		</div>
		<div class="span3">
		</div>
	</div></div>
	<div class="row-fluid">
		<div class="span12 centered-pills">
		<jdoc:include type="modules" name="footer" style="html5" /><div class="copyright">
		Copyright<sup><small>&copy;</small></sup><?php echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '')."  ".$_SERVER['SERVER_NAME']; ?>  - All rights reserved
	</div></div></div>
</div>
</div>

</body>

</html>
