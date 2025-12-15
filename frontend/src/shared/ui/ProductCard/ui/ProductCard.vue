<script setup lang="ts">
import LinkIcon from '@shared-ui/LinkIcon'

interface IProps {
  src: string;
  title: string;
  description: string;
  href: string;
}

defineProps<IProps>();
</script>

<template>
  <router-link :to="href" class="link">
    <article class="product-card">
      <link-icon class="product-card-icon" />
      <img class="product-card-image" :src alt="Картинка товара">
      <div class="product-card-text">
        <h3 class="product-card-title">{{ title }}</h3>
        <p class="product-card-description">{{ description }}</p>
      </div>
    </article>
  </router-link>
</template>

<style scoped lang="scss">
  .link {
    text-decoration: none;
  }

  .product-card {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 24px;
    border-radius: 33px;
    background: $text-on-dark-primary;
    border: 1px solid $card-frame-border;
    box-shadow: 0 4px 10px 2px $card-frame-shadow;
    padding-bottom: 24px;

    &-icon {
      position: absolute;
      right: 27px;
      top: 27px;
    }

    &-image {
      width: 100%;
      border-radius: 33px;
    }

    &-text {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 8px;
    }

    &-title {
      @include text-style(primary);
      color: $text-primary;
    }

    &-description {
      @include text-style(prices);
      color: $text-secondary;
    }
  }
</style>
