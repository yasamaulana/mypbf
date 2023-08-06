<?php

namespace App\Main;

class TopMenu
{
    /**
     * List of top menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'Beranda' => [
                'icon' => 'home',
                'title' => 'Beranda',
                'sub_menu' => [
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'top-menu',
                        ],
                        'title' => 'Overview 1'
                    ],
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'top-menu',
                        ],
                        'title' => 'Overview 2'
                    ],
                    'dashboard-overview-1' => [
                        'icon' => '',
                        'route_name' => 'dashboard-overview-1',
                        'params' => [
                            'layout' => 'top-menu',
                        ],
                        'title' => 'Overview 3'
                    ]
                ]
            ],
            'informasi' => [
                'icon' => 'activity',
                'title' => 'Informasi Perusahaan',
                'sub_menu' => [
                    '1' => [
                        'icon' => 'inbox',
                        'route_name' => 'profil-perusahaan',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Profil Perusahaan'
                    ],
                    '2' => [
                        'icon' => 'folder',
                        'route_name' => 'seri-faktur',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'No. Seri Faktur Pajak'
                    ],
                    '3' => [
                        'icon' => 'credit-card',
                        'route_name' => 'pegawai',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Pegawai'
                    ],
                    '4' => [
                        'icon' => 'message-square',
                        'route_name' => 'hak-akses-user',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Hak Akses User'
                    ]
                ]
            ],
            'master' => [
                'icon' => 'activity',
                'title' => 'Master',
                'sub_menu' => [
                    '1' => [
                        'icon' => 'inbox',
                        'route_name' => 'inbox',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Profil Perusahaan'
                    ],
                ]
            ],
            'set awal' => [
                'icon' => 'activity',
                'title' => 'Set Awal',
                'sub_menu' => [
                    '1' => [
                        'icon' => 'inbox',
                        'route_name' => 'inbox',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Profil Perusahaan'
                    ],
                ]
            ],
            'Persediaan' => [
                'icon' => 'activity',
                'title' => 'Persediaan',
                'sub_menu' => [
                    '1' => [
                        'icon' => 'inbox',
                        'route_name' => 'inbox',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Profil Perusahaan'
                    ],
                ]
            ],
            'Transaksi' => [
                'icon' => 'activity',
                'title' => 'Transaksi',
                'sub_menu' => [
                    '1' => [
                        'icon' => 'inbox',
                        'route_name' => 'inbox',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Profil Perusahaan'
                    ],
                ]
            ],
            'Akutansi & Pajak' => [
                'icon' => 'activity',
                'title' => 'Akutansi & Pajak',
                'sub_menu' => [
                    '1' => [
                        'icon' => 'inbox',
                        'route_name' => 'inbox',
                        'params' => [
                            'layout' => 'top-menu'
                        ],
                        'title' => 'Profil Perusahaan'
                    ],
                ]
            ],
        ];
    }
}
