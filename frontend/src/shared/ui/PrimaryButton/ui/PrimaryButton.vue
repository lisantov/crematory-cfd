<script setup lang="ts">
interface IProps {
  type: 'submit' | 'reset' | 'button'
  disabled?: boolean
  primary?: boolean
  simple?: boolean
  accent?: boolean
}

defineProps<IProps>()
</script>

<template>
  <button
    :type="type"
    :disabled="disabled"
    class="button"
    :class="`${simple && 'simple'} ${primary && 'primary'} ${accent && 'accent'}`"
  >
    <slot></slot>
  </button>
</template>

<style scoped lang="scss">
.button {
  @include text-style(system);
  padding: 8px 44px;
  border-radius: 33px;
  background-color: transparent;
  border: 1px solid $button-control;
  color: $button-control;
  cursor: pointer;
  transition: 0.25s ease-in-out;

  &[disabled] {
    cursor: not-allowed;
    opacity: 0.6;
  }

  &:not([disabled]) {
    &:hover {
      background-color: $button-hover;
    }

    &:active {
      background-color: $button-control;
      border-color: $button-control-text;
      color: $button-control-text;
    }
  }

  &.primary {
    border: none;
    background-color: $button-control;
    color: $button-control-text;

    &:hover {
      background-color: $button-control-hover;
    }

    &:active {
      background-color: $button-control-active;
    }
  }

  &.accent {
    border-color: $button-accent;

    &.primary {
      background-color: $button-accent;
      border: none;

      &:hover {
        background-color: $button-accent-hover;
      }

      &:active {
        opacity: 0.9;
        background-color: $button-accent-hover;
        color: $button-control-text;
      }
    }

    &:hover {
      background-color: $button-light-accent-hover;
    }

    &:active {
      opacity: 0.9;
      border-color: $button-accent;
      color: $button-control;
    }
  }

  &.simple {
    background-color: transparent !important;
    border: none;
    color: $button-control;

    &:hover {
      opacity: 0.8;
    }

    &:active {
      color: $button-control !important;
      opacity: 0.6;
    }
  }
}
</style>
