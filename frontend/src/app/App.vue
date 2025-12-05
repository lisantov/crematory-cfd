<script setup lang="ts">
import AppHeader from "@/widgets/AppHeader";
import FooterNavigation from "@/widgets/FooterNavigation";
import RegisterPage from "@/pages/RegisterPage";
import LoginPage from "@/pages/LoginPage";
</script>

<template>
<!--  <div class="wrap">-->
<!--    <app-header/>-->
<!--    <main class="main">-->
<!--      <router-view/>-->
<!--    </main>-->
<!--    <footer-navigation/>-->
<!--  </div>-->
  <login-page/>
</template>

<style scoped lang="scss">
.wrap {
  width: 100%;
  height: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.main {
  width: 100%;
  display: grid;
  gap: 100px;
  padding: 50px 200px 100px;
}
</style>
