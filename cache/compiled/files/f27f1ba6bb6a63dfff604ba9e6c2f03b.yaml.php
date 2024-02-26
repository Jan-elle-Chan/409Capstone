<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/dtSimplified/system/blueprints/pages/root.yaml',
    'modified' => 1708568813,
    'size' => 187,
    'data' => [
        'title' => 'PLUGIN_ADMIN.ROOT',
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1
                ]
            ]
        ]
    ]
];
