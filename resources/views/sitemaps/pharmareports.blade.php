<?php
echo '<?xml version="1.0"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   @foreach($pharmareports as $pharmareport)
    <url>
        <loc>{{ url('/') }}/pharma-reports/{{$pharmareport->url}}</loc>
    
    
        <lastmod> {{ $pharmareport->updated_at }} </lastmod>
    
        <changefreq>daily</changefreq>
    
        <priority>0.1</priority>
    </url>
    @endforeach
</urlset>