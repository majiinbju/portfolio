<footer class="footer">
</footer>
<!-- Lightbox for Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
<?= js("/assets/js/index.js", ['async' => true, 'defer' => true]) ?>
<!-- Minimizing image sizes -->
<?= js("/assets/js/lozad.min.js") ?>
<script>
  const observer = lozad();
  observer.observe();
</script>
</body>
</html>