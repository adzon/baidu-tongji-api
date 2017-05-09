<?php
/**
 * Demo of Tongji API
 * set your information in Config.inc. php such as USERNAME, PASSWORD ... before use
 * especially, you can modify this Demo on your need!
 */
namespace Baidu\Tongji;

define('LOGIN_URL', 'https://api.baidu.com/sem/common/HolmesLoginService');

//Tongji API URL
define('API_URL', 'https://api.baidu.com/json/tongji/v1/ReportService');

//USERNAME
define('USERNAME', '******');

//PASSWORD
define('PASSWORD', '******');

//TOKEN
define('TOKEN', '******');

//UUID, used to identify your device, for instance: MAC address
define('UUID', '******');

//ACCOUNT_TYPE
define('ACCOUNT_TYPE', 1); //ZhanZhang:1,FengChao:2,Union:3,Columbus:4

$loginService = new LoginService(LOGIN_URL, UUID);

// preLogin
if (!$loginService->preLogin(USERNAME, TOKEN)) {
    exit();
}

// doLogin
$ret = $loginService->doLogin(USERNAME, PASSWORD, TOKEN);
if ($ret) {
    $ucid = $ret['ucid'];
    $st = $ret['st'];
}
else {
    exit();
}

$reportService = new ReportService(API_URL, USERNAME, TOKEN, $ucid, $st);

// get site list
$ret = $reportService->getSiteList();
echo $ret['raw'] . PHP_EOL;

$siteList = $ret['body']['data'][0]['list'];
if (count($siteList) > 0) {
    $siteId = $siteList[0]['site_id'];
    // get report data of the first site
    $ret = $reportService->getData(array(
        'site_id' => $siteId,                   //站点ID
        'method' => 'trend/time/a',             //趋势分析报告
        'start_date' => '20160501',             //所查询数据的起始日期
        'end_date' => '20160531',               //所查询数据的结束日期
        'metrics' => 'pv_count,visitor_count',  //所查询指标为PV和UV
        'max_results' => 0,                     //返回所有条数
        'gran' => 'day',                        //按天粒度
    ));
    echo $ret['raw'] . PHP_EOL;
}

// doLogout
$loginService->doLogout(USERNAME, TOKEN, $ucid, $st);
