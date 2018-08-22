<template>
    <div class="w-doc-card">
        <div class="doc-card doc-card_controlled">
            <div class="doc-card-control-menu">
                <div class="doc-card-control-menu__edit">
                    <a href="#" class="doc-card-control-menu-link doc-card-control-menu-link_edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </div>
                <div class="doc-card-control-menu__remove">
                    <a href="#" class="doc-card-control-menu-link doc-card-control-menu-link_remove">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="doc-card-title">
                <a href="#" class="doc-card-title__link">Test Card 1</a>
            </div>
            <div class="doc-card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporisdoloribus non nisi.</div>
            <div class="doc-card-status">
                <div class="doc-card-status__item">
                    <span class="label label-primary">Согласован</span>
                </div>
                <div class="doc-card-status__item">
                    <span class="label label-success">Возврат</span>
                </div>
            </div>
            <div class="doc-card-footer">
                <div class="doc-card-footer-date text-muted">
                    Обновлено:
                    <time>4 часа назад</time>
                </div>
                <div class="doc-card-footer-application">
                    <a href="#" class="doc-card-footer-application__link"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Card",
    props: {
        card: {
            type: Object,
            default: () => ({}),
        }
    },
    computed: {

    },
    methods: {

    },
}
</script>

<style lang="scss">
</style>


