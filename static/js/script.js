window.onload=function(){
    // NAVIGATION BAR SCROLLING EFFECT
    $(function () {
      $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        var $ban = $(".banner");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $ban.height()-$nav.height());
      });
    });

    if (document.getElementById('blog-hover-1') != null  && document.getElementById('blog-hover-2') !=null) {
        document.getElementById('blog-hover-1').onmouseover = function() {blogHover1(true)};
        document.getElementById('blog-hover-1').onmouseout = function() {blogHover1(false)};
        document.getElementById('blog-hover-2').onmouseover = function() {blogHover2(true)};
        document.getElementById('blog-hover-2').onmouseout = function() {blogHover2(false)};
        var hover1 = document.getElementById('blog-hover-display-1');
        var hover2 = document.getElementById('blog-hover-display-2');
        function blogHover1(hoverStatus){
            if (hoverStatus) {
                hover1.style.display = 'block';
                hover1.style.display = 'block';
            }
            else{
                hover1.style.display = 'none';
                hover1.style.display = 'none';
            }
        }
        function blogHover2(hoverStatus){
            if (hoverStatus) {
                hover2.style.display = 'block';
                hover2.style.display = 'block';
            }
            else{
                hover2.style.display = 'none';
                hover2.style.display = 'none';
            }
        }
    }
    else if (document.getElementById('btn_menu_kape') != null || document.getElementById('btn_menu_tsaa') != null) {
        document.getElementById('btn_menu_kape').onclick = function(){menuKapedisplay()};
        document.getElementById('btn_menu_tsaa').onclick = function(){menuTsaadisplay()};
        document.getElementById('btn-close').onclick = function(){closeMenu()};
        document.getElementById('btn-close-2').onclick = function(){closeMenu()};
        var menuKape = document.getElementById('menu-kape-display');
        var menuTsaa = document.getElementById('menu-tsaa-display');
        function menuKapedisplay(){
            hideMenu();
            if (menuKape.style.display == 'block') {
                menuKape.style.display = 'none';
            }
            else {
                menuKape.style.display = 'block'
                if (document.getElementById('show_espresso') != null || document.getElementById('show_brewed') != null
                    || document.getElementById('show_hotchoco') != null || document.getElementById('show_blended') != null) {

                    document.getElementById('show_espresso').onclick = function(){espresso()};
                    document.getElementById('show_brewed').onclick = function(){brewed()};
                    document.getElementById('show_hotchoco').onclick = function(){hotchoco()};
                    document.getElementById('show_blended').onclick = function(){blended()};
                    var espressoCol = document.getElementById('espresso');
                    var brewedCol = document.getElementById('brewed');
                    var hotchocoCol = document.getElementById('hotchoco');
                    var blendedCol = document.getElementById('blended');

                    function espresso(){
                        hide();
                        espressoCol.style.display = 'block';   
                    }
                    function brewed(){
                        hide();
                        brewedCol.style.display = 'block';   
                    }   
                    function hotchoco(){
                        hide();
                        hotchocoCol.style.display = 'block';
                    }
                    function blended(){
                        hide();
                        blendedCol.style.display = 'block';
                    }
                    function hide(){
                        espressoCol.style.display = 'none';
                        brewedCol.style.display = 'none';
                        hotchocoCol.style.display = 'none';
                        blendedCol.style.display = 'none';
                    }
                }
            }        
        }
        function menuTsaadisplay(){
            hideMenu();
            if (menuTsaa.style.display == 'block') {
                menuTsaa.style.display = 'none';
            }
            else {
                menuTsaa.style.display = 'block'
                if (document.getElementById('show_handcrafted') != null || document.getElementById('show_fullLeaf') != null) {

                    document.getElementById('show_handcrafted').onclick = function(){handcrafted()};
                    document.getElementById('show_fullLeaf').onclick = function(){fullLeaf()};
                    var handcraftedCol = document.getElementById('handcrafted');
                    var fullLeafCol = document.getElementById('fullLeaf');

                    function handcrafted(){
                        hide();
                        handcraftedCol.style.display = 'block';   
                    }
                    function fullLeaf(){
                        hide();
                        fullLeafCol.style.display = 'block';   
                    }
                    function hide(){
                        handcraftedCol.style.display = 'none';
                        fullLeafCol.style.display = 'none';
                    }
                }
            }        
        }
        function hideMenu(){
            menuKape.style.display = 'none';
            menuTsaa.style.display = 'none';
        }
        function closeMenu(){
            menuKape.style.display = 'none';
            menuTsaa.style.display = 'none';   
        }
    }
}
