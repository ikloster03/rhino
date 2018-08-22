<template>
   <div class="c-cards">
       <Card v-for="(item, index) in cards" :key="index" :card="item"/>
   </div>
</template>

<script>
import Card from 'Apps/Card/Card'
import { mapGetters, mapActions } from 'vuex'
export default {
    name: "CardContainer",
    components: {
        Card
    },
    computed: {
        ...mapGetters({
            documents: 'documents',
        }),
    },
    methods: {
        ...mapActions({
            getDocuments: 'getDocuments',
        }),
    },
    created() {
        this.getDocuments()
    }
}
</script>

<style lang="scss">
</style>


