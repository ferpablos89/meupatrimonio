
<template>
  <div class="row mt-4">
    <div class="col-md-4" v-for="card in cards" :key="card.title">
      <div class="card shadow-sm mb-3">
        <div class="card-body">
          <h6>{{ card.title }}</h6>
          <h3>{{ card.value }}</h3>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const cards = [
  { title: 'Gastos do mês', value: 'R$ 2.500,00' },
  { title: 'Patrimônio total', value: 'R$ 150.000,00' },
  { title: 'Investimentos', value: 'R$ 120.000,00' },
]
</script>
