<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/layout.css">
     <title>Clothy - Sell your clothes online</title>
</head>

<body>


    <div class="nav_container">
        <section class="nav_sub_container">
            <div class="nav_logo">
            <a href="/">
                <img src="/img/logo.png" alt="logo">
            </a>
            </div>
        </section>
        <section class="nav_sub_container">
            <div class="nav_ul_section">
                <ul class="nav_ul">

                    <!-- <a href="{{ url('/create') }}"> -->

                    <li class="nav_li" onclick="toggleCreateForm()">
                        <i class="fa-solid fa-plus mk"></i>
                    </li>
                    <!-- </a> -->
                </ul>
            </div>
        </section>
    </div>

    <main>
        @yield('content')
    </main>

<div class="footer_container">
    <footer class="footer">
        created by
        <a class="linkas" href="https://dileeshanawarathna.me" target="_blank">Dileesha</a>

    </footer>
</div>

    <!-- Popup form -->
    <div id="create" style="display: none;">
        @include('component.create')
    </div>


    <script>
        function toggleCreateForm() {
            var modal = document.getElementById('create');
            if (modal.style.display === 'none' || modal.style.display === '') {
                modal.style.display = 'block';
            } else {
                modal.style.display = 'none';
            }
        }
    </script>

</body>

</html>
