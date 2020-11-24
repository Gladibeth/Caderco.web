<footer class='footer' id='footer'>
    <div class='footer-mask'>
      <div class='container'>
        <div class='content-contact-title'>
          <h1>CONTACTO</h1>
        </div>
        <div class='row content-columns-footer'>
          <div class='col-lg-6'>
            <div class='footer-content'>
              <h3>Contáctanos</h3>
              <div class='footer-content-inf'>
                <div class='content-inf'>
                  <p>Correo</p>
                  <a href=''>operaciones@caderco.com.ve</a>
                </div>
                <div class='content-inf'>
                  <p>Teléfonos</p>
                  <div class='content-phone'>
                    <span>(0058)0269-2459632 /</span>
                    <span>2453832 /</span>
                    <span>2465063 /</span>
                    <span>2478043</span>
                  </div>
                </div>
                <div class='content-inf'>
                  <p>Fax</p>
                  <span>(0058)0269-2467937</span>
                </div>
                <div class='content-inf'>
                  <p>Dirección</p>
                  <span>Calle Falcón, Esq. Argentina, C.C.E. CADERCO, Piso 4, Punto Fijo, Estado Falcón – Venezuela.</span>
                </div>
              </div>
            </div>
          </div>
          <div class='col-lg-6'>
            <div class='footer-form'>
              <form>
                <div class='group'>
                  <input required='required' type='text'>
                  <span class='highlight'></span>
                  <span class='bar'></span>
                  </input>
                  <label for=''>Nombre y Apellido</label>
                </div>
                <div class='group'>
                  <input required='required' type='email'>
                  <span class='highlight'></span>
                  <span class='bar'></span>
                  </input>
                  <label for=''>Correo</label>
                </div>
                <div class='group'>
                  <input required='required' type='tel'>
                  <span class='highlight'></span>
                  <span class='bar'></span>
                  </input>
                  <label for=''>Teléfono</label>
                </div>
                <div class='group'>
                  <textarea required='' rows='3'></textarea>
                  <span class='highlight'></span>
                  <span class='bar'></span>
                  <label for=''>Mensaje</label>
                </div>
                <div class='cta-form'>
                  <a class='btn btn-white btn-caderco' href='#'>Enviar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class='footer-company'>
        <div class='box'>
          <a></a>
          <img alt='' src='<?php echo get_template_directory_uri();?>/assets/img/ancla.svg'>
        </div>
        <p>Copyright © CADERCO 2019 Power by</p>
        <div class='img-footer-company'>
          <img alt='' src='<?php echo get_template_directory_uri();?>/assets/img/slice_footer.png'>
        </div>
      </div>
    </div>
  </footer>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/isotope.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/slick.min.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/wow.min.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/wow-settings.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/smooth-scroll.min.js'></script>
  <script src='<?php echo get_template_directory_uri();?>/assets/js/main.js'></script>
  <script>
    smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 2000, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function(anchor, toggle) {} // Function to run after scrolling
    });
  </script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/navbar.js"></script>
  <?php wp_footer(); ?>
</body>

</html>