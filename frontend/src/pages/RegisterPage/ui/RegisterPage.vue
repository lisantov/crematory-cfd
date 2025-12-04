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
      <p>Регистрация</p>
    </section-title>
    <div class="registration-inputs">
      <input-field placeholder="Фамилия"/>
      <input-field placeholder="Имя"/>
      <input-field placeholder="Отчество (необязательно)"/>
      <input-field placeholder="Придумайте логин"/>
      <input-field placeholder="Номер телефона"/>
      <input-field placeholder="Email (необязательно)"/>
      <password-field placeholder="Пароль"></password-field>
      <password-field placeholder="Введите пароль ещё раз"></password-field>
    </div>
    <div class="registration-checkbox">
      <checkbox-field>
        <p>Даю согласие на обработку персональных данных</p>
      </checkbox-field>
      <checkbox-field>
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
