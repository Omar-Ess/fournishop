<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport"
      content="width=device-width, initial-scale=1">

   {{-- Favicons --}}
   <link rel="apple-touch-icon"
      sizes="152x152"
      href="{{ asset('/theme-images/favicons/apple-touch-icon.png') }}">
   <link rel="icon"
      type="image/png"
      sizes="32x32"
      href="{{ asset('/theme-images/favicons/favicon-32x32.png') }}">
   <link rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('/theme-images/favicons/favicon-16x16.png') }}">
   <link rel="manifest"
      href="{{ asset('/theme-images/favicons/site.webmanifest') }}">
   <link rel="mask-icon"
      href="{{ asset('/theme-images/favicons/safari-pinned-tab.svg') }}"
      color="#5bbad5">
   <meta name="msapplication-TileColor"
      content="#da532c">
   <meta name="theme-color"
      content="#ffffff">

   {{-- SEO --}}
   <title>
      {{ $constructedTitle }}
   </title>
   <meta content="{{ $constructedDescription }}"
      name="description">
   <meta name="author"
      content="{{ config('app.name') }}">
   <link rel="canonical"
      href="{{ config('app.url') }}{{ $canonical }}" />
   <meta property="og:locale"
      content="{{ str_replace('_', '-', app()->getLocale()) }}" />
   <meta property="og:type"
      content="website" />
   <meta property="og:title"
      content="{{ $constructedTitle }}" />
   <meta property="og:description"
      content="{{ $constructedDescription }}" />
   <meta property="og:image"
      content="{{ config('app.url') }}theme-images/logo.svg" />
   <meta property="og:url"
      content="{{ config('app.url') }}{{ $canonical }}" />
   <meta name="twitter:card"
      content="summary_large_image" />
   <meta property="og:site_name"
      content="{{ config('app.name') }}" />
   <meta name="twitter:image:alt"
      content="{{ config('app.name') }} Logo" />
   <meta name="keywords"
      content="chronoprint, chrono print, ChronoPrint, Chrono Print, chronoprint imprimerie, chronoprint siteweb, chronoprint en ligne, ChronoPrint imprimerie, ChronoPrint siteweb, imprimerie en ligne, imprimerie en ligne maroc, imprimerie en ligne casablanca, imprimerie en ligne pas cher, impression au maroc, impression à casablanca, impression numérique, impression offset{{ $keywords ? ', ' . $keywords : '' }}" />
   <script type="application/ld+json"
      class="yoast-schema-graph">
      {
         "@context": "https://schema.org",
         "@graph": [{
            "@type": "Organization",
            "@id": "https://topomaroc.com/#organization",
            "name": "Topo Maroc",
            "url": "https://topomaroc.com/",
            "sameAs": ["https://www.facebook.com/Topo-Maroc-105039525508666/",
               "https://www.instagram.com/topo.maroc/"
            ],
            "logo": {
               "@type": "ImageObject",
               "@id": "https://topomaroc.com/#logo",
               "inLanguage": "fr-FR",
               "url": "https://topomaroc.com/wp-content/uploads/2022/04/LOGO-TOPO-MAROC_page-0003-Copy.jpg",
               "contentUrl": "https://topomaroc.com/wp-content/uploads/2022/04/LOGO-TOPO-MAROC_page-0003-Copy.jpg",
               "width": 1754,
               "height": 611,
               "caption": "Topo Maroc"
            },
            "image": {
               "@id": "https://topomaroc.com/#logo"
            }
         }, {
            "@type": "WebSite",
            "@id": "https://topomaroc.com/#website",
            "url": "https://topomaroc.com/",
            "name": "Topo Maroc",
            "description": "Leader de matériel de topographie au Maroc",
            "publisher": {
               "@id": "https://topomaroc.com/#organization"
            },
            "potentialAction": [{
               "@type": "SearchAction",
               "target": {
                  "@type": "EntryPoint",
                  "urlTemplate": "https://topomaroc.com/?s={search_term_string}"
               },
               "query-input": "required name=search_term_string"
            }],
            "inLanguage": "fr-FR"
         }, {
            "@type": "ImageObject",
            "@id": "https://topomaroc.com/#primaryimage",
            "inLanguage": "fr-FR",
            "url": "https://topomaroc.com/wp-content/uploads/2022/04/LOGO-TOPO-MAROC_page-0003-Copy.jpg",
            "contentUrl": "https://topomaroc.com/wp-content/uploads/2022/04/LOGO-TOPO-MAROC_page-0003-Copy.jpg",
            "width": 1754,
            "height": 611,
            "caption": "topo maroc logo"
         }, {
            "@type": "WebPage",
            "@id": "https://topomaroc.com/#webpage",
            "url": "https://topomaroc.com/",
            "name": "Topo Maroc - Leader de Matériel de Topographie au Maroc",
            "isPartOf": {
               "@id": "https://topomaroc.com/#website"
            },
            "about": {
               "@id": "https://topomaroc.com/#organization"
            },
            "primaryImageOfPage": {
               "@id": "https://topomaroc.com/#primaryimage"
            },
            "datePublished": "2020-02-05T21:06:16+00:00",
            "dateModified": "2022-04-27T13:58:56+00:00",
            "description": "Topo Maroc est spécialisé dans la vente et la réparation du matériel de topographie, électronique et optique à Casablanca, Maroc.",
            "breadcrumb": {
               "@id": "https://topomaroc.com/#breadcrumb"
            },
            "inLanguage": "fr-FR",
            "potentialAction": [{
               "@type": "ReadAction",
               "target": ["https://topomaroc.com/"]
            }]
         }, {
            "@type": "BreadcrumbList",
            "@id": "https://topomaroc.com/#breadcrumb",
            "itemListElement": [{
               "@type": "ListItem",
               "position": 1,
               "name": "Home"
            }]
         }]
      }
   </script>
   <script type="application/ld+json"
      class="yoast-schema-graph">
      {
         "@context": "https://schema.org",
         "@graph": [{
            "@type": "Organization",
            "@id": "https://topomaroc.com/#organization",
            "name": "Topo Maroc",
            "url": "https://topomaroc.com/",
            "sameAs": ["https://www.facebook.com/Topo-Maroc-105039525508666/",
               "https://www.instagram.com/topo.maroc/"
            ],
            "logo": {
               "@type": "ImageObject",
               "@id": "https://topomaroc.com/#logo",
               "inLanguage": "fr-FR",
               "url": "https://topomaroc.com/wp-content/uploads/2022/04/LOGO-TOPO-MAROC_page-0003-Copy.jpg",
               "contentUrl": "https://topomaroc.com/wp-content/uploads/2022/04/LOGO-TOPO-MAROC_page-0003-Copy.jpg",
               "width": 1754,
               "height": 611,
               "caption": "Topo Maroc"
            },
            "image": {
               "@id": "https://topomaroc.com/#logo"
            }
         }, {
            "@type": "WebSite",
            "@id": "https://topomaroc.com/#website",
            "url": "https://topomaroc.com/",
            "name": "Topo Maroc",
            "description": "Leader de matériel de topographie au Maroc",
            "publisher": {
               "@id": "https://topomaroc.com/#organization"
            },
            "potentialAction": [{
               "@type": "SearchAction",
               "target": {
                  "@type": "EntryPoint",
                  "urlTemplate": "https://topomaroc.com/?s={search_term_string}"
               },
               "query-input": "required name=search_term_string"
            }],
            "inLanguage": "fr-FR"
         }, {
            "@type": "ImageObject",
            "@id": "https://topomaroc.com/produit/batterie-geb-222/#primaryimage",
            "inLanguage": "fr-FR",
            "url": "https://topomaroc.com/wp-content/uploads/2022/04/leica-geb222-li-ion-battery.jpeg",
            "contentUrl": "https://topomaroc.com/wp-content/uploads/2022/04/leica-geb222-li-ion-battery.jpeg",
            "width": 800,
            "height": 800,
            "caption": "Baetterie-leica-geb222"
         }, {
            "@type": ["WebPage", "ItemPage"],
            "@id": "https://topomaroc.com/produit/batterie-geb-222/#webpage",
            "url": "https://topomaroc.com/produit/batterie-geb-222/",
            "name": "Batterie GEB 222 - Topo Maroc",
            "isPartOf": {
               "@id": "https://topomaroc.com/#website"
            },
            "primaryImageOfPage": {
               "@id": "https://topomaroc.com/produit/batterie-geb-222/#primaryimage"
            },
            "datePublished": "2022-04-15T12:06:20+00:00",
            "dateModified": "2022-04-24T01:01:00+00:00",
            "description": "Batterie pour les stations Leica Flexline, GNSS et laser Piper.",
            "breadcrumb": {
               "@id": "https://topomaroc.com/produit/batterie-geb-222/#breadcrumb"
            },
            "inLanguage": "fr-FR",
            "potentialAction": [{
               "@type": "ReadAction",
               "target": ["https://topomaroc.com/produit/batterie-geb-222/"]
            }]
         }, {
            "@type": "BreadcrumbList",
            "@id": "https://topomaroc.com/produit/batterie-geb-222/#breadcrumb",
            "itemListElement": [{
               "@type": "ListItem",
               "position": 1,
               "name": "Home",
               "item": "https://topomaroc.com/"
            }, {
               "@type": "ListItem",
               "position": 2,
               "name": "Boutique",
               "item": "https://topomaroc.com/boutique/"
            }, {
               "@type": "ListItem",
               "position": 3,
               "name": "Batterie GEB 222"
            }]
         }]
      }
   </script>
   <!-- / Yoast SEO plugin. -->
   <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@graph": [{
               "@type": "Organization",
               "@id": "{{ config('app.url') }}",
               "name": "{{ config('app.name') }}",
               "url": "{{ config('app.url') }}",
               "sameAs": [],
               "logo": {
                  "@type": "ImageObject",
                  "@id": "{{ config('app.url') }}#logo",
                  "inLanguage": "fr-FR",
                  "url": "{{ config('app.url') }}theme-images/logo.png",
                  "width": 522,
                  "height": 162,
                  "caption": "{{ config('app.name') }} - La meilleur imprimerie en ligne à Casablanca - Imprimerie Maroc {{ now()->year }}"
               },
               "image": {
                  "@id": "{{ config('app.url') }}#logo"
               }
            }, {
               "@type": "WebSite",
               "@id": "{{ config('app.url') }}",
               "url": "{{ config('app.url') }}",
               "name": "{{ config('app.name') }}",
               "description": "{{ config('app.name') }} - La meilleur imprimerie en ligne à Casablanca - Imprimerie Maroc {{ now()->year }}",
               "publisher": {
                  "@id": "{{ config('app.url') }}"
               },
               "potentialAction": [{
                  "@type": "SearchAction",
                  "target": "{{ config('app.url') }}categories/all?search={search_term_string}",
                  "query-input": "required name=search_term_string"
               }],
               "inLanguage": "fr-FR"
            }, {
               "@type": "ImageObject",
               "@id": "{{ config('app.url') }}{{ $canonical }}#{{ $constructedSchemaImageId }}",
               "inLanguage": "fr-FR",
               "url": "{{ $constructedSchemaImageUrl }}",
               "caption": "{{ $constructedTitle }}"
            }, {
               "@type": "WebPage",
               "@id": "{{ config('app.url') }}{{ $canonical }}",
               "url": "{{ config('app.url') }}{{ $canonical }}",
               "name": "{{ $constructedTitle }}",
               "isPartOf": {
                  "@id": "{{ config('app.url') }}"
               },
               "about": {
                  "@id": "{{ config('app.url') }}a-propos-de-nous"
               },
               "primaryImageOfPage": {
                  "@id": "{{ config('app.url') }}{{ $canonical }}#{{ $constructedSchemaImageId }}"
               },
               "breadcrumb": {
                  "@id": "{{ config('app.url') }}{{ $canonical }}#breadcrumb"
               },
               "datePublished": "2022-05-01T14:18:23+00:00",
               "dateModified": "2022-05-01T13:17:00+00:00",
               "description": "{{ $constructedDescription }}",
               "inLanguage": "fr-FR"
            }, {
               "@type": "BreadcrumbList",
               "@id": "{{ config('app.url') }}{{ $canonical }}#breadcrumb",
               "itemListElement": [{
                     "@type": "ListItem",
                     "position": 1,
                     "name": "Accueil",
                     "item": "{{ config('app.url') }}"
                  }
                  {!! $schemaBreadcrumbItems ? ',' . $schemaBreadcrumbItems : '' !!}
               ]
            }
            {!! $schemaGraphs ? ',' . $schemaGraphs : '' !!}
         ]
      }
   </script>

   {{-- CSRF Token --}}
   <meta name="csrf-token"
      content="{{ csrf_token() }}">

   {{-- Styles --}}
   <link href="{{ asset('css/app.css') }}"
      rel="stylesheet">
   @livewireStyles

</head>

<body class="handheld-toolbar-enabled">
   <main class="page-wrapper">
      <header class="shadow-sm">
         <x-layout.topbar />
         <div class="navbar-sticky bg-light">
            <x-layout.navbar-top />
            <x-layout.navbar-bottom />
         </div>
      </header>
      <div class="content">
         {{ $slot }}
      </div>
   </main>
   <x-layout.footer />

   <a href="https://api.whatsapp.com/send?phone={{ \Str::start(setting('site.phone'), '+212') }}&text=Salut {{ config('app.name') }} !"
      class="btn-whatsapp text-white rounded-circle border shadow"
      target="_blank"
      rel="noopener">
      <i class="ci-whatsapp fs-5"></i>
   </a>

   {{-- Scripts --}}
   @livewireScripts
   <script src="{{ asset('js/app.js') }}"></script>
   <script src="//unpkg.com/alpinejs"></script>

   {{-- Auth modal and it's scripts --}}
   @if (!Route::is('login') && !Route::is('register'))
      <x-auth.modal />
      <script>
         const authModal = new bootstrap.Modal(document.querySelector('#auth-modal'));
         const authTab = new bootstrap.Tab(document.querySelector('#auth-tab a[href="#register"]'))
      </script>
      @error('email')
         <script>
            authModal.show();
         </script>
      @enderror
      @if ($errors->has('register_name') || $errors->has('register_email') || $errors->has('register_phone') || $errors->has('register_password'))
         )
         <script>
            authModal.show();
            authTab.show();
         </script>
      @endif
   @endif

</body>

</html>
