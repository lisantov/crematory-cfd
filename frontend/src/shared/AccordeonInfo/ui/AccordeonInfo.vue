<script setup lang="ts">
import {defineProps} from 'vue'
import {useId} from "vue";

const id = useId();

const props = defineProps({
  title: String
})
</script>

<template>
  <div class="accordion">
    <input class="accordion-checkbox" :id="id" type="checkbox">
      <label :for="id" class="accordion-label">
        <p class="accordion-title">{{ title }}</p>
        <img class="accordion-img" src="/assets/icons/accordionArrow.svg" alt="Иконка использования аккардиона">
      </label>
      <p class="accordion-description">
        <slot></slot>
      </p>
  </div>
</template>

<style scoped lang="scss">

  .accordion {
    display: flex;
    flex-direction: column;
    @include text-style(primary);

    &-label {
      display: flex;
      justify-content: space-between;
      width: 100%;
      align-items: center;
      border: 1px solid $card-frame-border;
      border-radius: 33px;
      padding: 20px 52px;

    }

    &-img {
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    &-checkbox {
      display: none;
    }

    &-description {
      overflow: hidden;
      max-height: 0;
      transition: max-height 0.4s ease, padding 0.4s ease;
      padding: 0 51px;
    }

    &-checkbox:checked ~ &-description {
      max-height: 300px;
      padding: 30px 51px 20px 51px;
    }

    &-checkbox:checked ~ &-label &-img {
      transform: rotate(180deg);
    }
  }
</style>
