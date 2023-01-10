
    <div id="sidebar" class="app-sidebar">

        <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

            <div class="menu">
                <div class="menu-header">Navigation</div>
                <div class="menu-item active">
                    <a href="{{route('dashboard')}}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item active">
                    <a href="{{route('general')}}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                        <span class="menu-text">General Settings</span>
                    </a>
                </div>
                <div class="menu-item active">
                    <a href="{{route('aboutUsSection')}}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                        <span class="menu-text">About Us</span>
                    </a>
                </div>
                {{-- <div class="menu-item">
                    <a href="analytics.html" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
                        <span class="menu-text">Analytics</span>
                    </a>
                </div> --}}
                {{-- <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <span class="menu-text">Email</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="email_inbox.html" class="menu-link">
                                <span class="menu-text">Inbox</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="email_compose.html" class="menu-link">
                                <span class="menu-text">Compose</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="email_detail.html" class="menu-link">
                                <span class="menu-text">Detail</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="menu-header">Components</div>
                {{-- <div class="menu-item">
                    <a href="widgets.html" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-columns-gap"></i></span>
                        <span class="menu-text">Widgets</span>
                    </a>
                </div> --}}
                {{-- <div class="menu-item has-sub">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon">
                            <i class="bi bi-bag-check"></i>
                            <span class="w-5px h-5px rounded-3 bg-theme position-absolute top-0 end-0 mt-3px me-3px"></span>
                        </div>
                        <div class="menu-text d-flex align-items-center">POS System</div>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="pos_customer_order.html" target="_blank" class="menu-link">
                                <div class="menu-text">Customer Order</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_kitchen_order.html" target="_blank" class="menu-link">
                                <div class="menu-text">Kitchen Order</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_counter_checkout.html" target="_blank" class="menu-link">
                                <div class="menu-text">Counter Checkout</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_table_booking.html" target="_blank" class="menu-link">
                                <div class="menu-text">Table Booking</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="pos_menu_stock.html" target="_blank" class="menu-link">
                                <div class="menu-text">Menu Stock</div>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-controller"></i></span>
                        <span class="menu-text">UI Kits</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="ui_bootstrap.html" class="menu-link">
                                <span class="menu-text">Bootstrap</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_buttons.html" class="menu-link">
                                <span class="menu-text">Buttons</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_card.html" class="menu-link">
                                <span class="menu-text">Card</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_icons.html" class="menu-link">
                                <span class="menu-text">Icons</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_modal_notification.html" class="menu-link">
                                <span class="menu-text">Modal & Notification</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_typography.html" class="menu-link">
                                <span class="menu-text">Typography</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="ui_tabs_accordions.html" class="menu-link">
                                <span class="menu-text">Tabs & Accordions</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-pen"></i></span>
                        <span class="menu-text">Home Page</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{route('slider')}}" class="menu-link">
                                <span class="menu-text">Slider</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{route('body_section_ones')}}" class="menu-link">
                                <span class="menu-text">How We Works</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{route('body_section_two')}}" class="menu-link">
                                <span class="menu-text">Why Choose Us</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{route('bodySectionThree')}}" class="menu-link">
                                <span class="menu-text">Body Section Three</span>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-pen"></i></span>
                        <span class="menu-text">Service</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{route('services')}}" class="menu-link">
                                <span class="menu-text">Service</span>
                            </a>
                        </div>
                        {{-- <div class="menu-item">
                            <a href="{{route('serviceDetailsForm')}}" class="menu-link">
                                <span class="menu-text">Service Details</span>
                            </a>
                        </div> --}}
                        
                        
                        
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-pen"></i></span>
                        <span class="menu-text">Pricing</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{route('homePricing')}}" class="menu-link">
                                <span class="menu-text">Home Pricing</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{route('pricing')}}" class="menu-link">
                                <span class="menu-text">Pricing</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{route('pricingList')}}" class="menu-link">
                                <span class="menu-text">Pricing List</span>
                            </a>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-pen"></i></span>
                        <span class="menu-text">Works</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="{{route('works')}}" class="menu-link">
                                <span class="menu-text">Our Works</span>
                            </a>
                        </div>
                         
                    </div>
                </div>
                {{-- <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-grid-3x3"></i></span>
                        <span class="menu-text">Tables</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="" class="menu-link">
                                <span class="menu-text">Caueses Category Table</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-link">
                                <span class="menu-text">Caueses Table</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-link">
                                <span class="menu-text">Awarness Area Table</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-link">
                                <span class="menu-text">Volunteer Table</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="" class="menu-link">
                                <span class="menu-text">Event Table</span>
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-pie-chart"></i></span>
                        <span class="menu-text">Charts</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="chart_js.html" class="menu-link">
                                <span class="menu-text">Chart.js</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="chart_apex.html" class="menu-link">
                                <span class="menu-text">Apexcharts.js</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a href="" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-compass"></i></span>
                        <span class="menu-text">Donation</span>
                    </a>
                </div>
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-layout-sidebar"></i></span>
                        <span class="menu-text">Layout</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="layout_starter.html" class="menu-link">
                                <span class="menu-text">Starter Page</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="layout_fixed_footer.html" class="menu-link">
                                <span class="menu-text">Fixed Footer</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="layout_full_height.html" class="menu-link">
                                <span class="menu-text">Full Height</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="layout_full_width.html" class="menu-link">
                                <span class="menu-text">Full Width</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="layout_boxed_layout.html" class="menu-link">
                                <span class="menu-text">Boxed Layout</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="layout_collapsed_sidebar.html" class="menu-link">
                                <span class="menu-text">Collapsed Sidebar</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item has-sub">
                    <a href="#" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-collection"></i></span>
                        <span class="menu-text">Pages</span>
                        <span class="menu-caret"><b class="caret"></b></span>
                    </a>
                    <div class="menu-submenu">
                        <div class="menu-item">
                            <a href="page_scrum_board.html" class="menu-link">
                                <span class="menu-text">Scrum Board</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_products.html" class="menu-link">
                                <span class="menu-text">Products</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_orders.html" class="menu-link">
                                <span class="menu-text">Orders</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_gallery.html" class="menu-link">
                                <span class="menu-text">Gallery</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_search_results.html" class="menu-link">
                                <span class="menu-text">Search Results</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_coming_soon.html" class="menu-link">
                                <span class="menu-text">Coming Soon Page</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_404_error.html" class="menu-link">
                                <span class="menu-text">404 Error Page</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_login.html" class="menu-link">
                                <span class="menu-text">Login</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="page_register.html" class="menu-link">
                                <span class="menu-text">Register</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-divider"></div>
                <div class="menu-header">Users</div>
                <div class="menu-item">
                    <a href="profile.html" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-people"></i></span>
                        <span class="menu-text">Profile</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="calendar.html" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-calendar4"></i></span>
                        <span class="menu-text">Calendar</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="settings.html" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-gear"></i></span>
                        <span class="menu-text">Settings</span>
                    </a>
                </div>--}}
                <div class="menu-item">
                    <a href="{{route('userMessage')}}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-gem"></i></span>
                        <span class="menu-text">User Message</span>
                    </a>
                </div> 
                <div class="menu-item">
                    <a href="{{route('freeTrailList')}}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-gem"></i></span>
                        <span class="menu-text">Free Trial</span>
                    </a>
                </div> 
                <div class="menu-item">
                    <a href="{{route('socialMediaLinks')}}" class="menu-link">
                        <span class="menu-icon"><i class="bi bi-gem"></i></span>
                        <span class="menu-text">Social Media Link</span>
                    </a>
                </div> 
            </div>

            
        </div>

    </div>
    <script data-cfasync="false" src="{{asset('aminAsset/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('aminAsset/assets/js/vendor.min.js')}}" type="02c80e47cfd3680c3ea95c64-text/javascript"></script>
