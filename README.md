把百度tongji API放到了composer里面,

这个api的介绍：

http://tongji.baidu.com/open/api/more?p=tongjiapi_guide.tpl

Tongji API是百度统计提供的数据导出服务。

开通该服务能够帮助您灵活地批量导出您百度统计帐号内的报告数据。

导出数据后，您可以将报告数据接入自己的开发系统，进一步完成个性化的 数据分析、展现、运营监控等服务。

这里不得不吐槽下路由，?p=tongjiapi_guide.tpl，什么玩意这是。。直接包含的模版么？


有问题请邮件联系我： 76762@qq.com ~

# 百度Tongji Api SDK  composer版

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adzon/Baidu-tongji-api.svg?style=flat-square)](https://packagist.org/packages/adzon/Baidu-tongji-api)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/adzon/Baidu-tongji-api/master.svg?style=flat-square)](https://travis-ci.org/adzon/Baidu-tongji-api)
[![StyleCI](https://styleci.io/repos/:style_ci_id/shield)](https://styleci.io/repos/:style_ci_id)
[![Quality Score](https://img.shields.io/scrutinizer/g/adzon/Baidu-tongji-api.svg?style=flat-square)](https://scrutinizer-ci.com/g/adzon/Baidu-tongji-api)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/adzon/Baidu-tongji-api/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/adzon/Baidu-tongji-api/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/adzon/Baidu-tongji-api.svg?style=flat-square)](https://packagist.org/packages/adzon/Baidu-tongji-api)

本项目可以在 Laravel 5.4中使用 [百度统计](http://tongji.baidu.com/) 的 API 来将统计数据对接到自己业务管理系统内。

## Contents

- [安装说明](#安装说明)
- [使用说明](#使用说明)
- [更新日志](#更新日志)
- [Credits](#credits)
- [License](#license)

## 安装说明

```bash
composer require adzon/Baidu-tongji-api
```

## 使用说明

demo文件内容参见 demo/demo.php

## 更新日志

请直接参见commit提交～～～

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [adzon](https://github.com/adzon)
- [执行力就是挨个搞](http://www.huleping.com/)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
