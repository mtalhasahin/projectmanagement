@extends('backend.admin.layout.master')
@section('content')

<div id="container">
<div class="main_content">

    <div class="row-fluid">                            

        <div class="span12">
            <div class="widget">
                <div class="widget-header">
                    <span class="title">Kullanıcı Düzenle</span>
                </div>
                <div class="widget-content form-container">
                    <form class="form-horizontal" method="post" action="{{URL::to('kullanici/kullaniciduzenle/'.$user->id.'')}}">
                        <div class="control-group">
                            <label class="control-label" for="input00">Ad Soyad <span class="required">*</span></label>
                            <div class="controls">
                                <input value="{{$user->nameusername}}" name="adsoyad" type="text" id="input00" class="span12">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">E-Posta Adresi <span class="required">*</span></label>
                            <div class="controls">
                                <input value="{{$user->email}}" name="email" type="email" id="input01" class="span12" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input02">Şifre <span class="required">*</span></label>
                            <div class="controls">
                                <input name="password" type="password" id="input02" class="span12">
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                            <button type="reset" class="btn" type="reset">Vazgeç</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>


@stop




<!--Css Dosyalarının Yeri -->
@section('css')

@stop

<!--JavaScript Dosyalarının Yeri -->

@section('js')

@stop

