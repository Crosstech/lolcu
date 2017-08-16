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
         $client = new \GuzzleHttp\Client();
        
        //champions
        //  $uri= 'https://tr1.api.riotgames.com/lol/static-data/v3/champions?locale=tr_TR&dataById=false&api_key='.env('RITO_API_KEY');
        
        //  $response = $client->get($uri);
        //  $body = $response->getBody();
        //  $obj= json_decode($body);
              
        // foreach($obj->data as $champion)
        // {
        //     DB::table('champions')->insert([
        //         'name' => $champion->name,
        //         'title' => $champion->title,
        //         'key' => $champion->key,
        //         'champion_id'=>$champion->id
        //     ]);
        // }

        // items
        // $uri= 'https://tr1.api.riotgames.com/lol/static-data/v3/items?locale=tr_TR&api_key='.env('RITO_API_KEY');
        
        //  $response = $client->get($uri);
        //  $body = $response->getBody();
        //  $obj= json_decode($body);

        // foreach($obj->data as $item)
        // {
        //     $item_plaintext="";
        //     $item_name = "";
        //     $item_description = "";
        //     $item_id = $item->id;
        //     if(isset($item->plaintext)){
        //         $item_plaintext=$item->plaintext;
        //     }
        //     if(isset($item->name)){
        //         $item_name=$item->name;
        //     }
        //     if(isset($item->description)){
        //         $item_description=$item->description;
        //     }

        //     DB::table('items')->insert([
        //         'name' => $item_name,
        //         'description' => $item_description,
        //         'plaintext' => $item_plaintext,
        //         'item_id'=>$item_id
        //     ]);
        // }
    }
}
