<template>
  <b-container fluid="md" class="mt-5 mb-5">
    <b-row>
      <b-col md="12">
        <b-card class="shadow-md rounded-lg">
          <h5>Tambah Data Pegawai</h5>
          <hr>
          <b-form @submit="store">
            <b-form-group label="NIP">
              <b-form-input type="text" v-model="employee.nip" :class="{ 'is-invalid': validation.nip }"
                placeholder="masukkan nip">
              </b-form-input>
              <div v-if="validation.nip" class="mt-2">
                <b-small class="invalid-back">{{ validation.nip[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Nama">
              <b-form-input type="text" v-model="employee.nama" :class="{ 'is-invalid': validation.nama }"
                placeholder="masukkan nama">
              </b-form-input>
              <div v-if="validation.nama" class="mt-2">
                <b-small class="invalid-back">{{ validation.nama[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Tempat Lahir">
              <b-form-input type="text" v-model="employee.tempat_lahir" :class="{ 'is-invalid': validation.tempat_lahir }"
                placeholder="masukkan tempat_lahir">
              </b-form-input>
              <div v-if="validation.tempat_lahir" class="mt-2">
                <b-small class="invalid-back">{{ validation.tempat_lahir[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Alamat">
              <b-form-textarea id="textarea" v-model="employee.alamat" :class="{ 'is-invalid': validation.title }"
                placeholder="masukkan alamat" rows="5">
              </b-form-textarea>
              <div v-if="validation.alamat" class="mt-2">
                <b-small class="invalid-back">{{ validation.alamat[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Tanggal Lahir">
              <b-form-input type="text" v-model="employee.tanggal_lahir" :class="{ 'is-invalid': validation.tanggal_lahir }"
                placeholder="masukkan tanggal_lahir">
              </b-form-input>
              <div v-if="validation.tanggal_lahir" class="mt-2">
                <b-small class="invalid-back">{{ validation.tanggal_lahir[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Jenis Kelamin">
              <b-form-select v-model="employee.jenis_kelamin" :class="{ 'is-invalid': validation.jenis_kelamin }" :options="gender"></b-form-select>
              <div v-if="validation.jenis_kelamin" class="mt-2">
                <b-small class="invalid-back">{{ validation.jenis_kelamin[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Golongan">
              <b-form-input type="text" v-model="employee.golongan" :class="{ 'is-invalid': validation.golongan }"
                placeholder="masukkan golongan">
              </b-form-input>
              <div v-if="validation.golongan" class="mt-2">
                <b-small class="invalid-back">{{ validation.golongan[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Eselon">
              <b-form-input type="text" v-model="employee.eselon" :class="{ 'is-invalid': validation.eselon }"
                placeholder="masukkan eselon">
              </b-form-input>
              <div v-if="validation.eselon" class="mt-2">
                <b-small class="invalid-back">{{ validation.eselon[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Jabatan">
              <b-form-input type="text" v-model="employee.jabatan" :class="{ 'is-invalid': validation.jabatan }"
                placeholder="masukkan jabatan">
              </b-form-input>
              <div v-if="validation.jabatan" class="mt-2">
                <b-small class="invalid-back">{{ validation.jabatan[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Tempat Kerja">
              <b-form-input type="text" v-model="employee.tempat_kerja" :class="{ 'is-invalid': validation.tempat_kerja }"
                placeholder="masukkan tempat_kerja">
              </b-form-input>
              <div v-if="validation.tempat_kerja" class="mt-2">
                <b-small class="invalid-back">{{ validation.tempat_kerja[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Agama">
              <b-form-input type="text" v-model="employee.agama" :class="{ 'is-invalid': validation.agama }"
                placeholder="masukkan agama">
              </b-form-input>
              <div v-if="validation.agama" class="mt-2">
                <b-small class="invalid-back">{{ validation.agama[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Unit Kerja">
              <b-form-input type="text" v-model="employee.unit_kerja" :class="{ 'is-invalid': validation.unit_kerja }"
                placeholder="masukkan unit_kerja">
              </b-form-input>
              <div v-if="validation.unit_kerja" class="mt-2">
                <b-small class="invalid-back">{{ validation.unit_kerja }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="No HP">
              <b-form-input type="text" v-model="employee.no_hp" :class="{ 'is-invalid': validation.no_hp }"
                placeholder="masukkan no_hp">
              </b-form-input>
              <div v-if="validation.no_hp" class="mt-2">
                <b-small class="invalid-back">{{ validation.no_hp }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="NPWP">
              <b-form-input type="text" v-model="employee.npwp" :class="{ 'is-invalid': validation.npwp }"
                placeholder="masukkan npwp">
              </b-form-input>
              <div v-if="validation.npwp" class="mt-2">
                <b-small class="invalid-back">{{ validation.npwp }}</b-small>
              </div>
            </b-form-group>
            <b-button :to="{name: 'employee'}" variant="secondary">Kembali</b-button>
            <b-button type="submit" variant="primary">Simpan</b-button>
          </b-form>
        </b-card>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
  export default {

    data() {
      return {
        employee: {
          nip: '',
          nama: '',
          tempat_lahir: '',
          alamat: '',
          tanggal_lahir: '',
          jenis_kelamin: null,
          golongan: '',
          eselon: '',
          jabatan: '',
          tempat_kerja: '',
          agama: '',
          unit_kerja: '',
          no_hp: '',
          npwp: ''
        },
        validation: [],
        gender: [
          { value: null, text: '-- Pilih jenis Kelamin --' },
          { value: 'L', text: 'Laki-Laki' },
          { value: 'P', text: 'Perempuan' }
        ]
      }
    },

    methods: {
      
      async store(e) {
        e.preventDefault()
        await this.$axios.post('/api/employee', {
            nip: this.employee.nip,
            nama: this.employee.nama,
            tempat_lahir: this.employee.tempat_lahir,
            alamat: this.employee.alamat,
            tanggal_lahir: this.employee.tanggal_lahir,
            jenis_kelamin: this.employee.jenis_kelamin,
            golongan: this.employee.golongan,
            eselon: this.employee.eselon,
            jabatan: this.employee.jabatan,
            tempat_kerja: this.employee.tempat_lahir,
            agama: this.employee.agama,
            unit_kerja: this.employee.unit_kerja,
            no_hp: this.employee.no_hp,
            npwp: this.employee.npwp
            
          })
          .then(() => {
            this.$router.push({name: 'employee', params: {message: 'Data berhasil ditambahkan'}})

          })
          .catch(error => {
            this.validation = error.response.data.errors
          })
      }
    }

  }
</script>

<style>
  .invalid-back {
    color: red;
  }
</style>