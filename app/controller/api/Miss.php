<?php
declare (strict_types=1);

namespace app\controller\api;

use think\Exception;
use think\facade\App;
use think\Response;

class Miss extends Base {

    public function index(): Response {
        $version = config('apiadmin.APP_VERSION');
        if (!$version) {
            throw new Exception('请先执行安装脚本，完成项目初始化！');
        } else {
            return $this->buildSuccess([
//                'ApiVersion' => $version,
//                'TpVersion'  => App::version(),
//                'Company'    => config('apiadmin.COMPANY_NAME'),

            ],'此地址未找到对应接口，请检查接口地址是否正确，或者联系管理员！',404);
        }
    }
}
