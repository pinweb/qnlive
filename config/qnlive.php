<?php

return [

    'ak' => env('QINIU_AK', ''),   // 七牛 AK

    'sk' => env('QINIU_SK', ''),   // 七牛 SK

    'hub' => '',   // 直播空间

    'push_domain' => '',   // 直播推流域名

    'expire' => 60 * 60,   //直播推流地址过期时间，单位秒

    'rtmp_domain' => '',   // RTMP直播地址

    'hls_domain' => '',   // HLS直播地址

    'hdl_domain' => '',   // HDL直播地址

    'snapshot_domain' => '',   // 截图直播地址

];
