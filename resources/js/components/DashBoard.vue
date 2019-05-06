<template>
  <div>
    <div class="container mt-5">
      <div class="row-12">
        <Charts></Charts>
      </div>
      <div class="row-12 mt-5">
        <Table></Table>
      </div>
    </div>
  </div>
</template>


<script>
import Charts from "./CoreUI/Charts.vue";
import Table from "./CoreUI/Table.vue";

export default { components: { Charts, Table } };
</script>