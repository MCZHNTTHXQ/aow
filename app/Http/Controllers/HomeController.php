<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Hisune\EchartsPHP\ECharts;
use Hisune\EchartsPHP\Doc\IDE\YAxis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $chart = new ECharts();
//        $sdstr = 'O:25:"Hisune\EchartsPHP\ECharts":3:{s:7:"_events";a:0:{}s:8:" * jsVar";s:13:"5ad993af2d2e7";s:8:"_options";a:8:{s:5:"title";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:1:{s:4:"text";s:15:"测试bar stack";}}s:7:"tooltip";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:3:{s:4:"show";b:1;s:7:"trigger";s:4:"axis";s:11:"axisPointer";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:1:{s:4:"type";s:6:"shadow";}}}}s:6:"legend";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:1:{s:4:"data";a:9:{i:0;s:12:"直接访问";i:1;s:12:"邮件营销";i:2;s:12:"联盟广告";i:3;s:12:"视频广告";i:4;s:12:"搜索引擎";i:5;s:6:"百度";i:6;s:6:"谷歌";i:7;s:6:"必应";i:8;s:6:"其他";}}}s:7:"toolbox";a:1:{s:7:"feature";a:5:{s:8:"dataZoom";a:1:{s:10:"yAxisIndex";s:4:"none";}s:8:"dataView";a:1:{s:8:"readOnly";b:0;}s:9:"magicType";a:1:{s:4:"type";a:2:{i:0;s:4:"line";i:1;s:3:"bar";}}s:7:"restore";a:0:{}s:11:"saveAsImage";a:0:{}}}s:4:"grid";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:4:{s:4:"left";s:2:"3%";s:5:"right";s:2:"4%";s:6:"bottom";s:2:"3%";s:12:"containLabel";b:1;}}s:5:"xAxis";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:1:{i:0;a:2:{s:4:"type";s:8:"category";s:4:"data";a:7:{i:0;s:6:"周一";i:1;s:6:"周二";i:2;s:6:"周三";i:3;s:6:"周四";i:4;s:6:"周五";i:5;s:6:"周六";i:6;s:6:"周日";}}}}s:5:"yAxis";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:1:{i:0;a:1:{s:4:"type";s:5:"value";}}}s:6:"series";O:26:"Hisune\EchartsPHP\Property":1:{s:8:"_options";a:5:{i:0;a:3:{s:4:"name";s:12:"直接访问";s:4:"type";s:3:"bar";s:4:"data";a:7:{i:0;i:320;i:1;i:332;i:2;i:301;i:3;i:334;i:4;i:390;i:5;i:330;i:6;i:320;}}i:1;a:4:{s:4:"name";s:12:"邮件营销";s:4:"type";s:3:"bar";s:5:"stack";s:6:"广告";s:4:"data";a:7:{i:0;i:120;i:1;i:132;i:2;i:101;i:3;i:134;i:4;i:90;i:5;i:230;i:6;i:210;}}i:2;a:4:{s:4:"name";s:12:"联盟广告";s:4:"type";s:3:"bar";s:5:"stack";s:6:"广告";s:4:"data";a:7:{i:0;i:220;i:1;i:182;i:2;i:191;i:3;i:234;i:4;i:290;i:5;i:330;i:6;i:310;}}i:3;a:4:{s:4:"name";s:12:"视频广告";s:4:"type";s:3:"bar";s:5:"stack";s:6:"广告";s:4:"data";a:7:{i:0;i:150;i:1;i:232;i:2;i:201;i:3;i:154;i:4;i:190;i:5;i:330;i:6;i:410;}}i:4;a:4:{s:4:"name";s:12:"搜索引擎";s:4:"type";s:3:"bar";s:4:"data";a:7:{i:0;i:862;i:1;i:1018;i:2;i:964;i:3;i:1026;i:4;i:1679;i:5;i:1600;i:6;i:1570;}s:8:"markLine";a:2:{s:9:"lineStyle";a:1:{s:6:"normal";a:1:{s:4:"type";s:6:"dashed";}}s:4:"data";a:1:{i:0;a:2:{i:0;a:1:{s:4:"type";s:3:"min";}i:1;a:1:{s:4:"type";s:3:"max";}}}}}}}}}';
//        $chart0 = unserialize($sdstr);
//
//        foreach ($chart0 as $key => $value) {
//            if(isset($chart->$key)){
//                $chart->$key = $value;
//            }
//        }
//        echo $chart->render('simple-custom-id');die;
        return view('home');
    }
}
