
<!-- Il faut tester si l'oraganisateur à la droit de voir le menu -->
<!-- Sidebar navigation-->


<nav class="sidebar-nav">
    <ul id="sidebarnav">
       
        <!-- <li> 
            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                <i class="ti-user"></i>
                <span class="hide-menu">Menu 1 </span>
            </a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="">ITEM 1 </a></li>
            </ul>
        </li> -->
        
        <li> 
            <!-- <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="true">
                <i class="ti-user"></i>
                <span class="hide-menu">Menu 2 </span>
            </a> -->

            <ul aria-expanded="false" class="collapse in">
                <li><a href="{{route('aeroports.index')}}">Aéroports </a></li>
                <li><a href="{{route('pays.index')}}">Pays </a></li>
                <li><a href="{{route('villes.index')}}">Villes </a></li>
            </ul>
        </li>
       
    </ul>
</nav>