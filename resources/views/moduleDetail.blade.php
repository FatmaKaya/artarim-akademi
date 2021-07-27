@extends('_layouts.default')
@section('content')
    <?php
    if(isset($result["item"]["id"])) {
        $title = "Modül Düzenle";
    } else {
        $title = "Modül Ekle";
    }
    ?>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <div class="m-content">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                <i class=""></i> {{$title}}
                            </h3>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right" action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Tipi: </label>
                            <div class="col-lg-3">
                                <input type="text" name="type" value="<?php echo @$result['item']["type"];?>" class="form-control m-input">
                            </div>
                            <label class="col-form-label col-md-2"> Kategory: </label>
                            <div class="col-lg-3">
                                <input type="text" name="category" value="<?php echo @$result['item']["category"];?>" class="form-control m-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Modül Adı: </label>
                            <div class="col-lg-10">
                                <input type="text" name="name" value="<?php echo @$result['item']["name"];?>" class="form-control m-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Başlık: </label>
                            <div class="col-lg-10">
                                <input type="text" name="title" value="<?php echo @$result['item']["title"];?>" class="form-control m-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Aktif </label>
                            <div class="col-md-3">
                                <input <?php if(@$result['item']["active"]=="1") echo "checked";?> data-switch="true" type="checkbox" name="active" id="test" data-on-text="Açık" data-off-text="Kapalı"  data-on-color="primary" data-off-color="danger">
                            </div>
                            <label class="col-form-label col-md-2"> Meterial icon: </label>
                            <div class="col-lg-3">
                                <input type="text" name="icon" value="<?php echo @$result['item']["icon"];?>" class="form-control m-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2">  Açıklama </label>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class=" m-input-icon--left turkish">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span> <i class="lang tr"></i></span>
                                    </span>
                                    <textarea id="demo2" name="content"  rows="6" placeholder="Açıklama"
                                      class="ckeditor form-control col-md-12"><?php echo @$result["item"]["content"]?></textarea>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Resim </label>
                            <div class="col-lg-3">
                                <div id="single" class="gallery">
                                    <div class="listItems">
                                        <div class="image-box">
                                            <img class="image-back" src="{{@$result['item']['imageurl']}}">
                                            <a href="#" class="select-image">Resmi Değiştir</a>
                                            <input class="image-input d-none" accept="image/*" type="file" />
                                            <input type="hidden" value="{{@$result['item']['imageurl']}}" name="imageurl" class="targetInput">
                                        </div>
                                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-12 ml-lg-auto">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg pull-right">
                                        Kaydet
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    <script src="{{asset("/js/imageUpload.js")}}" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    jQuery(document).ready(function () {
        imageUpload("#single","admin_logo");
    });

   </script>
@stop