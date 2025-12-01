<script setup lang="ts">
  interface IProps {
    disabled: boolean;
    type: 'submit' | 'reset' | 'button';
  }

  defineProps<IProps>();
</script>

<template>
  <button :type="type" :disabled="disabled" class="button">
    <slot></slot>
  </button>
</template>

<style scoped lang="scss">
  .button {
    @include text-style(system);
    color: $button-control-text;
    padding: 8px 44px;
    border-radius: 33px;
    background-color: $button-control;
    border: none;
    cursor: pointer;
    transition: background-color 0.25s ease-in-out;

    &[disabled] {
      cursor: not-allowed;
      opacity: 0.6;
    }

    &:not([disabled]) {
      &:hover {
        background-color: $button-control-hover;
      }

      &:active {
        background-color: $button-control-active;
      }
    }
  }
</style>
