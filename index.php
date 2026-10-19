<?php
date_default_timezone_set('Asia/Manila');

$data = [
    "META" => [
        "APP_NAME" => "LOADER",
        "APP_VERSION_CODE" => 1,
        "VERSION_REASON" => "you are using the outdated app please wait for online update.",
        "UPDATE_URL" => "https://t.me/Sovereign_astral"
    ],
    "DATA" => [
        [
            "URL" => "https://4amvip.x10.mx/connect",
            "NAME" => "VOLTEX DELUXE",
            "LOGO" => "https://4amvip.x10.mx/Loader/Assets/Ast.png",
            "DOWNLOAD" => "https://github.com/Niuniu143/XuMuyan/raw/refs/heads/main/lib1.so",
            "GAME" => "com.garena.game.codm",
            "ARCH" => "64bit",
            "KEY" => "20001112",
            "TYPE" => "VVIP",
            "STATUS" => "ACTIVE"
        ],   
        [
            "URL" => "https://4amvip.x10.mx/connect",
            "NAME" => "HUMPHREY VIP MOD",
            "LOGO" => "https://4amvip.x10.mx/Loader/Assets/1.png",
            "DOWNLOAD" => "https://github.com/Niuniu143/XuMuyan/raw/refs/heads/main/lib4.so",
            "GAME" => "com.garena.game.codm",
            "ARCH" => "64bit",
            "KEY" => "20001112",
            "TYPE" => "CODMGR",
            "STATUS" => "ACTIVE"
        ],     
        [
            "URL" => "https://mod-panel-kappa.vercel.app/api/connect",
            "NAME" => "HOSKE V14 MOD",
            "LOGO" => "https://4amvip.x10.mx/Loader/Assets/2.png",
            "DOWNLOAD" => "https://github.com/Niuniu143/XuMuyan/raw/refs/heads/main/lib5.so",
            "GAME" => "com.garena.game.codm",
            "ARCH" => "64bit",
            "KEY" => "20001112",
            "TYPE" => "CODMGR",
            "STATUS" => "ACTIVE"
        ],  
        [
            "URL" => "https://4amvip.x10.mx/connect",
            "NAME" => "JX-CODMGR",
            "LOGO" => "https://4amvip.x10.mx/Loader/Assets/3.png",
            "DOWNLOAD" => "https://github.com/Niuniu143/XuMuyan/raw/refs/heads/main/lib6.so",
            "GAME" => "com.garena.game.codm",
            "ARCH" => "64bit",
            "KEY" => "20001112",
            "TYPE" => "CODM",
            "STATUS" => "ACTIVE"
        ],  
        [
            "URL" => "https://4amvip.x10.mx/connect",
            "NAME" => "KYZ MOD",
            "LOGO" => "https://4amvip.x10.mx/Loader/Assets/4.png",
            "DOWNLOAD" => "https://github.com/Niuniu143/XuMuyan/raw/refs/heads/main/lib11.so",
            "GAME" => "com.garena.game.codm",
            "ARCH" => "64bit",
            "KEY" => "20001112",
            "TYPE" => "CODMGR",
            "STATUS" => "ACTIVE"
        ],  
        [
            "URL" => "https://4amvip.x10.mx/connect",
            "NAME" => "GHOSTX MOD",
            "LOGO" => "https://4amvip.x10.mx/Loader/Assets/Xen.png",
            "DOWNLOAD" => "https://github.com/Niuniu143/XuMuyan/raw/refs/heads/main/lib7.so",
            "GAME" => "com.garena.game.codm",
            "ARCH" => "64bit",
            "KEY" => "20001112",
            "TYPE" => "CODMGR",
            "STATUS" => "ACTIVE"
        ],  
    ]
];

header("Content-Type: application/json");
echo base64_encode(json_encode($data));
