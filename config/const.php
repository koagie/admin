<?php
return[
    // 管理画面用のクッキー名称、セッションテーブル名
    'session_cookie_admin' => env('SESSION_COOKIE_ADMIN', str_slug(env('APP_NAME', 'laravel'), '_').'_session'),
    'ssession_table_admin' => env('SESSION_TABLE_ADMIN'),
]

?>
