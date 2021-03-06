<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_media
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * HTML View class for the Media component
 *
 * @package     Joomla.Administrator
 * @subpackage  com_media
 * @since       1.0
 */
class MediaViewMediaList extends JViewLegacy
{
	public function display($tpl = null)
	{
		// Do not allow cache
		JResponse::allowCache(false);

		JHtml::_('behavior.framework', true);

		JFactory::getDocument()->addScriptDeclaration("
		window.addEvent('domready', function()
		{
			window.parent.document.updateUploader();
			$$('a.img-preview').each(function(el)
			{
				el.addEvent('click', function(e)
				{
					window.top.document.preview.fromElement(el);
					return false;
				});
			});
		});");

		$images = $this->get('images');
		$documents = $this->get('documents');
		$folders = $this->get('folders');
		$state = $this->get('state');

		$this->baseURL = JURI::root();
		$this->images = &$images;
		$this->documents = &$documents;
		$this->folders = &$folders;
		$this->state = &$state;

		parent::display($tpl);
	}

	function setFolder($index = 0)
	{
		if (isset($this->folders[$index]))
		{
			$this->_tmp_folder = &$this->folders[$index];
		}
		else
		{
			$this->_tmp_folder = new JObject;
		}
	}

	function setImage($index = 0)
	{
		if (isset($this->images[$index]))
		{
			$this->_tmp_img = &$this->images[$index];
		}
		else
		{
			$this->_tmp_img = new JObject;
		}
	}

	function setDoc($index = 0)
	{
		if (isset($this->documents[$index]))
		{
			$this->_tmp_doc = &$this->documents[$index];
		}
		else
		{
			$this->_tmp_doc = new JObject;
		}
	}
}
