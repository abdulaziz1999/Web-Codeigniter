<!--   Core JS Files   -->
<script src="<?= base_url()?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url()?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url()?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="<?= base_url()?>assets/js/plugins/moment.min.js"></script>
  <script src="<?= base_url()?>assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="<?= base_url()?>assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="<?= base_url()?>assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
  <script>
    function popup(){
      alert('ini tombol play more');
    }

    function onsalary(){
      let profesi = document.getElementById("salary").value;
      if(profesi == 'programmer'){
        salary = 'Rp. 50.000.000';
      }else if(profesi == 'analis'){
        salary = 'Rp. 70.000.000';
      }else{
        salary = 'Rp. 45.000.000';
      }

      document.getElementById("returnSalary").value = salary;
    }
  </script>
</body>

</html>