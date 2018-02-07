<!DOCTYPE html>
<html lang="en">
<head>
@include('backend/layout/css')
@yield('css')
</head>
<body>
<!--Header-->
@include('backend/layout/header')
<!--END Header-->
@include('backend/layout/topmenu')
<!--sidebar-menu-->
@include('backend/layout/sidebarmenu')
<!--END sidebar-menu-->

<!--main-container-part-->
 @yield('content')
<!--END main-container-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->
@include('backend/layout/js')
@yield('script')
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
