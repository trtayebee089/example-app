<?php

return array(

    'show_warnings' => false,   // Throw an Exception on warnings from dompdf

    'public_path' => null,  // Override the public path if needed

    'convert_entities' => true,

    'options' => array(
        "font_dir" => storage_path('fonts'), // advised by dompdf (https://github.com/dompdf/dompdf/pull/782)

        "font_cache" => storage_path('fonts'),

        'fonts' => [
            'kalpurush' => [
                'R'  => 'kalpurush.ttf',
            ],
            'noto_sans_bengali' => [
                'R'  => 'NotoSansBengali-Regular.ttf', // Regular font
                'B'  => 'NotoSansBengali-Bold.ttf',    // Bold font
            ],
        ],

        "temp_dir" => sys_get_temp_dir(),

        "chroot" => realpath(base_path()),

        'allowed_protocols' => [
            "file://" => ["rules" => []],
            "http://" => ["rules" => []],
            "https://" => ["rules" => []]
        ],

        'log_output_file' => null,

        "enable_font_subsetting" => false,

        "pdf_backend" => "CPDF",

        "default_media_type" => "screen",

        "default_paper_size" => "a4",

        'default_paper_orientation' => "portrait",

        "default_font" => "kalpurush",

        "dpi" => 96,

        "enable_php" => false,

        "enable_javascript" => true,

        "enable_remote" => true,

        "font_height_ratio" => 1.1,

        "enable_html5_parser" => true,
    ),


);
