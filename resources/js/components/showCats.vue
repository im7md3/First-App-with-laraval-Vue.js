<template>
  <div class="">
    <div class="" v-for="cat in this.cats">
      <h3>{{ cat.name }}</h3>
      <ul>
        <li v-for="subcat in cat.sub_cats">{{ subcat.name }}</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: ["cats"],
};
</script>