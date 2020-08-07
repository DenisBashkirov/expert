<?php

namespace App\Http\Controllers\Frontend;

use App\Events\LeadFormSubmitted;
use App\Mail\OrderReceived;
use App\Service;
use App\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Route;
use Cookie;
use Illuminate\Support\Facades\Mail as Mail;

class FrontendOutputController extends FrontendBaseController
{
    protected $route_name;
    protected $page;

    public function __construct(Request $request) {

        $company = [
            'phone'=>'8 (861) 238 87 03',
            'phone_href'=>'88612388703',
            'address'=>'г. Краснодар, ул. Степана Разина, 72, оф. 206',
            'address_legal'=>'г. Краснодар, ул. Калинина, 350/7',
            'email'=>'expert@roseksp.ru'
        ];
        View::share('company', $company);

        $services['expertize'] = Service::where('category_id', 1)->get();
        $services['appraisal'] = Service::where('category_id', 2)->get();
        $services['reviewing'] = Service::where('category_id', 3)->get();
        View::share('services_list', $services);

        // сохраняем utm из url в сессию
        foreach ($request->input() as $key=>$val) {
            if(strripos($key, 'utm') === 0) {
                session([$key => $val]);
            }
        }

        // Случай перехода не по рекламе (нет utm, но есть источник)
        if(!session('utm_source') & array_key_exists('HTTP_REFERER', $_SERVER)) {
            $referer = $_SERVER['HTTP_REFERER'];
            $referer = explode('//', $referer)[1];
            if (mb_strpos($referer, 'www') === false) {
                $source = explode('.', $referer)[0];
            } else {
                $source = explode('.', $referer)[1];
            }

            session(['utm_source' => $source]);

            if ($source = 'google' || $source = 'yandex') {
                session(['utm_medium' => 'organic']);
            }

        }

        // Случай прямого входа на сайт (нет utm_source и нет источника перехода)
        if(!session('utm_source') & !array_key_exists('HTTP_REFERER', $_SERVER)) {
            session(['utm_source' => '(direct)']);
            session(['utm_medium' => '']);
        }


        $this->route_name = Route::currentRouteName();
        $this->template = 'frontend.pages.' . $this->route_name;
        View::share('current_route', $this->route_name);

        $current_urn = str_replace(env('APP_URL'), '', URL::current());
        if ($current_urn == '')
            $current_urn = '/';
    }

    public function home() {

        $meta = [
            'title' => 'Независимая экспертиза в Краснодаре | ООО "Эксперт"',
            'description' => '',
            'h1' => 'Независимая экспертиза в Краснодаре',
        ];
        $this->varsAdd('meta', $meta);

        $service_categories = ServiceCategory::all();
        $this->varsAdd('service_categories', $service_categories);

        return $this->renderOutput();
    }

    public function services($service_category) {

        $category = ServiceCategory::where('slug', $service_category)->first();
        $services = Service::where('category_id', $category->id)->get();

        $this->varsAdd('services', $services);
        $this->varsAdd('service_category', $category);

        $meta = [
            'title' => $category->name . ' в Краснодаре',
            'description' => $category->meta_description,
            'h1' => $category->h1,
        ];
        $this->varsAdd('meta', $meta);

        return $this->renderOutput();
    }

    public function service($service) {

        $service = Service::where('slug', $service)->first();
        $this->varsAdd('service', $service);

        $meta = [
            'title' => $service->name . ' в Краснодаре',
            'description' => $service->meta_description,
            'h1' => $service->name,
        ];
        $this->varsAdd('meta', $meta);

        return $this->renderOutput();
    }

    public function contacts() {

        $meta = [
            'title' => 'Контакты',
            'description' => '',
            'h1' => 'Контакты',
        ];
        $this->varsAdd('meta', $meta);

        return $this->renderOutput();

    }

    public function thanks(Request $request) {

        $data = array_merge($request->all(), $request->session()->all());

        if($request->method() != 'GET') {
            event(new LeadFormSubmitted($data));
        }

        return $this->renderOutput();
    }
}
