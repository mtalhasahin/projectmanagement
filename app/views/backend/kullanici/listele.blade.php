@extends('backend.admin.layout.master')
@section('content')
<div id="container">
<div class="main_content">
<div class="row-fluid">
                                <div class="span12 project_detail">
                                       <div class="span widget">
                                        <div class="widget-header">
                                            <span class="title">Tüm Kullanıcılar</span>
                                        </div>
                                        <div class="widget-content table-container">
                                            <table id="datatables" class="table table-striped">
                                                <thead>
                                                    <tr class="active">
                                                        <th class="success">Ad Soyad</th>
                                                        <th>E-Posta Adresi</th>
                                                        <th>Durum</th>
                                                        <th width="13%">İşlemler</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr class="warning">
                                                        <td>{{$user->nameusername}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td><input class="aktif" data-id="{{$user->id}}" type="checkbox" data-provide="ibutton" data-label-on="Aktif" data-label-off="Pasif" @if($user->is_active==1) checked @endif></td>
                                                        <td width="13%">
                                                            <a  href="{{URL::to('kullanici/kullaniciduzenle/'.$user->id.'')}}"  class="btn btn-mini btn-primary">Düzenle</a>
                                                        <a onclick="return confirm('Seçili kullanıcıyı silmek istediğinize emin misiniz?')" href="{{URL::to('kullanici/kullanicisil/'.$user->id.'')}}" class="btn btn-mini btn-danger">Sil</a>
                                                        </td>
                                                       
                                                    </tr>
                                                   @endforeach
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                     </div>
</div>
</div>
@stop




<!--Css Dosyalarının Yeri -->
@section('css')
{{HTML::style('Backend/plugins/ibutton/jquery.ibutton.css')}}


@stop

<!--JavaScript Dosyalarının Yeri -->

@section('js')
<!-- DataTables -->
 <script src="{{URL::to('Backend/plugins/datatables/jquery.dataTables.js')}}"></script>
   <script src="{{URL::to('Backend/plugins/datatables/dataTables.bootstrap.js')}}"></script>
   <script src="{{URL::to('Backend/plugins/ibutton/jquery.ibutton.min.js')}}"></script>
   
   <script type="text/javascript" >
$('.aktif').on('change', function() {
    var id = $(this).attr('data-id');
    if ($(this).is(':checked')) {
        var aktif = 1;
    } else {
        var aktif = 0;
    }
$.getJSON("{{ URL::to('kullanici/kullaniciaktif/') }}/" + id + '/'+ aktif, function(event) {
        $.pnotify.defaults.history = false;
        $.pnotify({
            title: event.title,
            text: event.text,
            type: event.type
        });
    });
});
</script>
   
   <script type="text/javascript">
   $(document).ready(function(){
      $('#datatables').dataTable({
          "pagingType": "scrolling",
          "bJQueryUI":true,
          "sPaginationType":"full_numbers",
          "oLanguage":{
          
           "sProcessing":   "İşleniyor...",
           "sLengthMenu":   "Sayfada _MENU_ Kayıt Göster",
           "sZeroRecords":  "Eşleşen Kayıt Bulunmadı",
    "sInfo":         "  _TOTAL_ Kayıttan _START_ - _END_ Arası Kayıtlar",
    "sInfoEmpty":    "Kayıt Yok",
    "sInfoFiltered": "( _MAX_ Kayıt İçerisinden Bulunan)",
    "sInfoPostFix":  "",
    "sSearch":       "Bul:",
    "sUrl":          "",
    "oPaginate": {
        
        "sFirst":    "İlk",
        "sPrevious": "Önceki",
        "sNext":     "Sonraki",
        "sLast":     "Son"
          
    }}}); 
   });
   </script>
   
    
   
   
@stop

