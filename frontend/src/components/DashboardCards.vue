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
    <h1 class="h4 mb-4 ms-4">Gastos do mês</h1>
    <button class="btn btn-outline-primary mb-3 ms-4">Novo Gasto</button>
    <table class="table ms-4 me-6">
        <tr>
            <th>Categoria</th>
            <th>Gastos</th>
        </tr>
        <tr>
            <td>Alimentação</td>
            <td>R$ 1.727,49</td>
        </tr>
        <tr>
            <td>Contas</td>
            <td>R$ 2.507,97</td>
        </tr>
        <tr>
            <td>Lazer</td>
            <td>R$ 900,40</td>
        </tr>
    </table>
</main>


</template>

<script setup>
import logo from "@/assets/logo_mp.png"
</script>
