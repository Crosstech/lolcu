@extends('layouts.app')

@section('scripts') 
<script src='js/vendor/tinymce/tinymce.min.js'></script>
<script>
  var route_prefix = "{{ url(config('lfm.prefix')) }}";

  $(function() {
      var editor_config = {
    path_absolute : "/",
    selector: "#news-content",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
  }); 
</script>

  <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
  </script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
  </script>
@endsection 

@section('content')

  <form method="post" enctype="multipart/form-data"  action="{{ url('/save_news') }}">
    <div class="row">
      <div class="col-md-6">
        <label for="news-title">Haber Başlığı</label>
        <input id="news-title" type="text" name="news_title" class="form-control" placeholder="Haber Başlığı">
      </div>
      <div class="col-md-6">
        <label for="news-subtitle">Haber AltBasligi</label>
        <input id="news-subtitle" type="text" name="news_subtitle" class="form-control" placeholder="Haber AltBaşlığı">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="news_cover"></label>
        <input type="file" id="news-cover" name="news_cover" class="form-control">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="image" type="file" id="upload" class="hidden" onchange="">
        <textarea id="news-content" name="news_content"></textarea>
        <div class="col-xs-4">
            <input type="submit" value="Kaydet" class="btn btn-info btn-fill pull-right">
        </div>
      </div>
    </div>
  </form>
@endsection
