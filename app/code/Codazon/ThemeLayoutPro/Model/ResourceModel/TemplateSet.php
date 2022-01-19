<?php
/**
 *
 * Copyright © 2017 Codazon, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
 
namespace Codazon\ThemeLayoutPro\Model\ResourceModel;

class TemplateSet extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
	{
		$this->_init('themelayout_template_set', 'template_set_id');
	}
}