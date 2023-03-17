<title>{{ $pagemeta->metatitle }}</title>
<meta name="description"  content="{{ $pagemeta->metadescription }}" />
<meta name="keywords"  content="{{ $pagemeta->metakeywords }}" />
       
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $pagemeta->metatitle }}" />
<meta property="og:description" content="{{ $pagemeta->metadescription }}" />

<meta property="twitter:card" content="summary_large_image" />
<meta property="twitter:title" content="{{ $pagemeta->metatitle }}" />
<meta property="twitter:description" content="{{ $pagemeta->metadescription }}" />
<!--Webpage Schema -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "url": "{{ url('/testprep')}}",
        "name": "{{ $pagemeta->metatitle }}",
        "description": "{{ $pagemeta->metadescription }}",
        "speakable":
        {
        "@type": "SpeakableSpecification",
        "cssSelector": ["header-section"]
        }}
    </script>
<!--Webpage Schema -->

 <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "url": "{{ url('/testprep')}}"
      
    }
  </script>   

<!--Organization schema -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Canaprep",
        "url": "{{ url('/testprep')}}",
        "logo": "{{ url('/prep/assets/images/cp-logo.svg') }}",
        "image": "{{ url('/prep/assets/images/cp-logo.svg') }}",
        "sameAs": ["https://www.linkedin.com/company/canamprep/","https://www.facebook.com/canamprep","https://www.instagram.com/canam.prep/"],
        "contactPoint" : [
    {
        "@type" : "ContactPoint",
        "telephone" : "1800 137 5499",
        "email":"info@canamprep.com",
        "contactType" : "customer service"
    }]}
    </script>
<!--Organization schema -->