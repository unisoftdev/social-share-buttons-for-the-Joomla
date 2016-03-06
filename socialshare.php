<?php
/*
* @Social share buttons
* Created By Juraj Vysvader
* https://www.unisoftdev.tech/
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @Copyright (C) 2016 Juraj Vysvader. All rights reserved.
*/

defined('_JEXEC') or die;

class plgContentSocialshare extends JPlugin{

	public function onContentAfterTitle($context, &$article, &$params, $limitstart)
        {
                return "<div id='socialshare'></div>";
        }	


	public function onContentPrepare($context, &$row, &$params, $page = 0)
		{
				$document = JFactory::getDocument();
				$document->addStyleSheet(JURI::base(). "plugins/content/socialshare/socialshare.css");
				$document->addScript(JURI::base(). "plugins/content/socialshare/socialshare.js");
				
		}		
}

?>
