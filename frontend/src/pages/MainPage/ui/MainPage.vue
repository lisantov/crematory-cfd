<script setup lang="ts">

import SectionTitle from '@shared-ui/SectionTitle'
import ServiceCard from '@shared-ui/ServiceCard'
import ProductCard from '@shared-ui/ProductCard'
import EmployeeCard from '@shared-ui/EmployeeCard'
import AccordeonInfo from '@shared-ui/AccordeonInfo'
</script>

<template>
  <article class="slogan">
    <p class="slogan__text">
      В этот трудный момент мы готовы поддержать вас — с уважением, заботой и вниманием к <span class="slogan__text underlined">каждой</span> детали.
    </p>
  </article>
  <section class="about" id="about">
    <section-title>О нас</section-title>
    <div class="about__info">
      <div class="about__text">
        <div class="about__card">
          Наш крематорий был основан в 1995 году и за годы работы стал символом достоинства  и уважения к памяти усопших. Мы сочетаем традиционные ценности с современными технологиями, чтобы обеспечить родственникам максимальный комфорт в трудную минуту.
        </div>
        <span class="about__annotation">
          Мы работаем в соответствии с действующим законодательством Российской Федерации и имеем все необходимые лицензии и санитарные разрешения.
        </span>
      </div>
      <div class="about__map">
        <iframe class="about__map-frame" src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae5f49bab63455dd6f355f3b8a93e133e578d4fe79a078f3eab819cb352408c08&amp;source=constructor" frameborder="0"></iframe>
        <p class="about__address">
          Наше местоположение: г. Томск, ул. Яковлева д. 19
        </p>
      </div>
    </div>
  </section>

  <section class="service" id="service">
    <section-title>Услуги</section-title>
    <div class="service__cards">
      <service-card title="пакет 1" description="Минимальный комплекс для проведения кремации с соблюдением всех формальностей." price="от 15 000&#8381;"/>
      <service-card title="пакет 2" description="Позволяет провести краткую, но полноценную церемонию в траурном зале в кругу близких." price="от 35 000&#8381;"/>
      <service-card title="пакет 3" description="Максимальная забота и полное спокойствие. Мы берём на себя все задачи." price="от 55 000&#8381;"/>
    </div>
  </section>

  <section class="product" id="products">
    <section-title>Урны для праха</section-title>
    <div class="product__cards">
      <product-card title="Пластик" src="/assets/images/products/plasticUrn.png" description="(включен в пакет 1)" href="#"/>
      <product-card title="Дерево" src="/assets/images/products/woodenUrn.png" description="от 3 000 до 15 000&#8381;" href="#"/>
      <product-card title="Металл" src="/assets/images/products/metalUrn.png" description="от 10 000 до 40 000&#8381;" href="#"/>
      <product-card title="Биоразлагаемые" src="/assets/images/products/bioUrn.png" description="от 2 000 до 10 000&#8381;" href="#"/>
      <product-card title="Кермаика" src="/assets/images/products/ceramicUrn.png" description="от 5 000 до 25 000&#8381;" href="#"/>
    </div>
  </section>

  <section class="advantages" id="advantages">
    <section-title><p>Вам <span class="underlined">не</span> нужно через это проходить в одиночку</p></section-title>
    <div class="advantages__grid">
      <div class="advantages__info">
        <div class="advantages__info-card">
          <p>Первые и самые важные шаги</p>
          <ul>
            <li>наш сотрудник выслушает и подскажет, что делать дальше</li>
            <li>мы ответим на все ваши вопросы</li>
          </ul>
        </div>
        <img class="advantages__info-image" src="/assets/images/flowers.png" alt="Красивые цветы">
        <div class="advantages__info-card">
          <p>Поручите нам решение вопросов</p>
          <ul>
            <li>координация всех этапов в один день</li>
            <li>взаимодействие с государственными органами для получения документов</li>
          </ul>
        </div>
      </div>
      <div class="advantages__contacts">
        <img class="advantages__info-image" src="/assets/images/hand.png" alt="Рука жестикулирует">
        <div class="advantages__info-card">
          <p>Как позаботиться о себе и близких в это время</p>
          <ul>
            <li>принимайте помощь</li>
            <li>во время стресса легко забыть о базовых потребностях</li>
            <li>делайте маленькие паузы</li>
            <li>не вините себя</li>
            <li>разрешите себе чувствовать горечь утраты без чувства вины</li>
          </ul>
        </div>
        <div class="advantages__contacts-cards">
          <div class="advantages__contacts-card">
            <p>Круглосуточная линия поддержки</p>
            <a href="tel:88001234567" class="advantages__contacts-icon">
              <img src="/assets/icons/phone.svg" alt="Иконка телефона">
              8 (800) 123-45-67
            </a>
          </div>
          <div class="advantages__contacts-card advantages__contacts-card--dark">
            <p>Вы не одни. Мы рядом. Когда мир перевернулся с ног на голову.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="employees" id="employees">
    <section-title>Наши сотрудники</section-title>
    <div class="employees__cards">
      <employee-card src="/assets/images/employees/ann.png" name="Анна Петрова" post="Руководитель службы организации" quote="Моя задача — сделать так, чтобы все процедуры прошли четко и достойно." />
      <employee-card src="/assets/images/employees/dmitriy.png" name="Дмитрий Соколов" post="Старший церемонимейстер" quote="Я создам трогательную и персонализированную службу." />
      <employee-card src="/assets/images/employees/maria.png" name="Мария Волкова" post="Консультант по ритуальным вопросам" quote="Я внимательно выслушаю вас и помогу принять решение без лишней спешки.”" />
      <employee-card src="/assets/images/employees/igor.png" name="Игорь Николаев" post="Координатор службы поддержки" quote="Вы можете обратиться к нам в любое время - мы решим возникшие вопросы." />
    </div>
  </section>

  <section class="faq" id="faq">
    <section-title>Часто задаваемые вопросы</section-title>
    <div class="faq__grid">
      <div>
        <accordeon-info title="Какие документы требуются для проведения кремации?">
          <ul>
            <li>Свидетельство о смерти</li>
            <li>Документы, удостоверяюшие личность умершего и родственных лиц выступающих заявителями</li>
            <li>Письменное согласие на кремацию</li>
            <li>Разрешение на кремацию</li>
          </ul>
        </accordeon-info>
        <accordeon-info title="Какая гарантия того, что урны не будут перепутаны?">
          <p>
            Мы используем четкую идентификацию на каждом этапе процесса и гарантируем, что вы получите ваш заказ.
          </p>
        </accordeon-info>
        <accordeon-info title="Как долго хранится прах в крематории?">
          <p>
            Бесплатный срок хранения 60 дней, если прах не будет востребован, то он подлежит захоронению в братскую могилу.
          </p>
        </accordeon-info>
      </div>
      <div>
        <accordeon-info title="Можно ли запросить поместить прах в свою урну?">
          <p>
            Да, при вашем желании мы можем поместить прах в вашу урну.
          </p>
        </accordeon-info>
        <accordeon-info title="Сколько длится кремация?">
          <p>
            Кремация длится от одного до двух часов.
          </p>
        </accordeon-info>
        <accordeon-info title="Сколько хранится прах после получения?">
          <p>
            При соблюдении условий хранения прах хранится бессрочно.
          </p>
        </accordeon-info>
      </div>
    </div>
  </section>
</template>

<style scoped lang="scss">
.slogan {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  padding: 40px 220px;
  border: 1px solid $card-frame-border;
  border-radius: 33px;
  box-shadow: 0 4px 10px 2px $card-frame-shadow;

  &__text {
    @include text-style(italic);
    text-align: center;
  }
}

.about {
  display: flex;
  flex-direction: column;
  gap: 40px;

  &__info {
    display: grid;
    grid-template-columns: 3fr 2fr;
    gap: 18px;
  }

  &__text {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  &__card {
    @include text-style(primary);
    width: 100%;
    padding: 20px 36px;
    border: 1px solid $card-frame-border;
    border-radius: 33px;
    box-shadow: 0 4px 10px 2px $card-frame-shadow;
  }

  &__annotation {
    @include text-style(system);
    padding-left: 40px;
    text-decoration: underline;
    max-width: 65%;
  }

  &__map {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;

    &-frame {
      width: 100%;
      height: 240px;
      border-radius: 33px;
    }
  }

  &__address {
    @include text-style(primary);
  }
}

.service {
  display: flex;
  flex-direction: column;
  gap: 40px;

  &__cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
  }
}

.product {
  display: flex;
  flex-direction: column;
  gap: 40px;

  &__cards {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
  }
}

.advantages {
  display: flex;
  flex-direction: column;
  gap: 40px;

  &__grid {
    display: flex;
    flex-direction: column;
    gap: 18px;
  }

  &__info {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;

    &-card {
      display: flex;
      flex-direction: column;
      gap: 32px;
      @include text-style(primary);
      width: 100%;
      padding: 40px;
      border: 1px solid $card-frame-border;
      border-radius: 33px;
      box-shadow: 0 4px 10px 2px $card-frame-shadow;

      & ul {
        display: flex;
        flex-direction: column;
        list-style-position: inside;
        gap: 20px;
        color: $text-secondary;
      }
    }

    &-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      border-radius: 33px;
    }
  }

  &__contacts {
    display: grid;
    grid-template-columns: 4fr 5fr 3fr;
    gap: 18px;

    &-cards {
      display: grid;
      grid-template-rows: 1fr 1fr;
      gap: 18px;
    }

    &-card {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 18px;
      @include text-style(primary);
      text-align: center;
      width: 100%;
      height: 100%;
      padding: 40px;
      border: 1px solid $card-frame-border;
      border-radius: 33px;
      box-shadow: 0 4px 10px 2px $card-frame-shadow;

      &--dark {
        background: $button-control;
        color: $text-on-dark-primary;
      }
    }

    &-icon {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      text-decoration: none;
      color: $text-primary;
    }
  }
}

.employees {
  display: flex;
  flex-direction: column;
  gap: 40px;

  &__cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
  }
}

.faq {
  display: flex;
  flex-direction: column;
  gap: 40px;

  &__grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;

    & > div {
      display: flex;
      flex-direction: column;
      gap: 33px;
    }
  }
}
</style>
