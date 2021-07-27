<template>
  <b-container fluid="md" class="mt-5 mb-5">
    <b-row>
      <b-col md="12">
        <b-card class="shadow-md rounded-lg">
          <h5>Data Pegawai</h5>
          <hr>
          <b-button :to="{name: 'employee-create'}" variant="primary" class="mb-3">Tambah Data</b-button>
          <!-- <a href="http://127.0.0.1:8000/employee/export_excel" class="btn btn-success mb-3" target="_blank">Export Excel</a> -->
          <b-table striped bordered hover :items="employees" :fields="fields" show-empty>
            <template v-slot:cell(actions)="row">
              <b-button :to="{name: 'employee-detail-id', params: {id: row.item.id}}" variant="info" size="sm">Detail</b-button>
              <b-button :to="{name: 'employee-edit-id', params: {id: row.item.id}}" variant="success" size="sm">Edit</b-button>
              <b-button variant="danger" size="sm" @click="deleteData(row)">Hapus</b-button>
           </template>
          </b-table>
        </b-card>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
  export default {

    data() {
      return {
        fields: ['nip', 'nama', 'jenis_kelamin', 'jabatan', 'actions'],
        employees: [],
      }
    },

    mounted() {
      
      if (this.$route.params.message) {
        alert(this.$route.params.message)
      }

      this.$axios.get('/api/employee')
        .then(response => {
          this.employees = response.data.data

        })
        .catch(error => {
          console.log(error.response.data)
        })
    },

    methods: {

     async deleteData(row) {
        if (confirm('Yakin hapus data..??')) {
          await this.$axios.delete(`/api/employee/${row.item.id}`)
          .then(() => {
            this.employees.splice(row.index, 1)
            alert("Data berhasil dihapus")
          })
        }
      }
    }

  }
</script>

<style>

</style>