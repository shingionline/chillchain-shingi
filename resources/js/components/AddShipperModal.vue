<template>
  <b-modal id="bv-modal-add-shipper" hide-footer>
    <template #modal-title><b>Add Shipper</b></template>
    <div>
      <form>
        <div class="form-group pb-2">
          <label>Company Name</label>
          <input
            v-model="new_shipper.name"
            type="text"
            class="form-control mt-2" />
        </div>
        <div class="form-group pb-2">
          <label>Address</label>
          <input
            v-model="new_shipper.address"
            type="text"
            class="form-control my-2" />
        </div>
        <button
          type="button"
          class="btn btn-success w-100 mt-2"
          @click="saveShipper()">
          Save
        </button>
      </form>
    </div>
  </b-modal>
</template>

<script>
export default {
  data() {
    return {
      new_shipper: {},
    };
  },

  methods: {
    resetForm() {
      this.new_shipper = {};
    },

    saveShipper() {
      if (!this.new_shipper.name) {
        this.sweetfire("Please enter company name");
        return;
      } else if (!this.new_shipper.address) {
        this.sweetfire("Please enter company address");
        return;
      }

      axios
        .post("/shippers/new", {
          shipper: this.new_shipper,
        })
        .then((response) => {
          console.log(response.data);
          this.$bvModal.hide("bv-modal-add-shipper");
          this.$emit("update-shippers");
        })
        .catch(function (err) {
          console.log(err);
          this.loading = false;
        });
    },

    sweetfire(text) {
      Swal.fire({
        title: text,
        showConfirmButton: false,
        showDenyButton: false,
        showCancelButton: true,
        focusConfirm: false,
        cancelButtonText: "Ok",
        customClass: {
          title: "popup-title",
        },
      });
    },
  },
};
</script>