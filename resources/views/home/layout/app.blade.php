<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alô Brasil - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('home/img/icon.png') }}" />
    <link href="{{ asset('home/img/icon.png') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="icon" href="{{ asset('home/img/icon.png') }}" sizes="any" />
    <link rel="icon" type="image/png" href="{{ asset('home/img/icon.png') }}" rel="icon" />
    <link rel="icon" type="image/png" href="{{ asset('home/img/icon.png') }}" />
    <meta property="og:image" itemprop="image" content="{{ asset('home/img/icon.png') }}">
    {{-- modal --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">

    {{-- galeria images --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('home/css/fluid-gallery.css') }}">
</head>

<body>
    <!-- Navbar & Hero Start -->
    @include('home.layout.nav')
    @yield('content')
    @include('home.layout.footer')
    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up text-white"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/main.js') }}"></script>

    {{-- galeria --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    {{-- modal --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    {{-- script modal --}}
    <script>
        var player
        var staticPlayer

        function onYouTubeIframeAPIReady() {
            console.log('onYouTubeIframeAPIReady')
            player = new YT.Player('player', {
                videoId: 'M7lc1UVf-VE',
                playerVars: {
                    'playsinline': 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            })
        }

        function onPlayerReady(event) {
            event.target.playVideo() // autostart
        }

        var done = false;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
                // do other custom stuff here
                //setTimeout(stopVideo, 6000);
                //done = true;
            }
        }

        function stopVideo() {
            player.stopVideo()
        }

        function loadYouTubeVideo() {
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        }

        var dynamicVideoModal = document.getElementById('dynamicVideoModal')
        dynamicVideoModal.addEventListener('show.bs.modal', function(event) {
            // dynamically create video inside modal
            // loadYouTubeVideo()
        })
        dynamicVideoModal.addEventListener('hidden.bs.modal', event => {
            player.stopVideo()
        })


        // manual controls outside YT
        const playBtn = document.getElementById('playBtn')
        playBtn.addEventListener('click', function(event) {
            player.playVideo()
        })

        const pauseBtn = document.getElementById('pauseBtn')
        pauseBtn.addEventListener('click', function(event) {
            console.log('pause')
            player.pauseVideo()
        })

        const myModalEl = document.getElementById('videoModal')
        myModalEl.addEventListener('show.bs.modal', event => {
            staticPlayer = new YT.Player('staticPlayer')
        })
        myModalEl.addEventListener('hidden.bs.modal', event => {
            staticPlayer.stopVideo()
        })
    </script>
    <script>
        $(document).ready(function() {
            // Quando um link ou botão com a classe 'open-video-modal' for clicado
            $('.open-video-modal').click(function(e) {
                e.preventDefault(); // Previne o comportamento padrão do link
                var videoUrl = $(this).data('video-url'); // Obtém a URL do vídeo do atributo data-video-url
                var videoEmbedCode = '<iframe width="560" height="315" src="' + videoUrl +
                    '" frameborder="0" allowfullscreen></iframe>';

                $('#videoModal .modal-body').html(
                videoEmbedCode); // Insere o código de incorporação no modal
                $('#videoModal').modal('show'); // Exibe o modal
            });

            // Opcional: Limpar o conteúdo do modal ao fechar
            $('#videoModal').on('hidden.bs.modal', function(e) {
                $('#videoModal .modal-body').html('');
            });
        });
    </script>
</body>

</html>
