<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionTwoColumnsBlockCreateTwoColumnsBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'class' => [
            'type'   => 'anomaly.field_type.text',
            'config' => [
                'default' => 'teset'
            ]
        ],

        'column_1_image' => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'aspect_ratio'  => '1:1',
            ]
        ],
        'column_1_content' => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'config' => [
                'height'        => 500,
            ]
        ],

        // Column 2 Fields

        'column_2_image' => [
            'type'   => 'anomaly.field_type.image',
            'config' => [
                'aspect_ratio'  => '1:1',
            ]
        ],
        'column_2_content' => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'config' => [
                'height'        => 500,
            ]
        ],
    ];
}
