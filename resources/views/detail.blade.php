@extends('layouts.app')
@section('content')
    <div class="jumbotron">
    <h1 align="center" style="font-size:100px;font-family:Aclonica">{{$post->title}}</h1>
    </div>
    <div class="container">
        <p><h3>{!!$post->body!!}</h3></p>
    </div>

    <div class="container">
    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{$post->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://hassanslab.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
</div>
@endsection