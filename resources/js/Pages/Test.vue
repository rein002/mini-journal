<template>
  <div>テスト</div>
</template>

<script setup lang="ts">
import { onMounted } from 'vue';
import { foo } from './dummy';

const test = foo;

onMounted(() => {
  console.log(test);
});
</script>
