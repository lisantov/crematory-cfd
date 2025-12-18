<script setup lang="ts">
import { defineProps } from 'vue'

interface IProps {
  placeholder: string
  white: boolean
}
defineProps<IProps>()
const input = defineModel()
</script>

<template>
  <card-frame>
    <label class="label">
      <input
        v-model="input"
        :placeholder="placeholder"
        type="text"
        class="input"
        :class="white && 'white'"
      />
    </label>
  </card-frame>
</template>

<style scoped lang="scss">
.label {
  width: 100%;
  height: 100%;
  box-shadow: $card-frame-shadow;
  outline: none;
}

.input {
  width: 100%;
  height: 100%;
  padding: 12px 30px;
  border-radius: 33px;
  color: $text-secondary;
  @include text-style(help);
  border: none;
  outline: 1px solid $card-frame-border;
  background-color: transparent;
  box-shadow: 0 4px 10px 2px $card-frame-shadow;

  &::placeholder {
    color: $text-secondary;
    @include text-style(help);
  }

  &:hover::placeholder {
    color: $button-control-hover;
  }

  &:focus {
    outline: 2px solid $card-frame-border;
    &::placeholder {
      color: transparent;
    }
  }
}

.white {
  color: $text-secondary;
  background: $text-on-dark-primary;
  @include text-style(help);
  border: none;
  outline: 1px solid $card-frame-border;
  box-shadow: 0 4px 10px 2px $card-frame-shadow;
  padding: 12px 30px;

  &::placeholder {
    color: $text-secondary;
    opacity: 0.5;
    @include text-style(system);
  }

  &:hover::placeholder {
    color: $button-control-hover;
  }

  &:focus {
    outline: 2px solid $card-frame-border;
    &::placeholder {
      color: transparent;
    }
  }

  &:invalid {
    outline: 2px solid $delete-active;
  }
}
</style>
