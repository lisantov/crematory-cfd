<script setup lang="ts">
import SectionTitle from "@/shared/SectionTitle";
import InfoRow from "@/shared/InfoRow";
import PrimaryButton from "@/shared/PrimaryButton";
import DeleteButton from "@/shared/DeleteButton";
import CremationCard from "@/widgets/CremationCard";


</script>

<template>
  <section class="personal">
    <h1>
      <section-title>Личные данные</section-title>
    </h1>
    <div class="personal-data">
      <info-row title="Имя">Елизавета</info-row>
      <info-row title="Пароль">**************</info-row>
      <info-row title="Номер">+7 999 999 99 99</info-row>
      <info-row title="Логин">Elizaveta</info-row>
      <info-row title="E-mail">pochta45@mail.ru</info-row>
    </div>
    <div class="personal-buttons">
      <delete-button type="button">Удалить аккаунт</delete-button>
      <primary-button primary type="button" class="button">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 3.99998H4C3.46957 3.99998 2.96086 4.2107 2.58579 4.58577C2.21071 4.96084 2 5.46955 2 5.99998V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V13M18.5 2.49998C18.8978 2.10216 19.4374 1.87866 20 1.87866C20.5626 1.87866 21.1022 2.10216 21.5 2.49998C21.8978 2.89781 22.1213 3.43737 22.1213 3.99998C22.1213 4.56259 21.8978 5.10216 21.5 5.49998L12 15L8 16L9 12L18.5 2.49998Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Изменить
      </primary-button>
    </div>
  </section>
  <section class="cremation">
    <div class="cremation-title">
      <h2>
        <section-title>Кремации</section-title>
      </h2>
      <div class="cremation-buttons">
        <primary-button accent  type="button">Текущие</primary-button>
        <primary-button accent primary type="button">Предыдущие</primary-button>
      </div>
    </div>
    <div class="cremation-items">
      <cremation-card id="1" name="Купер" surname="Марина" patronymic="Ивановна" date="15 декабря 2023 г." time="14:30" order_number="#cr-2023-567" status="Кремация" hall="“Память” (20 чел.)" employee="Виктория С." documents='["Свидетельство о кремации", "Акт о выдаче праха"]'/>
      <article class="stub">Здесь будут отображаться все данные о текущих кремациях</article>
    </div>
  </section>
</template>

<style scoped lang="scss">
  .personal {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 50px;

    &-data {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 10px;
    }

    &-buttons {
      display: flex;
      justify-content: center;
      gap: 18px;
    }
  }

  .cremation {
    display: flex;
    flex-direction: column;
    gap: 40px;
    overflow: hidden;


    &-title {
      display: flex;
      flex-direction: column;
    }

    &-buttons {
      display: flex;
      justify-content: end;
      gap: 18px;
    }

    &-items {
      display: flex;
      gap: 18px;
      padding-bottom: 13px;
    }

  }

  .stub {
    height: 100%;
    min-width: 1000px;
    width: 100%;
    padding: 160px 64px;
    border-radius: 33px;
    border: 1px solid $card-frame-border;
    box-shadow: 0 4px 10px 2px $card-frame-shadow;
    @include text-style(headlines);
    color: $text-secondary;
    text-align: center;
  }

  .button {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
  }
</style>
