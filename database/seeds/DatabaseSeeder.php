<?php

use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //champions
        // $path = storage_path().'/json/champion.json';

        // $json = json_decode(file_get_contents($path),true);

        // foreach($json['data'] as $c)
        // {
        //     DB::table('champions')->insert([
        //         'name'=>$c['name'],
        //         'champion_id'=>$c['key'],
        //         'title'=>$c['title'],
        //         'description'=>$c['blurb'],
        //         'attack'=>$c['info']['attack'],
        //         'defense'=>$c['info']['defense'],
        //         'magic'=>$c['info']['magic'],
        //         'difficulty'=>$c['info']['difficulty'],
        //         'image'=>$c['image']['full'],
        //         'partype'=>$c['partype']
        //     ]);
        // }


        // items
        // $path = storage_path().'/json/item.json';

        // $json = json_decode(file_get_contents($path),true);

        // foreach($json['data']as $i){

        //     $item_plaintext="";
        //     $item_name = "";
        //     $item_description = "";
        //     $item_id = explode(".",$i['image']['full'])[0];

        //     if(isset($i['plaintext'])){
        //         $item_plaintext=$i['plaintext'];
        //     }
        //     if(isset($i['name'])){
        //         $item_name=$i['name'];
        //     }
        //     if(isset($i['description'])){
        //         $item_description=$i['description'];
        //     }
        //     DB::table('items')->insert([
        //         'name'=>$item_name,
        //         'item_id'=>$item_id,
        //         'description'=>$item_description,
        //         'plaintext'=>$item_plaintext,
        //         'image'=>$i['image']['full'],
        //         'gold_buy'=>$i['gold']['total'],
        //         'gold_sell'=>$i['gold']['sell']

        //     ]);

        //mastery
        // $path = storage_path().'/json/mastery.json';

        // $json = json_decode(file_get_contents($path),true);

        // foreach($json['data'] as $m){
        //     $d2="";
        //     $d3="";
        //     $d4="";
        //     $d5="";

        //     if(isset($m['description'][1])){
        //         $d2=$m['description'][1];
        //     }
        //     if(isset($m['description'][2])){
        //         $d3=$m['description'][2];
        //     }
        //     if(isset($m['description'][3])){
        //         $d4=$m['description'][3];
        //     }
        //     if(isset($m['description'][4])){
        //         $d5=$m['description'][4];
        //     }
        //     DB::table('masteries')->insert([
        //         'name'=>$m['name'],
        //         'mastery_id'=> explode(".",$m['image']['full'])[0],
        //         'description1'=>$m['description'][0],
        //         'description2'=>$d2,
        //         'description3'=>$d3,
        //         'description4'=>$d4,
        //         'description5'=>$d5,
        //         'image'=>$m['image']['full'],
        //         'ranks'=>$m['ranks'],
        //         'prereq'=>$m['prereq']
        //     ]);

        // profileicons
        // $path = storage_path().'/json/profileicon.json';
        // $json = json_decode(file_get_contents($path),true);

        // foreach($json['data'] as $p){
        //     DB::table('profileicons')->insert([
        //         'icon_id'=>$p['id'],
        //         'image'=>$p['image']['full'],
        //     ]);
        // }

        //runes
        // $path = storage_path().'/json/rune.json';

        // $json = json_decode(file_get_contents($path),true);

        // foreach($json['data'] as $r){
        //     $plaintext="";

        //     if(isset($r['plaintext'])){
        //         $plaintext=$r['plaintext'];
        //     }
        //     DB::table('runes')->insert([
        //         'name'=>$r['name'],
        //         'rune_id'=> explode(".",$r['image']['full'])[0],
        //         'description'=>$r['description'],
        //         'plaintext'=>$plaintext,
        //         'tier'=>$r['rune']['tier'],
        //         'image'=>$r['image']['full']
        //     ]);
        // }

        //summoner spells
        $path = storage_path().'/json/summoner-rito.json';

        $json = json_decode(file_get_contents($path),true);

        foreach($json['data'] as $s){
            
            DB::table('summonerspells')->insert([
                'name'=> $s['name'],
                'spell_id'=>$s['id'],
                'key'=>$s['key'],
                'description'=>$s['description'],
                'summonerlevel'=>$s['summonerLevel'],
                'image'=>$s['key'].'.png'
            ]);
        }
    }
}