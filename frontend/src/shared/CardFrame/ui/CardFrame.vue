<template>
  <div class="card">
    <slot></slot>
  </div>
</template>

<style scoped lang="scss">
  @use '@styles/_variables' as *;

  .card {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 24px;
    border: 1px solid $card-frame-border;
    border-radius: 32px;
    background-color: $card-frame-background;
    box-shadow: 0 4px 10px 2px $card-frame-shadow;
  }
</style>
