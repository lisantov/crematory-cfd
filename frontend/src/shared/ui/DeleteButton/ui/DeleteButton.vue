<script setup lang="ts">
interface IProps {
 disabled?: boolean;
 type: 'submit' | 'reset' | 'button';
}
defineProps<IProps>();
</script>

<template>
  <button :disabled="disabled" :type="type" @click="$emit('delete')" class="button">
    <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="button-image" d="M1 4.33333H2.66667M2.66667 4.33333H16M2.66667 4.33333V16C2.66667 16.442 2.84226 16.8659 3.15482 17.1785C3.46738 17.4911 3.89131 17.6667 4.33333 17.6667H12.6667C13.1087 17.6667 13.5326 17.4911 13.8452 17.1785C14.1577 16.8659 14.3333 16.442 14.3333 16V4.33333M5.16667 4.33333V2.66667C5.16667 2.22464 5.34226 1.80072 5.65482 1.48816C5.96738 1.17559 6.39131 1 6.83333 1H10.1667C10.6087 1 11.0326 1.17559 11.3452 1.48816C11.6577 1.80072 11.8333 2.22464 11.8333 2.66667V4.33333" stroke="#464646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <p class="button-text">
      <slot></slot>
    </p>
  </button>
</template>

<style scoped lang="scss">
.button {
  display: flex;
  gap: 10px;
  padding: 11px 40px;
  border-radius: 33px;
  background: transparent;
  border: 1px solid  $card-frame-border;
  color: $text-secondary;
  opacity: 0.8;
  @include text-style(system);

  &-image {
    color: $text-secondary;

  }

  &:hover {
    color: $delete-hover;
    opacity: 1;
  }

  &:hover &-image {
    stroke: $delete-hover;
    opacity: 1;
  }

  &:focus {
    color: $delete-active;
    opacity: 1;
  }

  &:focus &-image {
    stroke: $delete-active;
    opacity: 1;
  }
}
</style>
