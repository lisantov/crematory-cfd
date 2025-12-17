<script setup lang="ts">
import SectionTitle from "@shared-ui/SectionTitle";
import InputField from "@shared-ui/InputField";
import PasswordField from "@shared-ui/PasswordField";
import PrimaryButton from "@shared-ui/PrimaryButton";
import PageLink from "@shared-ui/PageLink";
import {reactive, ref} from "vue";
import type {ErrorResponse, LoginUserData} from "@/shared/api/types.ts";
import {loginUser} from "@/shared/api";
import router from "@/app/router";

const loginUserData = reactive<LoginUserData>({
  login: '',
  password: '',
})

const errorInputs = ref<string[]>([]);

async function loginUserDataTransfer () {
  try {
    await loginUser(loginUserData);
    await router.push('/profile');
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
  <div class="registration">
    <form class="registration-container" @sumbit.prevent = "loginUserDataTransfer">
      <section-title>
        <p>Вход</p>
      </section-title>
      <div class="registration-inputs">
        <input-field :error="errorInputs.includes('login')" type="text" required v-model="loginUserData.login" placeholder="Логин"/>
        <password-field :error="errorInputs.includes('password')" v-model="loginUserData.password" required placeholder="Пароль"></password-field>
        <div class="registration-links">
          <page-link href="/password-recovery/">
            <p>Забыли пароль?</p>
          </page-link>
          <page-link href="/registration/">
            <p>Ещё не зарегистрированы?</p>
          </page-link>
        </div>
      </div>
      <div class="registration-interactive">
        <primary-button type="submit">
          <p>Войти</p>
        </primary-button>
      </div>
    </form>
  </div>
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

  &-links {
    display: flex;
    justify-content: space-between;
    padding:0 30px;
  }

  &-interactive {
    display: flex;
    width: 100%;
    justify-content: space-between;
  }
}
</style>
