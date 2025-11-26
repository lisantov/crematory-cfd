<script setup lang="ts">
  interface IProps {
    href: string;
  }
  defineProps<IProps>();
</script>

<template>
  <router-link :to="href" class="link">
    <slot></slot>
  </router-link>
</template>

<style lang="scss" scoped>
  .link {
    @include text-style(nav);
    text-decoration: none;
    color: $text-primary;
    transition: color 0.2s ease-in-out;

    &:hover {
      color: $text-primary-hover;
    }
  }
</style>
