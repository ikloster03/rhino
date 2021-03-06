@extends('document::layouts.master')

@section('content')
    <header class="navbar navbar-default navbar-fixed-top">
        <div class="container-flex">
            <a href="#" class="block-menu">
                <span class="glyphicon glyphicon-menu-hamburger icon-menu" aria-hidden="true"></span>
            </a>
            <a class="block-logo" href="#">
                <img style="max-height: 30px;" src="./rhino.svg">
            </a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="document">
                <div class="document-header">
                    <div class="document-header-title">
                        <h1>Test Document 1</h1>
                    </div>
                    <div class="document-header-control-menu">
                        <div class="document-header-control-menu__edit">
                            <a href="#" class="document-header-control-menu-link document-header-control-menu-link_edit">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="document-header-control-menu__remove">
                            <a href="#" class="document-header-control-menu-link document-header-control-menu-link_remove">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="document-info">

                    <div class="document-info-status">
                        <div class="document-info-status__item">
                            <span class="label label-primary">Согласован</span>
                        </div>
                        <div class="document-info-status__item">
                            <span class="label label-success">Возврат</span>
                        </div>
                        <div class="document-info-status__item">
                            <span class="label label-danger">Категория: 1</span>
                        </div>
                    </div>
                    <div class="document-info-date text-muted">
                        Обновлено:
                        <time>21:41 13.03.2018</time>
                    </div>
                </div>
                <div class="document-body">
                    <div class="document-body-description">
                        <h4>Описание</h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dicta, eligendi earum quaerat accusamus voluptatem illo magni
                        enim nihil beatae ipsam alias harum nostrum aut laudantium sunt accusantium voluptate nemo ab et
                        quisquam vero a? Eligendi ab atque pariatur cum sunt nobis soluta molestias culpa quam ducimus. Debitis
                        neque at suscipit exercitationem nam qui excepturi, consectetur quidem, iste odit doloremque quo
                        recusandae nihil autem. Commodi quis modi vitae velit maxime fuga suscipit nam, sequi voluptas maiores
                        dolore quas incidunt dolores porro quibusdam odio quam laudantium aliquam. In itaque suscipit, quisquam
                        voluptate commodi odit optio enim, fugiat eaque perspiciatis obcaecati praesentium iusto! Possimus
                        dolor voluptate ad iusto unde minus architecto error, exercitationem quae at repellendus eum et,
                        temporibus quis beatae, eaque cum. Tenetur autem quos quam laborum officia. Voluptate vitae, soluta
                        dignissimos provident quisquam illum nemo magnam, totam ratione, cumque possimus quibusdam distinctio!
                        Consectetur facilis non veniam voluptate, aperiam porro delectus cum atque aut consequatur amet doloremque
                        commodi officia unde obcaecati sunt error exercitationem id quaerat impedit temporibus sapiente libero,
                        eos voluptatum. Quidem incidunt suscipit doloribus culpa nostrum. Quod similique itaque vero architecto
                        reprehenderit quam id amet repellendus, odio maiores ab voluptates optio vel deserunt quis rem, quo
                        hic, cum laborum voluptas provident ullam est. Minima neque atque necessitatibus vel commodi modi,
                        consequuntur autem! Id numquam nam cupiditate voluptatibus vero dolor unde quasi accusantium natus
                        quis. Maiores eveniet eius mollitia a voluptatum omnis at quam. Asperiores fugit, tenetur explicabo
                        obcaecati atque temporibus vero id perspiciatis, aliquam nesciunt necessitatibus perferendis est
                        assumenda et magnam! Omnis quod corporis porro numquam labore saepe qui dolores, amet vel voluptate
                        aspernatur hic eum sapiente, minus exercitationem possimus quis ad inventore. Provident, veritatis
                        ipsum? Qui repellendus rem minima perferendis quaerat assumenda voluptatibus maiores libero, quasi
                        dolorem, consectetur similique aperiam magnam delectus at fugit voluptas reiciendis repudiandae veritatis!
                    </div>
                    <div class="document-body-data">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table class="table table-hover table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                    <tr>
                                        <td>test</td>
                                        <td>test</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="group-buttons">
                                    <div class="w-button">
                                        <a class="btn btn-primary" href="#" role="button">Показать историю номеров</a>
                                    </div>
                                    <div class="w-button">
                                        <a class="btn btn-success" href="#" role="button">Показать историю движения документа</a>
                                    </div>
                                    <div class="w-button">
                                        <a class="btn btn-info" href="#" role="button">Показать историю статусов</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="document-footer"></div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">© 2018 Rhino Project</p>
        </div>
    </footer>

@stop