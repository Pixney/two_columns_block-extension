<?php

namespace Pixney\TwoColumnsBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Pixney\TwoColumnsBlockExtension\Block\BlockModel;
use Anomaly\BlocksModule\Block\Form\BlockInstanceFormBuilder;

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

    public function extend(BlockInstanceFormBuilder $builder)
    {
        parent::extend($builder);
    }

    // public function getView()
    // {
    //     if ($this->block->configuration('something_special')) {
    //         return 'my_company.extension.awesome_block::alternate_view';
    //     }
    //     return 'my_company.extension.awesome_block::alternate_view';
    //     return $this->view;
    // }
}
