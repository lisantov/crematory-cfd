<script setup lang="ts">
import PageLink from "@/shared/PageLink";
import PrimaryButton from "@/shared/PrimaryButton";
</script>

<template>
<header class="header">
  <h2 class="header-logo">Крематорий</h2>
  <nav class="header-nav">
    <page-link href="/">о нас</page-link>
    <page-link href="/">наши сотрудники</page-link>
    <page-link href="/">близким</page-link>
    <page-link href="/">услуги</page-link>
    <page-link href="/">вопросы</page-link>
  </nav>
  <primary-button type="button">войти</primary-button>
</header>
</template>

<style scoped lang="scss">
.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  padding: 50px 200px;

  &-logo {
    @include text-style(logo);
    color: $text-secondary;
  }

  &-nav {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 40px;
  }
}
</style>
