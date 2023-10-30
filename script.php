<script>
    var urlParams = new URLSearchParams(window.location.search);
    var mode = urlParams.get('mode');

    if (mode === 'Dark') {
        document.body.classList.add('dark-mode');
    } else if (mode === 'Light') {
        document.body.classList.remove('dark-mode');
    }
</script>

