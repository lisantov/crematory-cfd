<script setup lang="ts">
interface IProps {
  disabled?: boolean;
  type: 'submit' | 'reset' | 'button';
}
defineProps<IProps>();
</script>

<template>
  <button class="button" :type="type" :disabled="disabled">
      <slot></slot>
  </button>
</template>

<style scoped lang="scss">
 .button {
   display: flex;
   justify-content: center;
   align-items: center;
   padding: 16px 60px;
   border-radius: 33px;
   background: transparent;
   background: $text-on-dark-primary;
   border: none;
   cursor: pointer;
   color: $text-secondary;
   @include text-style(h2);
   transition: background-color 0.3s;

   &:hover {
     background: $alt-hover;
   }

   &:active {
    background: $alt-active;
   }
 }
</style>
