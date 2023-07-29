<!-- Code View -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/codeview/styles/default.css">
<script src="<?php echo base_url() ?>assets/codeview/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script>
    document.querySelectorAll("code").forEach(function(element) {
    element.innerHTML = element.innerHTML.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
});
</script>
<!-- End Code View -->
</body>
</html>