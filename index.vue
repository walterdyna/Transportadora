<!-- Vue Component: Index.vue (Transportadoras) -->
<template>
  <div>
    <h1>Lista de Transportadoras</h1>
    <ul>
      <li v-for="transportadora in transportadoras" :key="transportadora.id">
        {{ transportadora.nome }} - {{ transportadora.endereco }}, {{ transportadora.cidade }}
        <router-link :to="{ name: 'transportadoras.show', params: { id: transportadora.id }}">Detalhes</router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ['transportadoras']
}
</script>
