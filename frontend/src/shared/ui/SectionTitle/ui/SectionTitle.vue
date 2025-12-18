<script setup lang="ts"></script>

<template>
  <h2 class="title">
    <slot></slot>
  </h2>
</template>
<style lang="scss" scoped>
.title {
  display: flex;
  align-items: center;
  justify-content: center;
  @include text-style(headlines);
  color: $text-primary;
}
</style>
