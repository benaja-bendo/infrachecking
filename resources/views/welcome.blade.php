<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InfraChecking</title>
        <!-- Fonts -->
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/theme-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    </head>
    <body>

    <main class="main" id="top">
        <div class="container">
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div><a class="navbar-brand" href="index.html">
                        <div class="d-flex align-items-center py-3"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text"> Home</span></div>
                                </a>
                                <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link active" href="index.html">Dashboard</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home/dashboard-alt.html">Dashboard alt</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home/feed.html">Feed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="home/landing.html">Landing</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-copy"></span></span><span class="nav-link-text"> Pages</span></div>
                                </a>
                                <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="pages/activity.html">Activity</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/associations.html">Associations</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/billing.html">Billing</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages-errors" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages-errors">Errors</a>
                                        <ul class="nav collapse" id="pages-errors" data-parent="#pages">
                                            <li class="nav-item"><a class="nav-link" href="pages/errors/404.html">404</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/errors/500.html">500</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="pages/event-create.html">Event create</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/event-detail.html">Event detail</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/events.html">Events</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages-faq" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages-faq">
                                            <div class="d-flex align-items-center">Faq<span class="badge rounded-pill ml-2 badge-soft-success">New</span></div>
                                        </a>
                                        <ul class="nav collapse" id="pages-faq" data-parent="#pages">
                                            <li class="nav-item"><a class="nav-link" href="pages/faq/faq-basic.html">Faq basic</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/faq/faq-alt.html">Faq alt</a></li>
                                            <li class="nav-item"><a class="nav-link" href="pages/faq/faq-accordion.html">Faq accordion</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="pages/invite-people.html">Invite people</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/invoice.html">Invoice</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/notifications.html">Notifications</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/people.html">People</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/pricing.html">Pricing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/pricing-alt.html">Pricing alt</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/privacy-policy.html">
                                            <div class="d-flex align-items-center">Privacy policy<span class="badge rounded-pill ml-2 badge-soft-success">New</span></div>
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/profile.html">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/settings.html">Settings</a></li>
                                    <li class="nav-item"><a class="nav-link" href="pages/starter.html">Starter</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="chat.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text"> Chat</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" href="kanban.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text"> Kanban</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link" href="calendar.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text"> Calendar</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text"> Email</span></div>
                                </a>
                                <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="email/inbox.html">Inbox</a></li>
                                    <li class="nav-item"><a class="nav-link" href="email/email-detail.html">Email detail</a></li>
                                    <li class="nav-item"><a class="nav-link" href="email/compose.html">Compose</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-unlock-alt"></span></span><span class="nav-link-text"> Authentication</span></div>
                                </a>
                                <ul class="nav collapse" id="authentication" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-basic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-basic">Basic</a>
                                        <ul class="nav collapse" id="authentication-basic" data-parent="#authentication">
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/logout.html">Logout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/register.html">Register</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/forgot-password.html">Forgot password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/reset-password.html">Reset password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/confirm-mail.html">Confirm mail</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/basic/lock-screen.html">Lock screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-card">Card</a>
                                        <ul class="nav collapse" id="authentication-card" data-parent="#authentication">
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/logout.html">Logout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/register.html">Register</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/forgot-password.html">Forgot password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/reset-password.html">Reset password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/confirm-mail.html">Confirm mail</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/card/lock-screen.html">Lock screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-split" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-split">Split</a>
                                        <ul class="nav collapse" id="authentication-split" data-parent="#authentication">
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/login.html">Login</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/logout.html">Logout</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/register.html">Register</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/forgot-password.html">Forgot password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/reset-password.html">Reset password</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/confirm-mail.html">Confirm mail</a></li>
                                            <li class="nav-item"><a class="nav-link" href="authentication/split/lock-screen.html">Lock screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="authentication/wizard.html">Wizard</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#!" data-toggle="modal" data-target="#authentication-modal">In modal</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#e-commerce" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="e-commerce">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cart-plus"></span></span><span class="nav-link-text"> E commerce</span></div>
                                </a>
                                <ul class="nav collapse" id="e-commerce" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/checkout.html">Checkout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/customer-details.html">Customer details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/customers.html">Customers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/order-details.html">Order details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/orders.html">Orders</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-details.html">Product details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-grid.html">Product grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/product-list.html">Product list</a></li>
                                    <li class="nav-item"><a class="nav-link" href="e-commerce/shopping-cart.html">Shopping cart</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-vertical-divider">
                            <hr class="navbar-vertical-hr my-2" />
                        </div>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="widgets.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text"> Widgets</span></div>
                                </a></li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text"> Components</span></div>
                                </a>
                                <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="components/accordion.html">Accordion</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/alerts.html">Alerts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/avatar.html">Avatar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/background.html">Background</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/badges.html">Badges</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/breadcrumb.html">Breadcrumb</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/bulk-select.html">Bulk select</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/buttons.html">Buttons</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/cards.html">Cards</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/carousel.html">Carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/close-button.html">Close button</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/collapse.html">Collapse</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/cookie-notice.html">Cookie notice</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/dropdowns.html">Dropdowns</a></li>
                                    <li class="nav-item"><a class="nav-link nav-link-disable" href="components/fancyscroll.html">Fancyscroll</a></li>
                                    <li class="nav-item"><a class="nav-link nav-link-disable" href="components/fancytab.html">Fancytab</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/figures.html">Figures</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/hoverbox.html">Hoverbox</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/images.html">Images</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/list-group.html">List group</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/modals.html">Modals</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components-navbar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components-navbar">Navbar</a>
                                        <ul class="nav collapse" id="components-navbar" data-parent="#components">
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/default.html">Default</a></li>
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/vertical.html">Vertical</a></li>
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/darken-on-scroll.html">Darken on scroll</a></li>
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/top.html">Top</a></li>
                                            <li class="nav-item"><a class="nav-link" href="components/navbar/combo.html">Combo</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="components/navs.html">Navs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/page-headers.html">Page headers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/pagination.html">Pagination</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/popovers.html">Popovers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/progress.html">Progress</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/scrollspy.html">Scrollspy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/search.html">Search</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/sidepanel.html">Sidepanel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/spinners.html">Spinners</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/tables.html">Tables</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/tabs.html">Tabs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/toasts.html">Toasts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/tooltips.html">Tooltips</a></li>
                                    <li class="nav-item"><a class="nav-link" href="components/typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="forms">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-align-left"></span></span><span class="nav-link-text"> Forms</span></div>
                                </a>
                                <ul class="nav collapse" id="forms" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="forms/checks.html">Checks</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/file.html">File</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/form-control.html">Form control</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/input-group.html">Input group</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/layout.html">Layout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/overview.html">Overview</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/range.html">Range</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/select.html">Select</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/validation.html">Validation</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="utilities">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text"> Utilities</span></div>
                                </a>
                                <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="utilities/borders.html">Borders</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/clearfix.html">Clearfix</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/colored-links.html">Colored links</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/colors.html">Colors</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/display.html">Display</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/embed.html">Embed</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/flex.html">Flex</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/float.html">Float</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/grid.html">Grid</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/position.html">Position</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/sizing.html">Sizing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/spacing.html">Spacing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/stretched-link.html">Stretched link</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/text-truncation.html">Text truncation</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/vertical-align.html">Vertical align</a></li>
                                    <li class="nav-item"><a class="nav-link" href="utilities/visibility.html">Visibility</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plug"></span></span><span class="nav-link-text"> Plugins</span></div>
                                </a>
                                <ul class="nav collapse" id="plugins" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="plugins/anchor.html">Anchor</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/countup.html">Countup</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/choices.html">Choices</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/date-picker.html">Date picker</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/draggable.html">Draggable</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/dropzone.html">Dropzone</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/echarts.html">Echarts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/emoji-button.html">Emoji button</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/fontawesome.html">Fontawesome</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/fullcalendar.html">Fullcalendar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/glightbox.html">Glightbox</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/progressbar.html">Progressbar</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/inline-player.html">Inline player</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/list.html">List</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/lottie.html">Lottie</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/typed-text.html">Typed text</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/tinymce.html">Tinymce</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/swiper.html">Swiper</a></li>
                                    <li class="nav-item"><a class="nav-link" href="plugins/rater.html">Rater</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-map" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-map">Map</a>
                                        <ul class="nav collapse" id="plugins-map" data-parent="#plugins">
                                            <li class="nav-item"><a class="nav-link" href="plugins/map/leaflet-map.html">Leaflet map</a></li>
                                            <li class="nav-item"><a class="nav-link" href="plugins/map/google-map.html">Google map</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-vertical-divider">
                            <hr class="navbar-vertical-hr my-2" />
                        </div>
                        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text"> Documentation</span></div>
                                </a>
                                <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
                                    <li class="nav-item"><a class="nav-link" href="documentation/getting-started.html">Getting started</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/file-structure.html">File structure</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/customization.html">Customization</a></li>
                                    <li class="nav-item"><a class="nav-link nav-link-disable" href="documentation/dark-mode.html">Dark mode</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/fluid-layout.html">Fluid layout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/gulp.html">Gulp</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/RTL.html">RTL</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/plugins.html">Plugins</a></li>
                                    <li class="nav-item"><a class="nav-link" href="documentation/design-file.html">Design file</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="changelog.html">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text"> Changelog</span></div>
                                </a></li>
                        </ul>
                        <div class="settings">
                            <div class="navbar-vertical-divider">
                                <hr class="navbar-vertical-hr my-3" />
                            </div><a class="btn btn-sm btn-block btn-purchase" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
                        <div class="d-flex align-items-center"><img class="mr-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box" data-list='{"valueNames":["title"]}'>
                                <form class="position-relative" data-toggle="search" data-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form><button class="btn-close position-absolute right-0 top-50 translate-middle shadow-none p-1 mr-1 fs--2" type="button" data-dismiss="search"></button>
                                <div class="dropdown-menu border font-base left-0 mt-2 py-0 overflow-hidden w-100">
                                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                                        <h6 class="dropdown-header font-weight-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="pages/events.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle mr-2 text-300 fs--2"></span>
                                                <div class="font-weight-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="e-commerce/customers.html">
                                            <div class="d-flex align-items-center">
                                                <span class="fas fa-circle mr-2 text-300 fs--2"></span>
                                                <div class="font-weight-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                                            </div>
                                        </a>
                                        <hr class="bg-200" />
                                        <h6 class="dropdown-header font-weight-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="e-commerce/customers.html">
                                            <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-warning">customers:</span>
                                                <div class="flex-1 fs--1 title">All customers list</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0" href="pages/events.html">
                                            <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-success">events:</span>
                                                <div class="flex-1 fs--1 title">Latest events in current month</div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/product-grid.html">
                                            <div class="d-flex align-items-center"><span class="badge font-weight-medium text-decoration-none mr-2 badge-soft-info">products:</span>
                                                <div class="flex-1 fs--1 title">Most popular products</div>
                                            </div>
                                        </a>
                                        <hr class="bg-200" />
                                        <h6 class="dropdown-header font-weight-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail mr-2"><img class="border h-100 w-100 fit-cover rounded-lg" src="assets/img/products/3-thumb.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">iPhone</h6>
                                                    <p class="fs--2 mb-0"><span class="font-weight-semi-bold">Antony</span><span class="font-weight-medium text-600 ml-2">27 Sep at 10:30 AM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="#!">
                                            <div class="d-flex align-items-center">
                                                <div class="file-thumbnail mr-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                                    <p class="fs--2 mb-0"><span class="font-weight-semi-bold">John</span><span class="font-weight-medium text-600 ml-2">30 Sep at 12:30 PM</span></p>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="bg-200" />
                                        <h6 class="dropdown-header font-weight-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="pages/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l status-online mr-2">
                                                    <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Anna Karinina</h6>
                                                    <p class="fs--2 mb-0">Technext Limited</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l mr-2">
                                                    <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Antony Hopkins</h6>
                                                    <p class="fs--2 mb-0">Brain Trust</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item px-card py-2" href="pages/profile.html">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-l mr-2">
                                                    <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 title">Emma Watson</h6>
                                                    <p class="fs--2 mb-0">Google</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
                        <li class="nav-item"><a class="nav-link settings-popover" href="#settings-modal" data-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a></li>
                        <li class="nav-item">
                            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush font-weight-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                                                    <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl mr-3">
                                                        <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                                                    <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                                <div class="bg-white rounded-lg py-2">
                                    <a class="dropdown-item font-weight-bold text-warning" href="#!"><span class="fas fa-crown mr-1"></span><span>Go Pro</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Set status</a>
                                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                                    <a class="dropdown-item" href="#!">Feedback</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                                    <a class="dropdown-item" href="authentication/card/logout.html">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>
                <div class="row g-3">
                    <div class="col-sm-6 col-md-4">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card" style="background-image:url(../assets/img/illustrations/corner-1.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Customers<span class="badge badge-soft-warning rounded-pill ml-2">-0.23%</span></h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif text-warning" data-countup="{&quot;endValue&quot;:58.386,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">58.39k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="../e-commerce/customers.html">See all<svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span> --></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card" style="background-image:url(../assets/img/illustrations/corner-2.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Orders<span class="badge badge-soft-info rounded-pill ml-2">0.0%</span></h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif text-info" data-countup="{&quot;endValue&quot;:23.434,&quot;decimalPlaces&quot;:2,&quot;suffix&quot;:&quot;k&quot;}">23.43k</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="../e-commerce/orders.html">All orders<svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span> --></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 overflow-hidden" style="min-width: 12rem">
                            <div class="bg-holder bg-card" style="background-image:url(../assets/img/illustrations/corner-3.png);"></div>
                            <!--/.bg-holder-->
                            <div class="card-body position-relative">
                                <h6>Revenue<span class="badge badge-soft-success rounded-pill ml-2">9.54%</span></h6>
                                <div class="display-4 fs-4 mb-2 font-weight-normal font-sans-serif" data-countup="{&quot;endValue&quot;:43594,&quot;prefix&quot;:&quot;$&quot;}">$43,594</div><a class="font-weight-semi-bold fs--1 text-nowrap" href="../index.html">Statistics<svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span> --></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" id="recentPurchaseTable" >
                    <div class="card-header">
                        <div class="row flex-between-center">
                            <div class="col-6 col-sm-auto d-flex align-items-center pr-0">
                                <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Tous les utilisateurs</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm fs--1 mb-0">
                                <thead class="bg-200 text-900">
                                <tr>
                                    <th class="sort pr-1 align-middle white-space-nowrap" data-sort="name">Nom</th>
                                    <th class="sort pr-1 align-middle white-space-nowrap" data-sort="email">Téléphone</th>
                                    <th class="sort pr-1 align-middle white-space-nowrap" data-sort="product">fonction</th>
                                    <th class="sort pr-1 align-middle white-space-nowrap text-right" data-sort="amount">Amount</th>
                                    <th class="no-sort pr-1 align-middle data-table-row-action"></th>
                                </tr>
                                </thead>
                                <tbody class="list" id="table-purchase-body"><tr class="btn-reveal-trigger">

                                    <th class="align-middle white-space-nowrap name"><a href="../pages/customer-details.html">Sylvia Plath</a></th>
                                    <td class="align-middle white-space-nowrap email">john@gmail.com</td>
                                    <td class="align-middle white-space-nowrap product">Slick - Drag &amp; Drop Bootstrap Generator</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span></td>
                                    <td class="align-middle text-right amount">$99</td>
                                    <td class="align-middle white-space-nowrap">
                                        <div class="dropdown font-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown0" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown0"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="btn-reveal-trigger">

                                    <th class="align-middle white-space-nowrap name"><a href="../pages/customer-details.html">Homer</a></th>
                                    <td class="align-middle white-space-nowrap email">sylvia@mail.ru</td>
                                    <td class="align-middle white-space-nowrap product">Bose SoundSport Wireless Headphones</td>
                                    <td class="align-middle text-center fs-0 white-space-nowrap payment"><span class="badge badge rounded-pill badge-soft-success">Success<svg class="svg-inline--fa fa-check fa-w-16 ml-1" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="ml-1 fas fa-check" data-fa-transform="shrink-2"></span> --></span></td>
                                    <td class="align-middle text-right amount">$634</td>
                                    <td class="align-middle white-space-nowrap">
                                        <div class="dropdown font-sans-serif"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal float-right" type="button" id="dropdown1" data-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--1"></span> --></button>
                                            <div class="dropdown-menu dropdown-menu-right border py-2" aria-labelledby="dropdown1"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item" href="#!">Refund</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item text-warning" href="#!">Archive</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center">
                            <div class="pagination d-none"><li class="active"><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">1</a></li><li><a class="page" href="javascript:function Z(){Z=&quot;&quot;}Z()">2</a></li></div>
                            <div class="col">
                                <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block mr-2" data-list-info="data-list-info">1 to 8 of 11</span><span class="d-none d-sm-inline-block mr-2">—  </span><a class="font-weight-semi-bold" href="#!" data-list-view="*">View all<svg class="svg-inline--fa fa-angle-right fa-w-8 ml-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ml-1" data-fa-transform="down-1"></span> --></a></p>
                            </div>
                            <div class="col-auto d-flex"><button class="btn btn-sm btn-light" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button><button class="btn btn-sm px-4 ml-2 btn-primary" type="button" data-list-pagination="next"><span>Next</span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    </body>
</html>
