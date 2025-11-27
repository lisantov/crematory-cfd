<script setup lang="ts">
import {defineProps} from 'vue'

interface IProps {
  placeholder: string
}
defineProps<IProps>()
const input = defineModel()
</script>

<template>
  <input v-model="input" :placeholder="placeholder" type="text" class="input">
</template>

<style scoped lang="scss">
.input {
  width: 100%;
  border: 1px solid $card-frame-border;
  border-radius: 33px;
  padding: 12px 30px;
  color: $text-secondary;
  @include text-style(help);

  &::placeholder {
    color: $text-secondary;
    @include text-style(help);
  }

  &:hover::placeholder {
    color: $button-control-hover;
  }

  &:focus {
    outline-color: $card-frame-border;

    &::placeholder {
      color: transparent;
    }
  }
}
</style>
