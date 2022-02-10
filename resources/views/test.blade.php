<!DOCTYPE html>
<html>
<style>
  th,
  td {
    padding: 5px;
  }
</style>

<body>

  <h2>The XMLHttpRequest Object</h2>

  <form action="">
    <div class="form-group">

      <label>Faculty:</label>

      <select name="customers" onchange="showCustomer(this.value)">
        <option value="">Select a customer:</option>
        <option value="ALFKI">Alfreds Futterkiste</option>
        <option value="NORTS ">North/South</option>
        <option value="WOLZA">Wolski Zajazd</option>
      </select>

    </div>


    <div class="form-group">

      <label>Select State:</label>
      <select name="id_state" class-"form-control">
        <option value="">Select a customer:</option>
      </select>

    </div>


    <div class="form-group">

      <button class="btn btn-success" type="submit">Submit</button>

    </div>
  </form>
  <br>
  <div id="txtHint">Customer info will be listed here...</div>

  
</body>
<script>
    function showCustomer() {

      var id_country = $(this).val();
      <?php echo 'hello'?>
      $.ajax({

        url: "<?php echo view('test') ?>",

        method: 'GET',

        data: {
          id_country: id_country},

        success: function(data) {

          <?php echo "True here"?>
        }

      });
    }
  </script>
</html>