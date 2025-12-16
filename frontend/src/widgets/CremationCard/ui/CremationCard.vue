<script setup lang="ts">
import { CremationCard } from "./../model/types";
import PrimaryButton from "@/shared/PrimaryButton";
import {computed} from "vue";

const props = defineProps<CremationCard>();

const parsedDocuments = computed(() => {
  if (props.documents) {
    return JSON.parse(props.documents);
  }
  return [];
});
</script>

<template>
 <article class="card">
   <div class="card-text">
     <div class="card-about">
       <div class="card-about-name">
         <img src="/assets/icons/flowerLotus.svg" alt="Цветок">
         <p>{{ name }} {{ surname }}  {{ patronymic }}</p>
       </div>
       <div class="card-date">
         <p>Дата: {{ date }}</p>
         <p>Время: {{ time }}</p>
       </div>
       <p>Номер заказа: {{ order_number }}</p>
       <p>Статус: {{ status }}</p>
       <p>Зал: {{ hall }}</p>
       <p>Ответственный сотрудник: {{ employee }}</p>
     </div>
     <div class="card-docks">
       <h2 class="card-docks-title">Документы</h2>
       <p v-for="doc in parsedDocuments" :key="doc">{{ doc }}</p>
       <primary-button type="button"><img src="/assets/icons/application.svg" alt="Заявка"> Запросить справку</primary-button>
     </div>
   </div>
   <div class="card-buttons">
     <primary-button primary type="button">Детали</primary-button>
     <primary-button simple type="button"><img src="/assets/icons/edit.svg" alt="Изменить"> Изменить</primary-button>
     <primary-button simple type="button"><img src="/assets/icons/delete-circle.svg" alt="Удалить"> Отменить</primary-button>
   </div>
 </article>
</template>

<style scoped lang="scss">
.card {
  display: flex;
  flex-direction: column;
  padding: 30px 40px;
  border-radius: 33px;
  border: 1px solid $card-frame-border;
  box-shadow: 0 4px 10px 2px $card-frame-shadow;
  gap: 24px;
  min-width: 1000px;
  width: 100%;
  overflow: visible;

  &-text {
    display: flex;
    @include text-style(primary);
    color: $text-secondary;
  }

  &-about {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 470px;
    width: 100%;

    &-name {
      display: flex;
      gap: 18px;
      @include text-style(info);
      color: $text-primary;
    }
  }

  &-date {
    display: flex;
    gap: 20px;
  }

  &-docks {
    display: flex;
    flex-direction: column;
    gap: 24px;

    &-title {
      @include text-style(info);
      color: $text-primary;
    }
  }

  &-buttons {
    display: flex;
    justify-content: flex-end;
  }
}

button {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}
</style>
