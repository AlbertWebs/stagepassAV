<?php

namespace App\Http\Controllers;
use DB;
use OpenGraph;
use SEOMeta;
use Twitter;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.home.index');
    }

    public function about(){
        return view('front.about.index');
    }

    public function services(){
        return view('front.services.index');
    }

    public function service($slung){
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Services';
        $Services = DB::table('services')->where('slung', $slung)->get();

        foreach($Services as $services){
            $page_title = $services->title;
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle('' . $page_title . ' - ' . $Settings->sitename . ' ');
                SEOMeta::setDescription('' . $Settings->welcome . '');
                SEOMeta::setCanonical('' . $Settings->url . '/av-services/' . $page_title . '');

                OpenGraph::setDescription('' . $Settings->welcome . '');
                OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                OpenGraph::setUrl('' . $Settings->url . '/av-services/' . $page_title . '');
                OpenGraph::addProperty('type', 'articles');

                Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                Twitter::setSite('' . $Settings->twitter . '');

                return view('front.services.service', compact('Services', 'page_title', 'page_name'));
            }
        }
    }

    public function service_extra($service_title,$extra_title){
        $SEOSettings = DB::table('seosettings')->get();
        $page_name = 'Services';

        $Services = DB::table('services')->where('slung', $service_title)->get();
        foreach($Services as $Ser){
            $Extra = DB::table('extras')->where('service_id',$Ser->id)->where('slung',$extra_title)->get();
            $page_titleSEOSettings = DB::table('seosettings')->get();
            foreach ($SEOSettings as $Settings) {
                foreach($Extra as $theExtras){
                    $page_title = $Ser->title . " - " . $theExtras->title ;
                    $page_sub_title = $Ser->title;
                    SEOMeta::setTitle('' . $page_title . ' - ' . $Settings->sitename . ' ');
                    SEOMeta::setDescription('' . $Settings->welcome . '');
                    SEOMeta::setCanonical('' . $Settings->url . '/av-service/' . $page_title . '/'.$page_sub_title.'');

                    OpenGraph::setDescription('' . $Settings->welcome . '');
                    OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                    OpenGraph::setUrl('' . $Settings->url . '/av-service/' . $page_title . '/'.$page_sub_title.'');
                    OpenGraph::addProperty('type', 'articles');

                    Twitter::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
                    Twitter::setSite('' . $Settings->twitter . '');
                }



                return view('front.extra', compact('Extra', 'page_title', 'page_name'));
            }
        }

    }

    public function contact_us(){
        return view('front.contact.index');
    }

    public function our_work(){
        return view('front.work.index');
    }

    public function work($slung){
        return view('front.work.work');
    }



}
