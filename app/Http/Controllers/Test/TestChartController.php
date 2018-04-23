<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Hisune\EchartsPHP\ECharts;
use Hisune\EchartsPHP\Doc\IDE\YAxis;

class TestChartController extends Controller
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
        return view('testChart');
    }

    public function bar_simple(){
        $chart = new ECharts();
        $chart->tooltip->show = true;
        $chart->legend->data[] = '销量';
        $chart->xAxis[] = array(
            'type' => 'category',
            'data' => array("衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子")
        );

        $yAxis = new YAxis();
        $yAxis->type = 'value';
        $chart->addYAxis($yAxis);

        $chart->series[] = array(
            'name' => '销量',
            'type' => 'bar',
            'data' => array(5, 20, 40, 10, 10, 20)
        );
        echo $chart->render('simple-custom-id');
    }
}
