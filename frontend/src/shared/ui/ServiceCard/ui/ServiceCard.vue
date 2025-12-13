<script setup lang="ts">
import LinkIcon from "@/shared/LinkIcon";

interface IProps {
  title: string;
  description: string;
  href: string;
  price: string;
}

defineProps<IProps>();
</script>

<template>
  <article class="card">
    <div class="card-header">
      <div class="card-header-text">
        <p class="card-header-text-title">{{ title }}</p>
        <p class="card-header-text-price">{{ price }}</p>
      </div>
      <router-link :to="href">
        <link-icon/>
      </router-link>
    </div>
    <div class="card-description">
      <p>{{ description }}</p>
    </div>
  </article>
</template>

<style scoped lang="scss">
.card {
  display: flex;
  flex-direction: column;
  gap: 24px;
  padding: 40px 20px;
  border: 1px solid $card-frame-border;
  border-radius: 33px;
  box-shadow: 0 4px 10px 2px $card-frame-shadow;

  &-header {
    display: flex;
    justify-content: space-between;

    &-text {
      display: flex;
      flex-direction: column;
      gap: 8px;

      &-title {
        @include text-style(primary);
        color: $text-secondary;
      }

      &-price {
        @include text-style(primary);
        color: $text-primary;
      }
    }
  }

  &-description {
    @include text-style(primary);
    color: $text-tertiary;
  }
}
</style>
