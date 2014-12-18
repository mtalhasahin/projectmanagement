@extends('backend.admin.layout.master')
@section('content')


<div id="container">
<div class="main_content">
    <div class="row-fluid">                            

        <div class="span12 project_detail">
            <h2><a href="{{URL::to('panel')}}">Dashboard</a> / Kullanıcı Ekle</h2>
            <div class="widget">
                
                <div class="widget-content form-container">
                    <form class="form-horizontal" method="post" action="{{URL::to('kullanici/kullaniciekle')}}">
                        <fieldset class="wizard-step">
                            <legend class="wizard-label"><i class="icon-user"></i> Kullanıcı</legend>
                        <div class="control-group">
                            <label class="control-label" for="input00">Ad Soyad <span class="required">*</span></label>
                            <div class="controls">
                                <input name="adsoyad" type="text" id="input00" class="span12">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="input01">E-Posta Adresi <span class="required">*</span></label>
                            <div class="controls">
                                <input name="email" type="email" id="input01" class="span12" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="input02">Şifre <span class="required">*</span></label>
                            <div class="controls">
                                <input name="password" type="password" id="input02" class="span12" required>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                            <button type="reset" class="btn btn-danger" type="reset">Vazgeç</button>
                        </div>
                        </fieldset>
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

