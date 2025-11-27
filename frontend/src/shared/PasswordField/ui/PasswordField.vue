<script setup lang="ts">
import CardFrame from '@/shared/CardFrame'
import { ref } from 'vue'

interface IProps {
  placeholder: string;
}
defineProps<IProps>()
const model = defineModel<string>()
const isHidden = ref<boolean>(true);

const toggleHidden = () => isHidden.value = !isHidden.value;
</script>

<template>
  <div class="password-container">
    <label>
      <input
        :type="isHidden
          ? 'password'
          : 'text'"
        v-model="model"
        class="password-field"
        :placeholder="placeholder"
      >
    </label>
    <button @click="toggleHidden" class="password-icon" :style="{padding: isHidden ? '3px 0 3px' : '0'}">
      <img
        :src="isHidden
          ? '/assets/icons/eye.svg'
          : '/assets/icons/eye-closed.svg'"
        :alt="isHidden
          ? 'Иконка для просмотра пароля'
          : 'Иконка для скрытия пароля'"
      >
    </button>
  </div>
</template>

<style scoped lang="scss">
  .password-container {
    width: 100%;
    display: grid;
    padding: 12px 30px;
    border-radius: 32px;
    grid-template-columns: 1fr auto;
    gap: 16px;
    border: 1px solid $card-frame-border;
    box-shadow: 0 4px 10px 2px $card-frame-shadow;

    &:has(:focus-visible) {
      outline: 2px solid $card-frame-border;
    }
  }

  .password-field {
    @include text-style(help);
    width: 100%;
    height: 100%;
    border: none;
    background-color: transparent;
    color: $text-primary;
    caret-color: $input-active-caret;
    transition: color 0.25s ease-in-out;

    &::placeholder {
      color: $input-placeholder;
    }

    &:hover::placeholder {
      color: $input-hover-placeholder;
    }

    &:focus {
      outline: none;

      &::placeholder {
        color: transparent;
      }
    }
  }

  .password-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 30px;
    aspect-ratio: 1;
    background-color: transparent;
    border: none;
    cursor: pointer;

    & img {
      width: 100%;
    }
  }
</style>
