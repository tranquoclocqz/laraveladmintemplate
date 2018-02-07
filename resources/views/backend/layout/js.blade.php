<script src="{{asset('/public/asset/admin/js/jquery.min.js')}}"></script> 
<script src="{{asset('/public/asset/admin/')}}/js/bootstrap.min.js"></script> +
<script src="{{asset('/public/asset/admin/')}}/js/jquery.ui.custom.js"></script> 
<script>
  $(document).ready(function() {
    var _length = $(".submenu").length,_e = $(".submenu");
    for (var i = 0; i < _length; i++) {
      var _i =  _e.eq(i).find('li').length;
      _e.eq(i).find(".label-important").text(_i);
    }
  });
</script>