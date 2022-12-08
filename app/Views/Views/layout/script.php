<script>
        var nav = document.querySelector('nav');
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('text-white', 'shadow');
                nav.classList.add('bg-success', 'shadow');
                nav.classList.add('bg-opacity-75', 'shadow');
            } else {
                nav.classList.remove('text-white', 'shadow');
                nav.classList.remove('bg-success', 'shadow');
                nav.classList.remove('bg-opacity-75', 'shadow');
            }
        });
    </script>