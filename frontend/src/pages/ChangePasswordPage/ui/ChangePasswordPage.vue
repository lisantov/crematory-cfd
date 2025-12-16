<script setup lang="ts">

import InputField from "@/shared/InputField";
import AltButton from "@/shared/ui/AltButton";
</script>

<template>
  <div class="wrapper">
    <article class="change">
      <div class="change-header">
        <h1 class="change-title">Смена пароля</h1>
        <img src="/assets/icons/cross.svg" alt="Закрыть" class="change-cross"/>
      </div>
      <form class="change-form">
        <div class="change-form-inputs">
          <div class="change-form-inputs-container">
            <p>Введите старый пароль</p>
            <input-field placeholder="Старый пароль"></input-field>
          </div>
          <div class="change-form-inputs-container">
            <p>Введите новый пароль</p>
            <input-field placeholder="Новый пароль"></input-field>
          </div>
          <div class="change-form-inputs-container">
            <p>Подтвердите пароль</p>
            <input-field placeholder="Подтвердите пароль"></input-field>
          </div>
        </div>
        <AltButton type="submit">Изменить пароль</AltButton>
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
    }

    &-form {
      display: flex;
      flex-direction: column;
      gap: 60px;

      &-inputs {
        display: flex;
        flex-direction: column;
        gap: 16px;
      }
    }
  }
</style>
