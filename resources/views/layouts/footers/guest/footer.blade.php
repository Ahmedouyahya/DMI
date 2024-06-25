  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="http://resultats.una.mr/FST/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Resulta
          </a>
          <a href="https://rim-un.free.nf/" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              autre site
          </a>


      </div>

      </div>
      @if (!auth()->user() || \Request::is('static-sign-up'))
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft by
              <a style="color: #252f40;" href="#" class="font-weight-bold ml-1" target="_blank">Ahmedou Yahya</a>
              &
              <a style="color: #252f40;" href="#" class="font-weight-bold ml-1" target="_blank">Meimoune</a>.
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
