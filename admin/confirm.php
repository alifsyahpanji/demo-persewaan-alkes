<script>
    function berhentiSewa($text, $url) {
        const dataConfirm = confirm($text);
        if (dataConfirm) {
            return window.location = $url;
        }
    }

    function sudahAmbil($text, $url) {
        const dataConfirm = confirm($text);
        if (dataConfirm) {
            return window.location = $url;
        }
    }
</script>