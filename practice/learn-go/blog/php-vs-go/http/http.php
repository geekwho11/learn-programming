<?php

/**
 * @Author: GeekWho
 * @Date:   2019-01-24 17:22:59
 * @Last Modified by:   GeekWho
 * @Last Modified time: 2019-01-24 21:53:02
 */
// 启动本地的2018端口的Http Server
$server = new Swoole\Http\Server("0.0.0.0", 2018, SWOOLE_BASE);

// 设置worker 数量 和 守护进程化
$server->set([
    'worker_num' => 1,
    'daemonize' => 1,
]);

// 添加请求回调
$server->on('Request', function ($request, $response) {
    // 加载协程类
    include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'coroutine/coroutine.php';
    // 从缓冲区获取数据
    ob_start();
    (new SwooleCoroutine())->run();
    $http = ob_get_contents();
    ob_end_clean();
    // 输出结果
    $response->end($http);
});
// 启动服务
$server->start();
