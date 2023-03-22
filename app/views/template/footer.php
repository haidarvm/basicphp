<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–<?=date('Y');?> Hyd-ant.co.id</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
    <script src="<?=URL;?>assets/js/bootstrap.bundle.min.js"></script>
    <?php //echo !empty($javascript) ? '<!-- Load js for this page -->'. $javascript. '<!--  END Load  js for this page -->' : "" ; // echo 'uwais';?>
    <script>
      var URL = '<?=URL;?>';
    </script>
    <?php function_exists('javascript') ? javascript() : ''; ?>
  </body>
</html>
