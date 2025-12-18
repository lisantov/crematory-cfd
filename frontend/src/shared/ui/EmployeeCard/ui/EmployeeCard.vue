<script setup lang="ts">
interface IProps {
  src: string
  name: string
  post: string
  quote: string
}

defineProps<IProps>()
</script>

<template>
  <article class="employee-card">
    <img class="employee-card-image" :src alt="Картинка сотрудника" />
    <h3 class="employee-card-name">{{ name }}</h3>
    <div class="employee-card-text">
      <p class="employee-card-post">{{ post }}</p>
      <blockquote class="employee-card-quote">“{{ quote }}„</blockquote>
    </div>
  </article>
</template>

<style scoped lang="scss">
.employee-card {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  gap: 20px;
  border-radius: 33px;
  background: $text-on-dark-primary;
  border: 1px solid $card-frame-border;
  box-shadow: 0 4px 10px 2px $card-frame-shadow;
  padding: 20px;

  &-image {
    width: 100%;
    border-radius: 33px;
  }

  &-text {
    width: 100%;
    height: 100%;
    display: flex;
    gap: 20px;
    flex-direction: column;
    justify-content: space-between;
  }

  &-name {
    @include text-style(h2);
    color: $text-primary;
  }

  &-post {
    @include text-style(primary);
    color: $text-secondary;
  }

  &-quote {
    @include text-style(system);
    color: $text-primary;
  }
}
</style>
