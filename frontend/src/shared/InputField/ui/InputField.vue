<script setup lang="ts">
import {defineProps} from 'vue'
import cardFrame from "@/shared/CardFrame";

interface IProps {
  placeholder: string
}
defineProps<IProps>()
const input = defineModel()
</script>

<template>
  <card-frame>
    <label class="label">
      <input v-model="input" :placeholder="placeholder" type="text" class="input">
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
  background-color: transparent;

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
</style>
