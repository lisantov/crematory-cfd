<script setup lang="ts">

import SectionTitle from "@shared-ui/SectionTitle";
import InputField from "@shared-ui/InputField";
import PasswordField from "@shared-ui/PasswordField";
import CheckboxField from "@shared-ui/CheckboxField";
import PrimaryButton from "@shared-ui/PrimaryButton";
import PageLink from "@shared-ui/PageLink";
import type {ErrorResponse, RegisterUserData} from "@/shared/api/types.ts";
import {reactive, ref} from "vue";
import {loginUser} from "@/shared/api";
import router from "@/app/router";

const userData = reactive<RegisterUserData>({
  first_name: '',
  last_name: '',
  patronymic: '',
  email: '',
  phone: '',
  login: '',
  password: '',
  password_confirmation: ''
})

const errorInputs = ref<string[]>([]);

async function userDataTransfer () {
  try {
    await loginUser(userData);
    await router.push('/login');
  }
  catch (error) {

    errorInputs.value = [];

    const err = error as { response?: { data?: ErrorResponse } };
    const backendErrors = err.response?.data?.errors;

    if (backendErrors) {
      errorInputs.value = Object.keys(backendErrors).filter(field => backendErrors[field].length > 0);
    }
  }
}
</script>

<template>
  <form class="registration" @sumbit.prevent = "userDataTransfer">
      <div class="registration-container">
      <section-title>
        <p>Регистрация</p>
      </section-title>
      <div class="registration-inputs">
        <input-field :error="errorInputs.includes('first_name')" type="text" required v-model="userData.first_name" placeholder="Фамилия"/>
        <input-field :error="errorInputs.includes('last_name')" type="text" required v-model="userData.last_name" placeholder="Имя"/>
        <input-field :error="errorInputs.includes('patronymic')" type="text" v-model="userData.patronymic" placeholder="Отчество (необязательно)"/>
        <input-field :error="errorInputs.includes('phone')" type="text" required v-model="userData.phone" placeholder="Придумайте логин"/>
        <input-field :error="errorInputs.includes('login')" type="tel" required v-model="userData.login" placeholder="Номер телефона"/>
        <input-field :error="errorInputs.includes('email')" type="email" required v-model="userData.email" placeholder="Email (необязательно)"/>
        <password-field required v-model="userData.password" placeholder="Пароль"></password-field>
        <password-field required v-model="userData.password_confirmation" placeholder="Введите пароль ещё раз"></password-field>
      </div>
      <div class="registration-checkbox">
        <checkbox-field required>
          <p>Даю согласие на обработку персональных данных</p>
        </checkbox-field>
        <checkbox-field required>
          <p>Согласен с политикой конфидециальности</p>
        </checkbox-field>
      </div>
      <div class="registration-interactive">
        <primary-button type="submit">
          <p>Регистрация</p>
        </primary-button>
        <page-link href="/login/">
          <p>Уже есть аккаунт?</p>
        </page-link>
      </div>
      </div>
  </form>
</template>

<style scoped lang="scss">
.registration {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 50px 0;

  &-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 40px;
    min-width: 700px;
  }

  &-inputs {
    display: flex;
    width: 100%;
    flex-direction: column;
    gap: 20px;
  }

  &-checkbox {
    display: flex;
    flex-direction: column;
    width: 100%;
    gap: 20px;
  }

  &-interactive {
    display: flex;
    width: 100%;
    justify-content: space-between;
  }
}
</style>
