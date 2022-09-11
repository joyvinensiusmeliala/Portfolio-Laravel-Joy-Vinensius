<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>
<!-- Favicon -->
{{--  <link rel="icon" type="image/png" href="images/favicon.png">  --}}
<link rel="shortcut icon" href="storage/photos/1/logo-366.png">
<!-- Web Font -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
<!-- StyleSheet -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/glightbox.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/glightbox.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/aos.css?ver=1.2.0')}}">
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/main.css?ver=1.2.0')}}">
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0')}}">
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome/css/all.min.css?ver=1.2.0')}}">

{{--  Start CSS for Content Page   --}}
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/feature.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/value.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/count.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/client.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/skill-programming.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/portfolio.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/our-team.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/portfolio/footer.css')}}">
{{--  End CSS for Content Page   --}}
<style>

