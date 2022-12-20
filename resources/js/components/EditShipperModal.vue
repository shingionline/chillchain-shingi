<template>
  <b-modal id="bv-modal-edit-shipper" hide-footer>
    <template #modal-title><b>Edit Shipper</b></template>
    <div>
      <form>
        <div class="form-group pb-2">
          <label for="exampleInputEmail1">Company Name</label>
          <input
            type="text"
            class="form-control mt-2"
            aria-describedby="emailHelp" />
        </div>
        <div class="form-group pb-2">
          <label for="exampleInputPassword1">Address</label>
          <input
            type="text"
            class="form-control my-2" />
        </div>
        <button type="button" class="btn btn-success w-100 mt-2">Save</button>
      </form>
    </div>
  </b-modal>
</template>