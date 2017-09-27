<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Tag;

use Carbon\Carbon;

class NewsController extends Controller
{
    public function create()
    {
        return view('news.create');
    }

    public function get_news_detail(Request $request)
    {
        $news = News::where('seo',$request->seo)->first();
        return view('news.detail',compact('news'));
    }

    public function save_news(Request $request){

        $prefix = Carbon::now()->toDateString();
        $destination = public_path().'/newsImages';
        $fileName = $prefix.str_replace(' ', '', $request->file('news_cover')->getClientOriginalName());


        $request->file('news_cover')->move($destination, $fileName);

        
        $news = new News();
        $news->content = $request->news_content;
        $news->seo = $this->seoify($request->news_title);
        $news->title = $request->news_title;
        $news->subtitle = $request->news_subtitle;
        $news->cover_image = $fileName;

        $news->save();

        return $news;
    }

    public function get_news_by_tag($tag)
    {
        $news = [];
        $tags = Tag::where('tag',$tag)->get();
        foreach($tags as $tag){

            $news[] = News::where('id',$tag->news_id)->first();
        }
        return view('news.list',compact('news','tag'));
    }

    function seoify($text){
        $turkce = array("ş", "Ş", "ı", "(", ")", "‘", "ü", "Ü", "ö", "Ö", "ç", "Ç", " ", "/", "*", "?", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
        $duzgun = array("s", "S", "i", "", "", "", "u", "U", "o", "O", "c", "C", "-", "-", "-", "", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
        $seo_uyumlu_link = str_replace($turkce, $duzgun, $text);
        $seo = str_slug($seo_uyumlu_link);

        return $seo;
    }
}
