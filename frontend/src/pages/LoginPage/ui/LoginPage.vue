<script setup lang="ts">

import SectionTitle from "@/shared/SectionTitle";
import InputField from "@/shared/InputField";
import PasswordField from "@/shared/PasswordField";
import CheckboxField from "@/shared/CheckboxField";
import PrimaryButton from "@/shared/PrimaryButton";
import PageLink from "@/shared/PageLink";
</script>

<template>
  <div class="registration">
    <section-title>
      <p>Вход</p>
    </section-title>
    <div class="registration-inputs">
      <input-field placeholder="Логин"/>
      <password-field placeholder="Пароль"></password-field>
      <div class="registration-links">
        <page-link href="/registration/">
          <p>Забыли пароль?</p>
        </page-link>
        <page-link href="/passwordRecovery/">
          <p>Ещё не зарегистрированы?</p>
        </page-link>
      </div>
    </div>
    <div class="registration-interactive">
      <primary-button type="submit">
        <p>Войти</p>
      </primary-button>
    </div>
  </div>
</template>

<style scoped lang="scss">
.registration {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 40px;
  padding: 50px 28%;

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
