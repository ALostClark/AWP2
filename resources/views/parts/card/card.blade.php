<div class="post" style="border: 2px solid black; border-radius: 5px; padding-left: 5px; padding-right: 5px">
    <div id="header" class="border-bottom"><b>{{ $title }}</b></div>
    <div id="body" style="white-space: pre-line">{!! Str::words($body, $limit=50, $end='...') !!}</div>
    <div id="footer" class="border-top">
        <div id="info" class="text-left" style="width: 70%; display: inline-block">
            {{ $footer }}
        </div>
        <div class="text-right" style="width: 29%; display: inline-block">
            <a href="{{ $link }}">Read more...</a>
        </div>
    </div>
</div>




