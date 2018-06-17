<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionTwoColumnsBlockCreateBlocksStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'blocks',
        'translatable' => false,
        'trashable'    => false,
        'searchable'   => false,
        'sortable'     => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'class', 'left_column_size', 'right_column_size',
        'column_1_image' => [
        ],
        'column_1_content' => [
        ],

        'column_2_image' => [
        ],
        'column_2_content' => [
        ],
    ];
}
