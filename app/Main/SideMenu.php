<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'route_name' => 'dashboard-overview-1',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Dashboard'
            ],
            
            
            'users' => [
                'icon' => 'users',
                'title' => 'Users',
                'sub_menu' => [
                    'Customer' => [
                        'icon' => '',
                        'route_name' => 'users-layout-1',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Customers'
                    ],
                    'sellers' => [
                        'icon' => '',
                        'route_name' => 'seller-list',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Sellers'     
                    ]
                ]
            ],
            
            'Product' => [
                'icon' => 'shopping-bag',
                'title' => 'Product',
                'sub_menu' => [
                    'products' => [
                        'icon' => '',
                        'route_name' => 'product-list',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Products',
                            // 'product-grid' => [
                            //     'icon' => '',
                            //     'route_name' => 'product-grid',
                            //     'params' => [
                            //         'layout' => 'side-menu'
                            //     ],
                            //     'title' => 'Product Grid'
                            // ]
                    ],

                    'categories' => [
                        'icon' => '',
                        'route_name' => 'product-grid',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Categories'
                    ],
                    // 'add-product' => [
                    //     'icon' => '',
                    //     'route_name' => 'add-product',
                    //     'params' => [
                    //         'layout' => 'side-menu'
                    //     ],
                    //     'title' => 'Add Product',
                    // ],
                    
                    'reviews' => [
                        'icon' => '',
                        'route_name' => 'reviews',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Reviews'
                    ],
                ]
            ],

            
            'transactions' => [
                'icon' => 'credit-card',
                'title' => 'Transactions',
                'sub_menu' => [
                    'transaction-list' => [
                        'icon' => '',
                        'route_name' => 'transaction-list',
                        'params' => [
                            'layout' => 'side-menu'
                        ],
                        'title' => 'Transaction List'
                    ],
                    // 'transaction-detail' => [
                    //     'icon' => '',
                    //     'route_name' => 'transaction-detail',
                    //     'params' => [
                    //         'layout' => 'side-menu'
                    //     ],
                    //     'title' => 'Transaction Detail'
                    // ]
                ]
            ], 
        ];
    }
}
