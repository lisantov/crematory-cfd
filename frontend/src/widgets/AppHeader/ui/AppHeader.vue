<script setup lang="ts">
import PageLink from '@shared-ui/PageLink'
import PrimaryButton from '@shared-ui/PrimaryButton'
</script>

<template>
  <header class="header">
    <h2 class="header-logo">Крематорий</h2>
    <nav class="header-nav">
      <page-link href="/#about">о нас</page-link>
      <page-link href="/#employees">наши сотрудники</page-link>
      <page-link href="/#advantages">близким</page-link>
      <page-link href="/#service">услуги</page-link>
      <page-link href="/#faq">вопросы</page-link>
    </nav>
    <primary-button href="/login" primary type="button">войти</primary-button>
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
