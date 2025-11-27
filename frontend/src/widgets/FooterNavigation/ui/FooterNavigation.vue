<script setup lang="ts">

</script>

<template>
<section class="footer">
  <div class="footer-text">
    <a href="#" class="footer-link">О нас</a>
    <a href="#" class="footer-link">Наши сотрудники</a>
    <a href="#" class="footer-link">Близким</a>
    <a href="#" class="footer-link">Услуги</a>
  </div>
  <div class="footer-text">
    <p>Наш адрес: Томская обл., г. Томск, ул. Нахимова, 45 </p>
    <p>Круглосуточная линия помощи: 8 (800) 123-45-67</p>
    <p>E-mail: info@crematory.ru</p>
    <router-link to="/" class="footer-link">Регистрация</router-link>
  </div>
  <div class="footer-text">
    <router-link to="/" class="footer-link">Правовая информация</router-link>
    <router-link to="/" class="footer-link">Политика конфиденциальности</router-link>
    <a href="#" class="footer-link">FAQ (Часто задаваемые вопросы)</a>
    <p>© 2025 Crem. Все права защищены.</p>
  </div>
</section>
</template>

<style scoped lang="scss">
.footer {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 112px 200px;
  gap: 209px;
  background: $text-secondary;

  &-text {
    display: flex;
    flex-direction: column;
    gap: 20px;
    text-decoration: none;
    color: $text-on-dark-primary;
    @include text-style(primary);
  }

  &-link {
    text-decoration: none;
    color: $text-on-dark-primary;

    &:hover, &:focus {
      opacity: 0.8;
    }
  }
}
</style>
