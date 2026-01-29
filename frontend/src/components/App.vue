<template>
  
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm" style="background-color: #F7F7F7 !important;">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center ms-5 me-5" href="#">
            <img :src="logo" alt="MeuPatrimonio" style="height: 130px;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav">
                <li class="nav-item" style="border-right: 1px solid #ccc"><a class="nav-link" href="#">Gastos</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Categorias de Gasto</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="content container-fluid">
    <h1 class="h4 mb-4 ms-4">Gastos</h1>
    <button class="btn btn-outline-primary mb-3 ms-4">Novo Gasto</button>
    <table class="table ms-4 me-6">
        <tr>
            <th>Categoria</th>
            <th>Gastos</th>
        </tr>
        <tr v-for="cat in categorias_com_gastos.data" :key="cat.id">
            <td>{{ cat.nome }}</td>
            <td>R$ {{ cat.total_gasto }}</td>
        </tr>
    </table>
</main>
</template>

<script setup>
import logo from "@/assets/logo_mp.png"
import axios from 'axios'
import { onMounted, ref } from 'vue'

const categorias_com_gastos = ref([])

onMounted(async () => {
  const response = await axios.get('http://localhost:8080/api/categoriagasto')
  categorias_com_gastos.value = response.data
})

</script>

<style scoped>
  body { background-color: #f8f9fa; }
  .navbar-brand img { height: 40px; }
  .content { padding: 2rem; }
</style>
