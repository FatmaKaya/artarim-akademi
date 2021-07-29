@extends('_layouts.default')
@section('content')
    <?php
    if(isset($result["item"]["id"])) {
        $title = "Etkinlik Düzenle";
        $startDate = date("Y.m.d H:i", strtotime(@$result["item"]["startDate"]));
        $endDate = date("Y.m.d H:i", strtotime(@$result["item"]["endDate"]));
    } else {
        $title = "Etkinlik Ekle";
        $startDate = date("Y.m.d H:i");
        $endDate = date("Y.m.d H:i");
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
                            <label class="col-form-label col-md-2"> Kategori: </label>
                            <div class="col-lg-10">
                                <input type="text" name="category" value="<?php echo @$result['item']["category"];?>" class="form-control m-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Başlık: </label>
                            <div class="col-lg-10">
                                <input type="text" name="name" value="<?php echo @$result['item']["name"];?>" class="form-control m-input">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Aktif </label>
                            <div class="col-md-4">
                                <input <?php if(@$result['item']["active"]=="1") echo "checked";?> data-switch="true" type="checkbox" name="active" id="test" data-on-text="Açık" data-off-text="Kapalı"  data-on-color="primary" data-off-color="danger">
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2">  Açıklama </label>
                            <div class="col-lg-10 col-md-10 col-sm-12">
                            <div class=" m-input-icon--left">
                                    <textarea id="demo2" name="content"  rows="6" placeholder="Açıklama"
                                      class="ckeditor form-control col-md-12"><?php echo @$result["item"]["content"]?></textarea>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-form-label col-md-2"> Başlangıç Tarihi </label>
                            <div class="col-md-3">
                                <div class='input-group date'>
                                    <input type='text' class="form-control m-input datetimepicker" value="<?php echo $startDate;?>" name="startDate" placeholder="Tarih / Saat Seçiniz" />
                                    <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o glyphicon-th"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                            <label class="col-form-label col-md-2"> Bitiş Tarihi </label>
                            <div class="col-md-3">
                                <div class='input-group date'>
                                    <input type='text' class="form-control m-input datetimepicker" value="<?php echo $endDate;?>" name="endDate" placeholder="Tarih / Saat Seçiniz" />
                                    <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar-check-o glyphicon-th"></i>
                                    </span>
                                    </div>
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