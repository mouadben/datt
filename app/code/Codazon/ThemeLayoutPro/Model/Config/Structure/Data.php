<?php
/**
 * Copyright © 2017 Codazon, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Codazon\ThemeLayoutPro\Model\Config\Structure;

class Data extends \Magento\Framework\Config\Data\Scoped
{
    /**
     * @param Reader $reader
     * @param \Magento\Framework\Config\ScopeInterface $configScope
     * @param \Magento\Framework\Config\CacheInterface $cache
     * @param string $cacheId
     */
    public function __construct(
        ThemeReader $reader,
        \Magento\Framework\Config\ScopeInterface $configScope,
        \Magento\Framework\Config\CacheInterface $cache,
        $cacheId
    ) {
        parent::__construct($reader, $configScope, $cache, $cacheId);
    }

    /**
     * Merge additional config
     *
     * @param array $config
     * @return void
     */
    public function merge(array $config)
    {
        if (isset($config['config']['system'])) {
            $config = $config['config']['system'];
        }
        parent::merge($config);
    }
}
