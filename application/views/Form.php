<?php include('header.php'); ?>
<div class="container">
  <?= img('plugin/img/AD.JPG',false,['width'=>'1105','height'=>'500']); ?>
<?= form_open('basePage/save',['class'=>'form-horizontal','id'=>'Reg-Form']) ?>
  <fieldset>
    <legend><h3>The Annual Dinner 2K17 : Member's Registration Form</h3></legend>
    
    <div class="form-group">
      <div class="col-lg-6 col-lg-offset-2">
        <?= form_input(['placeholder'=>'Name','class'=>'form-control','id'=>'inputName','name'=>'Name']) ?>
      </div>
      </div>
    <div class="form-group">
    <div class="col-lg-6 col-lg-offset-2">
    <?= form_input(['placeholder'=>'Father Name','class'=>'form-control','id'=>'inputFatherName','name'=>'FatherName']) ?>
      </div>
      </div>
      <div class="form-group">
    <div class="col-lg-6 col-lg-offset-2">
      <?= form_input(['placeholder'=>'Seat Number','class'=>'form-control','id'=>'inputSeat','name'=>'Seat']) ?>
      </div>
      </div>
      <div class="form-group">
      <div class="col-lg-2 col-lg-offset-2">
        <select class="form-control" name="Program" id="Program">
          <option>-- Program --</option>
          <option></option>
          <option value="BSCS">BSCS</option>
          <option value="BSSE">BSSE</option>
          <option value="MCS">MCS</option>
        </select>
        </div>
      <div class="col-lg-2">
        <select class="form-control" name="Time" id="Time">
          <option>-- Time --</option>
          <option></option>
          <option value="Morning">Morning</option>
          <option value="Evening">Evening</option>
        </select>
    </div>
       <div class="col-lg-2">
        <select class="form-control" name="Year" id="Year">
          <option>-- Year --</option>
          <option></option>
          <option value="1st Year">1st Year</option>
          <option value="2nd Year">2nd Year</option>
          <option value="3rd Year">3rd Year</option>
          <option value="4th Year">4th Year</option>
        </select>
        </div>
    </div>
    <div class="form-group">
    <label for="" class="col-lg-2 col-lg-offset-2"><h5>Applied for:</h5></label>
      <div class="col-lg-4">
        <select class="form-control" name="Team" id="Team">
          <option>-- Team --</option>
          <option></option>
          <option value="Logistics">Logistics</option>
          <option value="Venue">Venue</option>
          <option value="Decoration">Decoration</option>
        </select>
        </div>
     </div>
    <div class="form-group">
      <div class="col-lg-2 col-lg-offset-7">
        <?= form_submit(['name'=>'Save','value'=>'Apply Now','class'=>'btn btn-primary','id'=>'submit-btn']) ?>
      </div>
    </div>
  </fieldset>
</form>
</div>
    <script src="<?=base_url('plugin/js/jq.js')?>">     </script>
    <script src="<?=base_url('plugin/js/app.js')?>">        </script>
    <script src="<?=base_url('plugin/js/bootstrap.min.js')?>">  </script>
</body>
</html>