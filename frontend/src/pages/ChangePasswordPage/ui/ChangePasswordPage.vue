<script setup lang="ts">

import InputField from "@shared-ui/InputField";
import AltButton from "@shared-ui/ui/AltButton";
</script>

<template>
  <div class="wrapper">
    <article class="change">
      <div class="change-header">
        <h1 class="change-title">Смена пароля</h1>
        <router-link to="/">
          <img src="/assets/icons/cross.svg" alt="Закрыть" class="change-cross"/>
        </router-link>
      </div>
      <form class="change-form">
        <div class="change-form-inputs">
          <div class="change-form-inputs-container">
            <p class="change-form-inputs-container-text">Введите старый пароль</p>
            <input-field white placeholder="Старый пароль"></input-field>
          </div>
          <div class="change-form-inputs-container">
            <p class="change-form-inputs-container-text">Введите новый пароль</p>
            <input-field white placeholder="Новый пароль"></input-field>
          </div>
          <div class="change-form-inputs-container">
            <p class="change-form-inputs-container-text">Подтвердите пароль</p>
            <input-field white placeholder="Подтвердите пароль"></input-field>
          </div>
        </div>
        <div class="change-form-button">
          <AltButton type="submit">Изменить пароль</AltButton>
        </div>
      </form>
    </article>
  </div>
</template>

<style scoped lang="scss">
  .wrapper{
    display: flex;
    justify-content: center;
  }

  .change {
    display: flex;
    flex-direction: column;
    padding: 40px 50px;
    border-radius: 33px;
    background: $text-secondary;
    max-width: 800px;
    width: 100%;

    &-header {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      justify-items: end;
      align-items: center;
      padding: 0 10px 27px;
    }

    &-title {
      display: flex;
      align-items: center;
      justify-content: center;
      grid-column: 2;
      color: $text-on-dark-primary;
      @include text-style(title);
    }

    &-cross {
      display: flex;
      align-items: center;
      justify-content: center;
      grid-column: 3;
      opacity: 1;
      transition: opacity 0.3s;

      &:hover {
        opacity: 0.8;
      }

      &:active {
        opacity: 0.6;
      }
    }

    &-form {
      display: flex;
      flex-direction: column;
      gap: 60px;

      &-inputs {
        display: flex;
        flex-direction: column;
        gap: 16px;

        &-container {
          display: flex;
          flex-direction: column;
          gap: 8px;
          color: $text-on-dark-primary;
          @include text-style(nav);

          &-text {
            padding-left: 40px;
          }
        }
      }

      &-button {
        display: flex;
        justify-content: center;
      }
    }
  }
</style>
