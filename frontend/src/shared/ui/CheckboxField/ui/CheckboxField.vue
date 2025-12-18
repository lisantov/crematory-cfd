<script setup lang="ts">
import { defineProps } from 'vue'

const checked = defineModel()

interface IProps {
  required?: boolean
}
defineProps<IProps>()
</script>
<template>
  <div class="checkboxField">
    <label class="checkboxField-label">
      <input
        :required="required"
        v-model="checked"
        type="checkbox"
        class="checkboxField-checkbox"
      />
      <p class="checkboxField-text"><slot></slot></p>
    </label>
  </div>
</template>

<style scoped lang="scss">
.checkboxField {
  &-label {
    display: flex;
    height: 100%;
    width: 100%;
    gap: 11px;
    align-items: center;
    justify-content: flex-start;
  }

  &-checkbox {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    appearance: none;
    width: 25px;
    height: 25px;
    border: 2px solid $text-secondary;
    border-radius: 5px;
    aspect-ratio: 1;
    cursor: pointer;
    transition: 0.2s ease;

    &:hover {
      border: 1px solid $button-control-hover;
    }

    &::after {
      content: '';
      position: absolute;
      width: 0;
      height: 0;
      background-image: url('/assets/icons/checkboxCheckMark.svg');
      background-position: center;
      background-repeat: no-repeat;
      transition: 500ms;
    }

    &:checked::after {
      width: 25px;
      height: 25px;
      transition: 500ms;
    }
  }

  &-text {
    color: $text-secondary;
    @include text-style(help);
  }
}
</style>
