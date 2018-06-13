<?php

namespace App\Http\Controllers;

use App\Http\Models\Article;
use App\Http\Models\Config;
use App\Http\Models\Country;
use App\Http\Models\Invite;
use App\Http\Models\Label;
use App\Http\Models\Level;
use App\Http\Models\Order;
use App\Http\Models\OrderGoods;
use App\Http\Models\ReferralApply;
use App\Http\Models\ReferralLog;
use App\Http\Models\SsConfig;
use App\Http\Models\SsGroup;
use App\Http\Models\SsGroupNode;
use App\Http\Models\SsNode;
use App\Http\Models\SsNodeInfo;
use App\Http\Models\SsNodeLabel;
use App\Http\Models\SsNodeOnlineLog;
use App\Http\Models\SsNodeTrafficDaily;
use App\Http\Models\SsNodeTrafficHourly;
use App\Http\Models\User;
use App\Http\Models\UserBalanceLog;
use App\Http\Models\UserBanLog;
use App\Http\Models\UserLabel;
use App\Http\Models\UserSubscribe;
use App\Http\Models\UserTrafficDaily;
use App\Http\Models\UserTrafficHourly;
use App\Http\Models\UserTrafficLog;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Redirect;
use Response;
use Log;
use DB;

class FrontController extends Controller
{
//    protected static $config;
  /**
   * 官网首页
   */
  public function index()
  {

    return view('front/index');
  }

  /**
   * Navbar-1 产品特性
   */
  public function features()
  {

    return view('front/features');
  }

  /**
   * Navbar-3 服务器
   */
  public function servers()
  {

    return view('front/servers');
  }

  /**
   * Navbar-4 Vpn应用
   */
  public function download()
  {

    return view('front/download2');
  }

  public function android()
  {

    return view('front/download/android');
  }

  public function macos()
  {

    return view('front/download/macos');
  }

  public function ios()
  {

    return view('front/download/ios');
  }

  public function support()
  {

    return view('front/faq');
  }

  public function order()
  {

    return view('front/order');
  }

  public function aboutus()
  {
    return view('front/aboutus');
  }

  public function privacy()
  {
    return view('front/privacy');
  }

  public function survice()
  {
    return view('front/survice');
  }
}
