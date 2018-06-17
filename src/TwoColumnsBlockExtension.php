<?php

namespace Pixney\TwoColumnsBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\TwoColumnsBlockExtension\Block\BlockModel;

class TwoColumnsBlockExtension extends BlockExtension
{
    /**
     * This extension provides...
     *
     * This should contain the dot namespace
     * of the addon this extension is for followed
     * by the purpose.variation of the extension.
     *
     * For example anomaly.module.store::gateway.stripe
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.blocks::block.two_columns';
    protected $model    = BlockModel::class;
    protected $view     = 'pixney.extension.two_columns_block::public/layout';
    protected $wrapper  = 'pixney.extension.two_columns_block::blocks/wrapper';
}
