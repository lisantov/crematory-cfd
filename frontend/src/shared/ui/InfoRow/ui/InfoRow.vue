<script setup lang="ts">
interface Iprops {
  title: string
}
defineProps<Iprops>()
</script>

<template>
  <div class="info-row">
    <p class="info-row-title">
      {{ title }}
    </p>
    <p class="info-row-description">
      <slot></slot>
    </p>
  </div>
</template>

<style scoped lang="scss">
.info-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  height: 100%;
  box-shadow: 0 4px 10px 2px $card-frame-shadow;
  border-radius: 33px;
  padding: 16px 105px;
  color: $text-secondary;
  @include text-style(info);
  outline: 1px solid $card-frame-border;
  transition: opacity 0.2s ease;
  max-width: 750px;
  max-height: 60px;

  &-description {
    opacity: 0.8;
  }

  &:hover {
    outline: 2px solid $card-frame-border;

    &:hover .info-row-title {
      opacity: 0.8;
    }

    &:hover .info-row-description {
      opacity: 1;
    }
  }
}
</style>
