<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                {{--  Layouts --}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-pager"></i>
                    </div>
                    Layouts
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse " id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion" style="">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSlider" aria-expanded="false" aria-controls="collapseSlider">
                            <div class="sb-nav-link-icon">
                                <i class="fab fa-slideshare"></i>
                            </div>
                            slider
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseSlider" aria-labelledby="headingTwo" data-bs-parent="#slider" style="">
                            <a class="nav-link" href="{{ route('slider.index') }}">index</a>
                            <a class="nav-link" href="{{ route('slider.create') }}">create</a>
                        </div>


                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseNewsletter" aria-expanded="false" aria-controls="collapseNewsletter">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            newsletter
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseNewsletter" aria-labelledby="headingTwo" data-bs-parent="#newsletter" style="">
                            <a class="nav-link" href="{{ route('newsletter.index') }}">index</a>
                        </div>

                    </nav>
                </div>
                {{-- homepage-content --}}
                <div class="sb-sidenav-menu-heading">Pages</div>

                <a class="nav-link" href="{{ route('blog.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                    index - blog
                </a>

                {{-- aboutpage --}}
                <a class="nav-link" href="{{ route('about.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                    About
                </a>

                {{-- contactpage --}}
                <a class="nav-link" href="{{ route('contact.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    Contact
                </a>
            </div>
    </nav>
</div>
