<script setup lang="ts">
  interface IProps {
    href: string;
  }
  defineProps<IProps>();
</script>

<template>
  <router-link :to="href" class="arrow">
    <img class="arrow-icon" src="/assets/icons/topRightArrow.svg" alt="Иконка стрелочки" />
  </router-link>
</template>

<style scoped lang="scss">
  @use '@styles/_variables' as *;

  .arrow {
    width: 50px;
    aspect-ratio: 1;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    background-color: $button-accent;
    transition: background-color 0.15s ease-in-out;

    &:hover {
      background-color: $button-accent-hover;
    }

    &:active {
      background-color: $button-accent-active;
    }

    &-icon {
      width: 100%;
      aspect-ratio: 1;
    }
  }
</style>
