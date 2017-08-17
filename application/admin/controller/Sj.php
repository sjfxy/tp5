<?php
namespace app\admin\controller;
use app\common\builder\ZBuilder;
use think\Db;
class Sj extends \think\Controller
{
 //使用ZBuilder构建表单页面
 public function add(){
     // 使用ZBuilder构建表单页面，并将页面标题设置为“添加”
        return ZBuilder::make('form')->setPageTitle('添加')->fetch();
 }
 public function show(){
//     return ZBuilder::make('form')->setPageTitle('添加')
//             ->setPageTips('这里是提示信息')
//             ->fetch();
     //success info danger warning
//        return ZBuilder::make('form')
//                ->setPageTitle('添加')
//                ->setPageTips('添加新闻信息','warning')
//                ->fetch();
          return ZBuilder::make('form')
                  ->setPageTitle('用户信息添加')
                  ->setPageTips('请添加用户信息','success')
                  ->addBtn('<button type="button" class="btn btn-default">额外按钮</button>')
                   ->addBtn('<button type="button" class="btn btn-primary">额外按钮2</button>')
                  ->setUrl("http://www.dol.com/admin.php/admin/sj/post")
                  ->fetch();
 }
 public function post(){
     //echo url('admin/sj/post');
     echo 'ss';
 }
 public function t(){
//     if(\think\Request::instance()->isPost()){
//       
//         echo 'ss';
//     }  else {
//          return ZBuilder::make('form')
//    ->setPageTitle('添加')
//    ->addCheckbox('city', '选择城市', '', ['gz' => '广州', 'sz' => '深圳', 'sh' => '上海'])
//    ->fetch();
//     }
//     $list_city = ['gz' => '广州', 'sz' => '深圳', 'sh' => '上海'];
//
//return ZBuilder::make('form')
//    ->setPageTitle('添加')
//    ->addCheckbox('city', '选择城市', '请选择城市', $list_city, 'gz')
//    ->fetch();
//        if(Request::instance()->isPost()){
//            echo 'ss';
//        }
//     return ZBuilder::make('form')
//    ->addText('title', '标题')
//    ->addTextarea('summary', '摘要')
//    ->addUeditor('content', '内容')
//    ->addImage('pic', '封面')
//    ->addTags('tags', '标签')
//    ->addFile('files', '附件')
//    ->fetch();
//    return ZBuilder::make('form')
//    ->addFormItem('text', 'title', '标题')
//    ->addFormItem('textarea', 'summary', '摘要')
//    ->addFormItem('ueditor', 'content', '内容')
//    ->addFormItem('image', 'pic', '封面')
//    ->addFormItem('tags', 'tags', '标签')
//    ->addFormItem('file', 'files', '附件')
//    ->fetch();
//     return ZBuilder::make('form')
//    ->addFormItems([
//    	['text', 'title', '标题'],
//        ['textarea', 'summary', '摘要'],
//        ['ueditor', 'content', '内容'],
//        ['image', 'pic', '封面'],
//        ['tags', 'tags', '标签'],
//        ['file', 'files', '附件']
//   ])
//    ->fetch();
     
//     return ZBuilder::make('form')
//    ->setFormItems(
//      [
//          [
//			'type' => 'text',
//            'name' => 'title',
//            'title' => '标题'
//          ],
//          [
//			'type' => 'textarea',
//            'title' => '摘要',
//            'name' => 'summary'
//          ],
//          [
//			'type' => 'ueditor',
//            'name' => 'content',
//            'title' => '内容'
//          ],
//          [
//			'type' => 'image',
//            'name' => 'pic',
//            'title' => '封面'
//          ],
//          [
//			'type' => 'tags',
//            'name' => 'tags',
//            'title' => '标签'
//          ],
//          [
//			'type' => 'file',
//            'name' => 'files',
//            'title' => '附件'
//          ],
//          [
//            'type' => 'group',
//            'options' => [
//                '微信支付' =>[
//                    [
//                    'type' => 'text',
//                    'name' => 'appid1',
//                    'title' => 'APPID'
//                    ],
//                    [
//                    'type' => 'text',
//                    'name' => 'appkey1',
//                    'title' => 'APPKEY'
//                    ]
//                ],
//                '支付宝支付' =>[
//                    [
//                    'type' => 'text',
//                    'name' => 'appid2',
//                    'title' => 'APPID'
//                    ],
//                    [
//                    'type' => 'text',
//                    'name' => 'appkey2',
//                    'title' => 'APPKEY'
//                    ]
//                ]
//             ]
//          ]
//      ]
//    )
//    ->fetch();
//     $data = Db::table('dp_admin_menu')
//    ->find();
//
//
//return ZBuilder::make('form')
//    ->addText('title', '标题')
//    ->addTextarea('summary', '摘要')
//    ->addUeditor('content', '内容')
//    ->addImage('pic', '封面')
//    ->fetch('', $data);
// }
//     return ZBuilder::make('form')
//              ->addNumber('size', '尺寸', '', ''. '-10')
//               ->addPassword('password', '密码')
//    ->addColorpicker('color', '请选择颜色')
//    ->fetch();
//     return ZBuilder::make('form')
//    ->addSelect('city', '选择城市', '', ['gz' => '广州', 'sz' => '深圳', 'sh' => '上海'])
//    ->fetch();
//     $list_city = ['gz' => '广州', 'sz' => '深圳', 'sh' => '上海'];
//
//return ZBuilder::make('form')
//    ->setPageTitle('添加')
//    ->addSelect('city', '选择城市', '请选择城市', $list_city, 'gz')
//    ->fetch();
//     
//     $list_city = ['gz' => '广州', 'sz' => '深圳', 'sh' => '上海'];
//
//return ZBuilder::make('form')
//    ->setPageTitle('添加')
//    ->addSelect('city', '选择城市', '请选择城市', $list_city, '', 'multiple')
//    ->fetch();
     
//     $list_city = ['gz' => '广州', 'sz' => '深圳', 'sh' => '上海'];
//
//return ZBuilder::make('form')
//    ->setPageTitle('添加')
//    ->addSelect('city', '选择城市', '请选择城市', $list_city, 'gz,sh', 'multiple')
//    ->fetch();
     
     
//     $list_province = ['gd' => '广东', 'gx' => '广西'];
//
//return ZBuilder::make('form')
//    ->addLinkage('province', '选择省份', '', $list_province, '', url('get_city'), 'city')
//    ->addSelect('city', '选择城市')
//    ->fetch();
     
      // 使用ZBuilder构建表单页面，并将页面标题设置为“添加”
        $list_province = ['gd' => '广东', 'gx' => '广西'];

        return ZBuilder::make('form')
            ->addLinkage('province', '选择省份', '', $list_province, '', url('get_city'), 'city,area')
            ->addLinkage('city', '选择城市', '', '', '', url('get_area'), 'area')
            ->addSelect('area', '选择地区')
            ->fetch();
 }
 
//   public function get_city($province = '')
//    {
//        $arr['code'] = '1'; //判断状态
//        $arr['msg'] = '请求成功'; //回传信息
//        $arr['list'] = [
//            ['key' => 'gz', 'value' => '广州'],
//            ['key' => 'sz', 'value' => '深圳'],
//        ]; //数据
//        return json($arr);
//    }
     // 根据省份获取城市
    public function get_city($province = '')
    {
        $arr['code'] = '1'; //判断状态
        $arr['msg'] = '请求成功'; //回传信息
        $arr['list'] = [
            ['key' => 'gz', 'value' => '广州'],
            ['key' => 'sz', 'value' => '深圳'],
        ]; //数据
        return json($arr);
    }
      // 根据城市获取地区
    public function get_area($city = '')
    {
        $arr['code'] = '1'; //判断状态
        $arr['msg'] = '请求成功'; //回传信息
        $arr['list'] = [
            ['key' => 'th', 'value' => '天河'],
            ['key' => 'by', 'value' => '白云'],
        ]; //数据
        return json($arr);
    }
    //这里所有的页面布局都是采用程序的形式去搭建一个后台
    //充分发挥了所有的页面都是数据模型的概念 就是一个增删改查的过程
    //让对数据库的操作 出发结合最新的页面样式 页面布局 页面的动态交互效果
    //进行中间层进行处理的基于数据模型的开发思想 快速的进行数据库数据模型 对象的开发进行基于数据的模式
    //前台的模式当然有几种开发模式 第一种是正常的 请求 中间层请求过滤 请求路由 路由解析 
    //身份验证 ip过滤 
    //控制器 方法 业务逻辑 数据接口 视图 扩展  插件 命令行 
    //这样的开发模式 
    //angular.js+html css js jquery jqueryui eaui yii ext.js  react.js vue.js boostratp foundation layui amizui
    //这样的模式 curl http tcp/ip php php7 opcache apcu apc yac yacoonf yar yaf phalcon
    public function fy(){
//        return ZBuilder::make('form')
//    ->addLinkages('city', '选择所在城市', '', 'test')
//    ->fetch();
//        return ZBuilder::make('form')
//    ->addLinkages('area', '选择所在地区', '', 'test', 3)
//    ->fetch();
        
//        return ZBuilder::make('form')
//    ->addLinkages('area', '选择所在地区', '', 'test', 3, 8)
//    ->fetch();
//        $list_province = ['gd' => '广东', 'gx' => '广西'];
//
//return ZBuilder::make('form')
//    ->addSort('province', '调整省份顺序', '', $list_province)
//    ->fetch();
//        return ZBuilder::make('form')
//    ->addStatic('name', '名称')
//    ->fetch();
//        return ZBuilder::make('form')
//    ->addMasked('mobile', '请填写手机号码', '', '99999999999')
//    ->fetch();
//        return ZBuilder::make('form')
//    ->addDatetime('create_time', '发布时间')
//    ->fetch();
//        return ZBuilder::make('form')
//    ->addDaterange('date', '日期范围')
//    ->fetch();
//        return ZBuilder::make('form')
//    ->addJcrop('avatar', '头像')
//    ->fetch();
//        return ZBuilder::make('form')
//    ->addBmap('map', '地图', 'wzYBbMD1vRChljfWNuFKXx4UxP5cRmvD')
//    ->fetch();
        
  

$settings = [
    [
        'title'   => '站点开关',
        'tips'    => '站点关闭后将不能访问',
        'checked' => Db::name('admin_config')->where('id', 1)->value('value'),
        'table'   => 'admin_config',
        'id'      => 1,
        'field'   => 'value'
    ]
];

// 使用ZBuilder快速侧栏
ZBuilder::make('aside')->addBlock('switch', '系统设置', $settings);
       
    }
}