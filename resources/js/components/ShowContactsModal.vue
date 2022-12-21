<template>
  <b-modal id="bv-modal-show-contacts" hide-footer>
    <template #modal-title><b>Show Contacts</b></template>
    <div>

      <div class="text-center mb-2"><button type="button" class="btn btn-primary btn-sm" @click="showModal('add-contact',null)">Add contact</button></div>

      <div v-if="contacts.length == 0" class="p-2 text-center">
      No contacts found
      </div>
      
    <table class="table table-hover mb-0" v-else>
    <thead>
    <tr>
      <th scope="col">Contact Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Primary</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(contact, index) in contacts" :key="index">
      <th>{{contact.name}}</th>
      <td>{{contact.phone}}</td>
      <td><div v-if="contact.primary == 1"><i class="fas fa-check-circle"></i></div></td>
      <td>
        <a v-if="contact.primary == 0" href="#" title="Show contacts" @click="showModal('show-contacts',`${contact.id}`)">Make primary</a>
    </td>
    </tr>
  </tbody>
</table>

    </div>
  </b-modal>
</template>

<script>
    export default {
      props: ["contacts"],

      data() {
    return {

    };
  },
        

      methods: {

      }

    }
</script>