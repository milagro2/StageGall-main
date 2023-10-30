<script>

    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
        var mode = element.classList.contains("dark-mode") ? "Dark" : "Light";
        const url = new URL(window.location.href);
        url.searchParams.set('mode', mode);
        window.location.href = url.toString();
    }
</script>