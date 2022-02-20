  <div class="col-sm-6 mx-auto">
    <div class="container">
      <div class="page-title mt-4">
        <h1 class="text-center">Daily Intake Calculator</h1>
        <p class="text-center">Calculate your daily nutritional needs</p>
      </div>

      <form class="calculator-form my-5 px-5 py-4" method="post" action="<?= base_url('calculator/calculate'); ?>">
        <div class="row form-group">
          <div class="col-sm-4">
            <label for="gender">Gender</label>
          </div>
          <div class="col-sm-8">
            <select class="custom-select input-select" name="gender" id="gender">
              <option selected value="0">Choose ...</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
            <?= form_error('gender', '<small class="text-danger pl-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-4">
            <label for="height"> Height </label>
          </div>
          <div class="col-sm-8">
            <input type="height" class="form-control input-text" id="height" name="height" placeholder="Input your height here" value="<?= set_value('height'); ?>" autocomplete="off">
            <?= form_error('height', '<small class="text-danger pl-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-4">
            <label for="weight">Weight</label>
          </div>
          <div class="col-sm-8">
            <input type="weight" class="form-control input-text" id="weight" name="weight" placeholder="Input your weight here" value="<?= set_value('weight'); ?>" autocomplete="off">
            <?= form_error('weight', '<small class="text-danger pl-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-4">
            <label for="age">Age</label>
          </div>
          <div class="col-sm-8">
            <input type="age" name="age" id="age" class="form-control input-text" placeholder="Input your age here" value="<?= set_value('age'); ?>" autocomplete="off">
            <?= form_error('age', '<small class="text-danger pl-2 mt-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
          </div>
        </div>

        <div class="row form-group">
          <div class="col-sm-4">
            <label for="exercise">Activities</label>
          </div>
          <div class="col-sm-8">
            <select name="exercise" id="exercise" class="custom-select input-select">
              <option selected value="0">Choose ...</option>
              <option value="1">Little or no exercise</option>
              <option value="2">Exercise 1 - 3 times a week</option>
              <option value="3">Exercise 3 - 5 times a week</option>
              <option value="4">Exercise 6 - 7 times a week</option>
            </select>
            <?= form_error('exercise', '<small class="text-danger pl-2"><i class="fas fa-exclamation-circle">', '</small></i>'); ?>
          </div>
        </div>

        <div class="d-flex justify-content-center">
          <button type="reset" class="btn btn-danger reset-btn px-4 py-2 mt-3">Reset</button>
          <button type="submit" class="btn calculate-btn px-4 py-2 mt-3 ml-5">Calculate</button>
        </div>
      </form>
    </div>
  </div>