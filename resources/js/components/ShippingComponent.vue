<template>
    <div class="container">

        <div class="row py-4">
            <div class="col"><h3>List of Shippers</h3></div>
            <div class="col text-end">
                <button type="button" class="btn btn-success" @click="showModal('add-shipper')">Add shipper</button>
                <button type="button" class="btn btn-primary ms-2" @click="showModal('add-contact')">Add contact</button>
            </div>
        </div>

        <div class="card shadow">

<table class="table table-hover mb-0">
    <thead>
    <tr>
      <th scope="col">Company Name</th>
      <th scope="col">Address</th>
      <th scope="col">Primary Contact Name</th>
      <th scope="col">Primary Contact Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <button type="button" class="btn btn-primary" title="Show contacts" @click="showModal('show-contacts')"><i class="fas fa-user"></i></button>
        <button type="button" class="btn btn-success" title="Edit shipper" @click="showModal('edit-shipper')"><i class="fas fa-edit"></i></button>
        <button type="button" class="btn btn-danger" title="Delete shipper" @click="showModal('delete-shipper')"><i class="fas fa-trash"></i></button>
    </td>
    </tr>
  </tbody>
</table>
</div>
<div class="row text-end my-3"><small class="font-italic">Chill-Chain assessment by Shingi Mushipe</small></div>

<!-- Modal components -->

<Add-shipper-modal></Add-shipper-modal>
<Add-contact-modal></Add-contact-modal>
<Show-contacts-modal></Show-contacts-modal>
<Edit-shipper-modal></Edit-shipper-modal>
<Delete-shipper-modal></Delete-shipper-modal>

    </div>
</template>

<script>
    export default {
        

      methods: {

      showModal(name) {
        this.$bvModal.show(`bv-modal-${name}`);
      },

    }

    }
</script>

<style scoped>
h3, small {color: #fff}
small {font-style: italic;}
</style>
