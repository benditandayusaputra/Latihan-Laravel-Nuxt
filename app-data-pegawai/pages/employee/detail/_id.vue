<template>
  <b-container fluid="md" class="mt-5 mb-5">
    <b-row>
      <b-col md="8" class="mx-auto">
        <b-card class="shadow-md rounded-lg">
          <b-row>
            <b-col md="3" class="title-data">NIP</b-col>
            <b-col md="9">: {{ employee.nip }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Nama</b-col>
            <b-col md="9">: {{ employee.nama }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Tempat Lahir</b-col>
            <b-col md="9">: {{ employee.tempat_lahir }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Alamat</b-col>
            <b-col md="9">: {{ employee.alamat }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Tanggal Lahir</b-col>
            <b-col md="9">: {{ employee.tanggal_lahir }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Jenis Kelamin</b-col>
            <b-col md="9">: {{ employee.jenis_kelamin }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Golongan</b-col>
            <b-col md="9">: {{ employee.golongan }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Eselon</b-col>
            <b-col md="9">: {{ employee.eselon }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Jabatan</b-col>
            <b-col md="9">: {{ employee.jabatan }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Tempat Kerja</b-col>
            <b-col md="9">: {{ employee.tempat_kerja }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Agama</b-col>
            <b-col md="9">: {{ employee.agama }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">Unit Kerja</b-col>
            <b-col md="9">: {{ employee.unit_kerja }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">No HP</b-col>
            <b-col md="9">: {{ employee.no_hp }}</b-col>
          </b-row>
          <b-row class="mb-2">
            <b-col md="3" class="title-data">NPWP</b-col>
            <b-col md="9">: {{ employee.npwp }}</b-col>
          </b-row>
          <b-row>
            <b-col md="12">
              <b-button :to="{name: 'employee'}" variant="secondary" class="mt-3">Kembali</b-button>
              <b-button :to="{name: 'employee-edit-id', params:{id: this.$route.params.id} }" variant="success" class="mt-3">Edit</b-button>
              <b-button variant="danger" class="mt-3" @click="deleteData()">Hapus</b-button>
            </b-col>
          </b-row>
        </b-card>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
  export default {

    data() {
      return {
        employee: [],
      }
    },

    mounted() {
      
     this.$axios.get(`/api/employee/${this.$route.params.id}`)
      .then(response => {
          this.employee = response.data.data
          // this.employee.nip = response.data.data.nip,
          // this.employee.nama = response.data.data.nama,
          // this.employee.tempat_lahir = response.data.data.tempat_lahir,
          // this.employee.alamat = response.data.data.alamat,
          // this.employee.tanggal_lahir = response.data.data.tanggal_lahir,
          // this.employee.jenis_kelamin = response.data.data.jenis_kelamin,
          // this.employee.golongan = response.data.data.golongan,
          // this.employee.eselon = response.data.data.eselon,
          // this.employee.jabatan = response.data.data.jabatan,
          // this.employee.tempat_kerja = response.data.data.tempat_lahir,
          // this.employee.agama = response.data.data.agama,
          // this.employee.unit_kerja = response.data.data.unit_kerja,
          // this.employee.no_hp = response.data.data.no_hp,
          // this.employee.npwp = response.data.data.npwp
      })
    },

    methods: {

     async deleteData() {
        await this.$axios.delete(`/api/employee/${this.$route.params.id}`)
        .then(() => {

          this.employee.splice(row.index, 1);

        })

      }
    }

  }
</script>

<style>
  .title-data {
    font-weight: bold;
  }
</style>