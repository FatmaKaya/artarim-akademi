@extends('_layouts.default')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Yaklaşan Etkinlikler
                                <small>
                                    Listesi
                                </small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    {{ csrf_field() }}
                    <div class="m-form m-form--label-align-right m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-4">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                <a href="{{env("APP_URL")}}/admin/events/add" class="btn btn-primary m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
                                    <span>
                                        <i class="flaticon-plus"></i>
                                        <span>
                                            Yeni Etkinlik
                                        </span>
                                    </span>
                                </a>
                                <div class="m-separator m-separator--dashed d-xl-none"></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title" style="width: 100%">
                                            <h3 class="m-portlet__head-text" >
                                                Etkinlikler
                                                <small style="float: right">
                                                    <i class="la la-arrows"></i> Mouse ile sürükle bırak sıralayınız
                                                </small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body" style="padding: 0;">
                                    <ol class="list sortable">
                                        <?php
                                        foreach ($result["items"] as $key => $value) {
                                        ?>
                                        <li id="list_<?php echo $value['id']; ?>">
                                            <strong class="item-move"><a href="#" class=" m-portlet__nav-link btn m-btn btn-secondary m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-arrows"></i></a></strong>
                                            <span><?php echo $value["name"];?></span>
                                            <div class="islem">
                                                <a href="<?php echo env("APP_URL")."/admin/events/edit/".$value["id"];?>" class="edit-button m-portlet__nav-link btn m-btn btn-primary m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-edit"></i></a>
                                                <a href="<?php echo env("APP_URL")."/admin/events/delete/".$value["id"];?>" class="delete-button m-portlet__nav-link btn m-btn btn-danger m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-trash"></i></a>
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ol>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <script src="{{asset("/js/nestedSortable.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("/js/imageUpload.js")}}" type="text/javascript"></script>

    <script>
        jQuery(document).ready(function(){
            imageUpload("#single","imageurl");
            shortFunc($('.sortable'),'/admin/events/order');
            function shortFunc (element, url) {
                element.nestedSortable({
                    axis: 'y',
                    opacity: 0.7,
                    handle: 'strong',
                    items: 'li',
                    maxLevels: 1,
                    dropOnEmpty: true,
                    tree: true,
                    update: function(event, ui) {
                        var formDataOrder = new FormData();
                        formDataOrder.append("list_order", JSON.stringify($(this).nestedSortable('toArray')));
                        formDataOrder.append("_token", $('input[name=_token]').val());
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: formDataOrder,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                console.log(response);
                            }
                        });
                    }
                }); // fin sortable
            }
        });
    </script>
@stop