<form action="{{ url('/user_detail') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <select id="region_selector" name="region" >
        <option value="na1">North America</option>
        <option value="euw1">Europe West</option>
        <option value="eune1">Europe Nordic &amp; East</option>
        <option value="oc1">Oceania</option>
        <option value="jp1">Japan</option>
        <option value="tr1">Turkey (Türkiye)</option>
        <option value="ru">Russia (России)</option>
        <option value="br1">Brazil (Brasil)</option>
        <option value="la1">Latin America South</option>
        <option value="la2">Latin America North</option>
        <option value="kr">Korea (한국)</option>
    </select>

    <input type="text" name="summoner_name" id="summoner_name">

    <input type="submit" value="Gönder">
</form>