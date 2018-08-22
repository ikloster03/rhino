<template>
    <div>
        <HeaderApp />
        <MainApp />
        <FooterApp />
    </div>
</template>

<script>
    import HeaderApp from 'Apps/HeaderApp'
    import FooterApp from 'Apps/FooterApp'
    import MainApp from 'Apps/MainApp'

    export default {
        name: "App",
        components: {
            HeaderApp,
            FooterApp,
            MainApp,
        }
    }
</script>

<style>

</style>