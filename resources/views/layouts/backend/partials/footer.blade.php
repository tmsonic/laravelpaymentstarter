  <!-- Main Footer -->
  <footer class="main-footer">
    Copyright &copy; 2019-{{ date('Y') }} <a targte="_blank" href="https://tmsonic.com/">TM-Sonic</a>.
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('public/assets/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('public/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/assets/backend/js/adminlte.min.js') }}"></script>

@stack('js')
</body>
</html>