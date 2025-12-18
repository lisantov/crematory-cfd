<script setup lang="ts">
import SectionTitle from '@shared-ui/SectionTitle'
import InputField from '@shared-ui/InputField'
import PasswordField from '@shared-ui/PasswordField'
import CheckboxField from '@shared-ui/CheckboxField'
import PrimaryButton from '@shared-ui/PrimaryButton'
import PageLink from '@shared-ui/PageLink'
import type { ErrorResponse, RegisterUserData } from '@/shared/api/types.ts'
import { computed, reactive } from 'vue'
import { registerUser } from '@/shared/api'
import router from '@/app/router'
import {
  validateEmail,
  validateLastName,
  validateLogin,
  validateName,
  validatePassword,
  validatePatronymic,
  validatePhone,
} from '@/shared/utils/validator.ts'

const userData = reactive<RegisterUserData>({
  first_name: '',
  last_name: '',
  patronymic: '',
  email: '',
  phone: '',
  login: '',
  password: '',
  password_confirmation: '',
})

let userErrors = reactive<RegisterUserData>({
  first_name: '',
  last_name: '',
  patronymic: '',
  email: '',
  phone: '',
  login: '',
  password: '',
  password_confirmation: '',
})

const isFormValid = computed<boolean>(() =>
  Boolean(
    !userErrors.first_name &&
      !userErrors.last_name &&
      !userErrors.patronymic &&
      !userErrors.email &&
      !userErrors.phone &&
      !userErrors.login &&
      !userErrors.password &&
      !userErrors.password_confirmation,
  ),
)

const userDataTransfer = () => {
  if (isFormValid.value) {
    registerUser(userData)
      .then(() => {
        router.push('/login')
      })
      .catch((data: ErrorResponse) => {
        Object.keys(data.errors).forEach((key) => {
          userErrors = Object.assign({
            ...userErrors,
            [key]: data.errors[key][0],
          })
        })
      })
  }
}

const validName = (event: InputEvent) =>
  (userErrors.first_name = validateName((event.target as HTMLInputElement).value))
const validLastName = (event: InputEvent) =>
  (userErrors.last_name = validateLastName((event.target as HTMLInputElement).value))
const validPatronymic = (event: InputEvent) =>
  (userErrors.patronymic = validatePatronymic((event.target as HTMLInputElement).value))
const validEmail = (event: InputEvent) =>
  (userErrors.email = validateEmail((event.target as HTMLInputElement).value))
const validLogin = (event: InputEvent) =>
  (userErrors.login = validateLogin((event.target as HTMLInputElement).value))
const validPhone = (event: InputEvent) =>
  (userErrors.phone = validatePhone((event.target as HTMLInputElement).value))
const validPassword = (event: InputEvent) =>
  (userErrors.password = validatePassword((event.target as HTMLInputElement).value))
const validRepeatPassword = (event: InputEvent) =>
  (userErrors.password_confirmation =
    (event.target as HTMLInputElement).value === userData.password ? '' : 'Пароли не совпадают')
</script>

<template>
  <form class="registration" @submit.prevent="userDataTransfer">
    <div class="registration-container">
      <section-title>
        <p>Регистрация</p>
      </section-title>
      <div class="registration-inputs">
        <input-field
          @input="validName"
          :error="userErrors.first_name"
          type="text"
          required
          v-model="userData.first_name"
          placeholder="Имя"
        />
        <input-field
          @input="validLastName"
          :error="userErrors.last_name"
          type="text"
          required
          v-model="userData.last_name"
          placeholder="Фамилия"
        />
        <input-field
          @input="validPatronymic"
          :error="userErrors.patronymic"
          type="text"
          v-model="userData.patronymic"
          placeholder="Отчество (необязательно)"
        />
        <input-field
          @input="validPhone"
          :error="userErrors.phone"
          type="tel"
          required
          v-model="userData.phone"
          placeholder="Номер телефона"
        />
        <input-field
          @input="validLogin"
          :error="userErrors.login"
          type="text"
          required
          v-model="userData.login"
          placeholder="Придумайте логин"
        />
        <input-field
          @input="validEmail"
          :error="userErrors.email"
          type="email"
          v-model="userData.email"
          placeholder="Email (необязательно)"
        />
        <password-field
          @input="validPassword"
          :error="userErrors.password"
          required
          v-model="userData.password"
          placeholder="Пароль"
        ></password-field>
        <password-field
          @input="validRepeatPassword"
          :error="userErrors.password_confirmation"
          required
          v-model="userData.password_confirmation"
          placeholder="Введите пароль ещё раз"
        ></password-field>
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
        <primary-button :disabled="!isFormValid" type="submit">
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
