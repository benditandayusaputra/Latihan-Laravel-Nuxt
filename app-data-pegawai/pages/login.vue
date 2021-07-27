<template>
  <b-container fluid="md" class="mt-5 mb-5">
    <b-row>
      <b-col md="6" class="mx-auto">
        <b-card class="shadow-md rounded-lg">
          <h3 class="text-center">Login</h3>
          <hr>
          <b-form @submit.prevent="login">
            <b-form-group label="Email">
              <b-form-input type="email" v-model="email" :class="{ 'is-invalid': validation.email }"
                placeholder="masukkan email">
              </b-form-input>
              <div v-if="validation.email" class="mt-2">
                <b-small class="invalid-back">{{ validation.email[0] }}</b-small>
              </div>
            </b-form-group>
            <b-form-group label="Password">
              <b-form-input type="password" v-model="password" :class="{ 'is-invalid': validation.password }"
                placeholder="masukkan password">
              </b-form-input>
              <div v-if="validation.password" class="mt-2">
                <b-small class="invalid-back">{{ validation.password[0] }}</b-small>
              </div>
            </b-form-group>
            <b-row>
              <b-col md="12" class="text-center">
                <b-button type="submit" variant="primary">Login</b-button>
              </b-col>
            </b-row>
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
      email: '',
      password: '',
      validation: [],
    }
  },
  methods: {
    async login() {
      await this.$auth.loginWith('laravelSanctum', {
        data: {
          email: this.email,
          password: this.password,
        },
      })
      this.$router.push({name: 'employee'})
    },
  },
}
</script>

<style>
  
</style>