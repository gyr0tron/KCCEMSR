<template>
  <form action="/action_page.php">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="pwd">Department:</label>
          <select class="form-control" name="department" id="department">
            <option>Helo</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="pwd">Year:</label>
          <select class="form-control" name="year" id="year">

          </select>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="pwd">Sem:</label>
          <select class="form-control" name="sem" id="sem">

          </select>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          <button class="btn btn-primary btn-full">Search</button>
        </div>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  mounted() {

  }
}
</script>
