<?php 
/**
*-------------------------------------------------------------------------------
* mod_dt_instagallery - DT InstaGallery display your images from Instagram in your Joomla website by detalhar - http://www.detalharweb.com.br
*-------------------------------------------------------------------------------
* @package mod_dt_instagallery
* @version 0.1.0
* @author detalhar http://http://www.detalharweb.com.br
* @copyright (C) 2015 detalhar. All Rights Reserved
* @license - GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html or see LICENSE.txt
*
* mod_dt_instagallery is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
**/

defined('_JEXEC') or die('Access Restricted');

$doc = JFactory::getDocument();
//styles and scripts
$doc->addStyleSheet('modules/mod_dt_instagallery/assets/css/baguetteBox.min.css');
$doc->addStyleSheet('modules/mod_dt_instagallery/assets/css/style.css');
$doc->addScript('modules/mod_dt_instagallery/assets/js/baguetteBox.min.js', 'text/javascript',false, true);

//params
$id = $params->get('id');
$get = $params->get('get');
$username = $params->get('username');
$count = (int)$params->get('count', 8);
$width = (int)$params->get('width', 150);


$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_dt_instagallery', $params->get('layout','default'));