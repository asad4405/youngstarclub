<div class="right-sidebar">
    <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
            Layout Settings
            <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
            <i class="icon-copy ion-close-round"></i>
        </div>
    </div>
    <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
            <h4 class="pb-10 weight-600 font-18">Header Background</h4>
            <div class="mb-10 sidebar-btn-group pb-30">
                <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
            </div>

            <h4 class="pb-10 weight-600 font-18">Sidebar Background</h4>
            <div class="mb-10 sidebar-btn-group pb-30">
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
            </div>

            <h4 class="pb-10 weight-600 font-18">Menu Dropdown Icon</h4>
            <div class="pb-10 mb-10 sidebar-radio-group">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-1" checked="" />
                    <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-2" />
                    <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                        value="icon-style-3" />
                    <label class="custom-control-label" for="sidebaricon-3"><i
                            class="fa fa-angle-double-right"></i></label>
                </div>
            </div>

            <h4 class="pb-10 weight-600 font-18">Menu List Icon</h4>
            <div class="mb-10 sidebar-radio-group pb-30">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-1" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-2" />
                    <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                            aria-hidden="true"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-3" />
                    <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-4" checked="" />
                    <label class="custom-control-label" for="sidebariconlist-4"><i
                            class="icon-copy dw dw-next-2"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-5" />
                    <label class="custom-control-label" for="sidebariconlist-5"><i
                            class="dw dw-fast-forward-1"></i></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
                        value="icon-list-style-6" />
                    <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                </div>
            </div>

            <div class="text-center reset-options pt-30">
                <button class="btn btn-danger" id="reset-settings">
                    Reset Settings
                </button>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('dashboard') }}">
            <img src="" alt="" class="dark-logo" width="130" />
            <img src="" alt="" class="light-logo" width="130" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{ route('dashboard') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-person-circle"></span><span class="mtext">Members</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.member.index') }}">Members</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-table"></span><span class="mtext">Programs</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.program.index') }}">Programs</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-archive"></span><span class="mtext"> Accounts </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.collection.index') }}">Club Member Collection</a></li>
                        <li><a href="{{ route('admin.donation.index') }}">Donation</a></li>
                        <li><a href="{{ route('admin.expense.index') }}">Expense</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-archive"></span><span class="mtext"> Settings </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.setting.index') }}">General Setting</a></li>
                        <li><a href="{{ route('admin.setting.contact.index') }}">Contact</a></li>
                        <li><a href="{{ route('admin.setting.social-media.index') }}">Social Media</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-code"></span><span class="mtext"> API Integration </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.mail-gateway.index') }}">Mail Gateway</a></li>
                    </ul>
                </li>
                <li>
                    <a href="calendar.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-calendar4-week"></span><span class="mtext">Calendar</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-archive"></span><span class="mtext"> UI Elements </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-cards-hover.html">Cards Hover</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li>
                            <a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a>
                        </li>
                        <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                        <li><a href="ui-notification.html">Notification</a></li>
                        <li><a href="ui-timeline.html">Timeline</a></li>
                        <li><a href="ui-progressbar.html">Progressbar</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-list-group.html">List group</a></li>
                        <li><a href="ui-range-slider.html">Range slider</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-command"></span><span class="mtext">Icons</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="bootstrap-icon.html">Bootstrap Icons</a></li>
                        <li><a href="font-awesome.html">FontAwesome Icons</a></li>
                        <li><a href="foundation.html">Foundation Icons</a></li>
                        <li><a href="ionicons.html">Ionicons Icons</a></li>
                        <li><a href="themify.html">Themify Icons</a></li>
                        <li><a href="custom-icon.html">Custom Icons</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-pie-chart"></span><span class="mtext">Charts</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="highchart.html">Highchart</a></li>
                        <li><a href="knob-chart.html">jQuery Knob</a></li>
                        <li><a href="jvectormap.html">jvectormap</a></li>
                        <li><a href="apexcharts.html">Apexcharts</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-earmark-text"></span><span class="mtext">Additional
                            Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="video-player.html">Video Player</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="reset-password.html">Reset Password</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-bug"></span><span class="mtext">Error Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="400.html">400</a></li>
                        <li><a href="403.html">403</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="500.html">500</a></li>
                        <li><a href="503.html">503</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-back"></span><span class="mtext">Extra Pages</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="blank.html">Blank</a></li>
                        <li><a href="contact-directory.html">Contact Directory</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="product-detail.html">Product Detail</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="pricing-table.html">Pricing Tables</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-hdd-stack"></span><span class="mtext">Multi Level Menu</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="javascript:;">Level 2</a></li>
                                <li><a href="javascript:;">Level 2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                        <li><a href="javascript:;">Level 1</a></li>
                    </ul>
                </li>
                <li>
                    <a href="sitemap.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-diagram-3"></span><span class="mtext">Sitemap</span>
                    </a>
                </li>
                <li>
                    <a href="chat.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="invoice.html" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">Invoice</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-pdf"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank"
                        class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-layout-text-window-reverse"></span>
                        <span class="mtext">Landing Page
                            <img src="{{ asset('public/Backend/backend_asset/vendors') }}/images/coming-soon.png"
                                alt="" width="25" /></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
