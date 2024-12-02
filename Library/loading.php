<div id="loading-overlay">
    <div id="loading-spinner"></div>
</div>
<script>
    function ShowLoading() {
        const loadingOverlay = document.getElementById('loading-overlay');
        if (loadingOverlay) {
            loadingOverlay.style.display = 'flex';
            document.body.classList.add('loading');
        }
    }

    function HideLoading() {
        const loadingOverlay = document.getElementById('loading-overlay');
        if (loadingOverlay) {
            loadingOverlay.style.display = 'none';
            document.body.classList.remove('loading');
        }
    }
</script>