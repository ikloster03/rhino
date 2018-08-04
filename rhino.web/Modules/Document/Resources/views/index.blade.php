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
            <div class="c-search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Найти документы...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="c-cards">
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
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
                    </div>
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
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
                    </div>
                    <div class="doc-card-footer">
                        <div class="doc-card-footer-date text-muted">
                            Обновлено:
                            <time>4 часа назад</time>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
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
                    <div class="doc-card-footer">
                        <div class="doc-card-footer-date text-muted">
                            Обновлено:
                            <time>4 часа назад</time>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
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
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
                    </div>
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
                    </div>
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
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
                    </div>
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
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
                    </div>
                    <div class="doc-card-footer">
                        <div class="doc-card-footer-date text-muted">
                            Обновлено:
                            <time>4 часа назад</time>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
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
                    <div class="doc-card-footer">
                        <div class="doc-card-footer-date text-muted">
                            Обновлено:
                            <time>4 часа назад</time>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
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
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
                    </div>
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
                    </div>
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
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
                    </div>
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
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
                    </div>
                    <div class="doc-card-footer">
                        <div class="doc-card-footer-date text-muted">
                            Обновлено:
                            <time>4 часа назад</time>
                        </div>
                    </div>
                </div>
            </div>
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
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
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
                    <div class="doc-card-footer">
                        <div class="doc-card-footer-date text-muted">
                            Обновлено:
                            <time>4 часа назад</time>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
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
            <div class="w-doc-card">
                <div class="doc-card">
                    <div class="doc-card-title">
                        <a href="#" class="doc-card-title__link">Test Card 1</a>
                    </div>
                    <div class="doc-card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil at pariatur fugit recusandae impedit modi nostrum corporis
                        doloribus non nisi.
                    </div>
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






        </div>
    </main>


    <footer class="footer">
        <div class="container">
            <p class="text-muted">© 2018 Rhino Project</p>
        </div>
    </footer>
@stop
